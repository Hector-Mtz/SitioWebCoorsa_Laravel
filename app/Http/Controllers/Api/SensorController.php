<?php

namespace App\Http\Controllers\Api;

use App\Models\cvs;
use App\Models\tarimas;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SensorController extends Controller
{
    /**
     * Determina si la tarima pertenece al viaje
     * y guarda la imagen
     * @param Request $request
     *
     */
    public function evidenciaTarima(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'informacion' => ['required', 'array'],
            'imageFile' => ['required', 'mimes:png,jpg,jpeg'],
            'rampaId' => ['required', 'exists:catalogorampas,id']
        ]);
        $luz = 'roja';
        $arrayResponse = [];
        try {

            if ($validator->fails()) {

                $arrayResponse[] = [
                    'success' => false,
                    'message' => 'Invalid Data',
                    'luz' => $luz,
                    'errors' => $validator->errors()
                ];
                return response()->json(["data" => $arrayResponse]);
            }
            $arrayInformacion = $request->informacion;

            foreach ($arrayInformacion as $cadenaQR) {
                try {
                    DB::beginTransaction();
                    $arrayQR = explode('|', $cadenaQR);
                    $plataforma = $arrayQR[0];
                    $conn = $plataforma === 'ai' ? 'mysql-ai' : 'mysql-we';
                    $idTarima = $arrayQR[2];
                    $nombreCv = $arrayQR[1];

                    // Creamos el Modelo cvs pra cambiar de base de datos
                    $cvsModel  = new cvs();
                    $cvsModel->changeConnection($conn);


                    $cvBuscado = $cvsModel->firstWhere([
                        ['cvs.activocv', '=', 1],
                        ['cvs.nombrecv', '=', $nombreCv]
                    ]);
                    if ($cvBuscado === null) {
                        $arrayResponse[] = [
                            'success' => false,
                            'messaje' => 'EL CV: ' . $nombreCv . ' no se encuentra en nuestros registros'
                        ];
                        continue;
                    }

                    // Creamos el Modelo cvs pra cambiar de base de datos
                    $tarimasModel  = new tarimas();
                    $tarimasModel->changeConnection($conn);

                    $tarimaBuscada = $tarimasModel->where('cv_id', $cvBuscado->id)
                        ->firstWhere([
                            ['tarimas.activotarima', '=', 1],
                            ['tarimas.id', '=', $idTarima]
                        ]);
                    if ($tarimaBuscada === null) {
                        $arrayResponse[] = [
                            'success' => false,
                            'messaje' => "Tarima no encontrada del CV: " . $cvBuscado->nombrecv
                        ];
                        continue;
                    }
                    // Al finalizar las validaciones de la dataQR
                    // Se analisan los tres casos

                    if ($tarimaBuscada->updated_at > now()->subSeconds(10)) {
                        // Se aplica cuando no se quiere realizar ninguna accion
                        $arrayResponse[] = [
                            'conexion' => 1
                        ];
                        continue;
                    }

                    // 1.- LA TARIMA NO PERTENECE A LA RAMPA
                    if (
                        $cvBuscado->catalogoestadoscv_id === 1 ||
                        $cvBuscado->catalogorampa_id != $request->rampaId
                    ) {
                        $luz = 'roja';
                        $message = 'LA TARIMA NO PERTENECE A LA RAMPA ' . $cvBuscado->catalogorampa_id;
                    } else {

                        if ($tarimaBuscada->banderasensor == false) {
                            $tarimaBuscada->banderasensor = true;
                            $tarimaBuscada->save();

                            // Validamos que esnecesario cambiar el estatus del cv
                            $tarimasPendientes = $tarimasModel->selectRaw('count(tarimas.id) as tota')
                                ->where('tarimas.cv_id', '=', $cvBuscado->id)
                                ->where('tarimas.banderasensor', '=', 0)
                                ->first();
                            if ($tarimasPendientes->tota == 0) {
                                $cvBuscado->catalogoestadoscv_id = 6; // Finalizado
                                $cvBuscado->save();
                                $luz = 'azul';
                                $message = 'Ultima tarima';
                            } else {
                                $luz = 'verde';
                                $message = 'Envio de la tarima';
                            }
                        } else {
                            $message = "TARIMA REPETIDA";
                        }
                        // Guardamos la imagen
                        $file = $request->file('imageFile');
                        if ($plataforma === 'ai') {
                            $rutaImage = $file->store('arduino', 'public_path_ai');
                        } else {
                            $rutaImage = $file->store('arduino', 'public_path_wella');
                        }
                        // Log::info("Ruta Image: ".$rutaImage);
                        // $rutaFile = $plataforma === 'ai'? 'ai.coorsamexico.com': 'ai.wella.coorsamexico.com';
                        $rutaFile = $plataforma === 'ai' ? 'http://192.168.1.124:8001' : 'http://192.168.1.124:8002';
                        $tarimaBuscada->imagenevidencia = 'https://' . $rutaFile . '/' . $rutaImage;
                        $tarimaBuscada->save();
                    }

                    DB::commit();
                    $arrayResponse[] = [
                        'success' => true,
                        'luz' => $luz,
                        'message' => $message,
                    ];
                } catch (Exception $e) {
                    DB::rollBack();
                    $arrayResponse[] = [
                        "succces" => false,
                        "message" => $e->getMessage(),
                        "luz" => 'roja'
                    ];
                }
            }

            return response()->json(["data" => $arrayResponse]);
        } catch (Exception $e) {
            return response()->json([
                'data' => [
                    'success' => false,
                    'message' => $e->getMessage(),
                ]
            ]);
        }
    }

    function hola()
    {
        return response()->json([
            'datap'
        ]);
    }
    /**
     * update tarimas
     */
    function tarimasUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'tarima_id_pk' => ['required', 'numeric'],
            'tarima_id' => ['required', 'numeric'],
            'cv_id' => ['required', 'numeric'],
            'plataforma' => ['required', 'in:ai,wella'],
            'imageFile' => ['required', 'mimes:png,jpg']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" =>  "The given data was invalid.",
                "errors" => $validator->errors()
            ]);
        }
        try {

            $tarimasModel  = new tarimas();


            switch ($request->plataforma) {
                case 'ai':
                    $conn = 'mysql-ai';
                    break;
                case 'wella':
                    $conn = 'mysql-we';
                    break;
            }

            $tarimasModel->changeConnection($conn);

            $tarimaBuscada = $tarimasModel->firstWhere('id', $request->tarima_id);
            if ($tarimaBuscada == null) {
                return response()->json([
                    'errors' => "Tarima no encontrada",
                    'message' => "Tarima no encontrada"
                ], 422);
            }
            $file = $request->file('imageFile');
            if ($request->plataforma === 'ai') {
                $rutaImage = $file->store('arduino', 'public_path_ai');
            } else {
                $rutaImage = $file->store('arduino', 'public_path_wella');
            }
            // Log::info("Ruta Image: ".$rutaImage);
            $rutaFile = $request->plataforma === 'ai'? 'http://ai.coorsamexico.com/': 'http://ai.wella.coorsamexico.com';
            //$rutaFile = $request->plataforma === 'ai' ? 'http://192.168.1.124:8001' : 'http://192.168.1.124:8002';
            $tarimaBuscada->imagenevidencia = $rutaFile . '/' . $rutaImage;
            $tarimaBuscada->banderasensor = 1;
            $tarimaBuscada->save();

            // Validamos que esnecesario cambiar el estatus del cv
            $tarimasPendientes = $tarimasModel->selectRaw('count(tarimas.id) as total')
                ->where('tarimas.cv_id', '=', $request->cv_id)
                ->where('tarimas.banderasensor', '=', 0)
                ->first();
            if ($tarimasPendientes->total == 0) {
                $cvsModel  = new cvs();
                $cvsModel->changeConnection($conn);
                $cvBuscado = $cvsModel->find($request->cv_id);
                $cvBuscado->catalogoestadoscv_id = 6; // Finalizado
                $cvBuscado->save();
                return response()->json([
                    'data' => [
                        'tarima_pk_local' => $request->tarima_id_pk, #llave primry de la local
                        'tarimaId' => $tarimaBuscada->id,
                        'ultima' => true
                    ]
                ]);
            }

            return response()->json([
                'data' => [
                    'tarima_pk_local' => $request->tarima_id_pk, #llave primry de la base de datos local
                    'tarimaId' => $tarimaBuscada->id,
                    'ultima' => false
                ],
            ]);
        } catch (Exception $e) {
            return response()->json([
                'errors' => [$e->getMessage()]
            ]);
        }
    }

    /**
     * Get cvs with tarimas pendientes
     */

    public function getCvs(Request $request)
    {
        
        $request->validate([
            'rampa_id' => 'required|numeric'
        ]);
        // Creamos el Modelo cvs pra cambiar de base de datos
        $cvsModel  = new cvs();
        // obtenemos los resitros de ai
        $cvsModel->changeConnection('mysql-ai');
        $cvsAI  = $cvsModel->select('cvs.id', 'cvs.nombrecv', 'cvs.catalogorampa_id')
            ->with(['tarimas' => function ($query) {
                $query->select('id', 'nombretarima', 'cv_id', 'catalogoestadostarima_id', 'banderasensor')
                    ->where('banderasensor', '=', 0)
                    ->where('cantidadcajastarimas', '>=', 1);
            }])->where('cvs.catalogoestadoscv_id', '!=', 6)
            ->where('cvs.catalogorampa_id', '=', $request->rampa_id)
            ->get();
        //obtenemos los registros de wella
        $cvsModel->changeConnection('mysql-we');
        $cvsWE  = $cvsModel->select('cvs.id', 'cvs.nombrecv', 'cvs.catalogorampa_id')
            ->with(['tarimas' => function ($query) {
                $query->select('id', 'nombretarima', 'cv_id', 'catalogoestadostarima_id', 'banderasensor')
                    ->where('banderasensor', '=', 0)
                    ->where('cantidadcajastarimas', '>=', 1);
            }])->where('cvs.catalogoestadoscv_id', '!=', 6)
            ->where('cvs.catalogorampa_id', '=', $request->rampa_id)
            ->get();

        return response()->json([
            'cvsAI' => $cvsAI,
            'cvsWE' => $cvsWE
        ]);
    }
}
