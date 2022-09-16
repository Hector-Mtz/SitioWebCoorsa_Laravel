/**
 * ---------------------------------------
 * This demo was created using amCharts 5.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v5/
 * ---------------------------------------
 */

// Create root and chart
var root = am5.Root.new("chartOrganigrama");

root.setThemes([
  am5themes_Animated.new(root)
]);

var data = [{
  id:"Renato",
  image: " ./assets/img/PNG/organigrama/Renato_Ortiz.png",
  value:6,
  collapsed:true,
  active:true,
  children:  [
      {
        id:"Paty",
        active:false,
        value:4,
        image: "./assets/img/PNG/organigrama/Patricia_Palma.png"
      }, 
      {
          id:"Zamira",
          active:false,
          collapsed:true,
          image: "./assets/img/PNG/organigrama/Zamira_Morales.png",
          children:[
              {
                 active:false,
                  id:"Carolina",
                  "image": "./assets/img/PNG/organigrama/Carolina_Gaona.png",
              }
          ]
      },
      {
        id:"Guadalupe",
        image: "./assets/img/PNG/organigrama/Guadalupe_Escamilla.png",
        active:false,
        collapsed:true,
        children:[
            { 
              id:"RobertoR",
             "image": "./assets/img/PNG/organigrama/Roberto_Rios.png",
              active:false,
              collapsed:true,
              children:[
                  { 
                       id:"Vanessa",
                      "image": "./assets/img/PNG/organigrama/Vanessa_Flores.png", 
                       active:false,
                    },
                    { 
                      id:"Martin",
                      "image": "./assets/img/PNG/organigrama/Martin_Vazquez.png", 
                      active:false,
                    },
                    { 
                      id:"Fernanda",
                      "image": "./assets/img/PNG/organigrama/Fernanda_Cardenas.png", 
                      active:false,
                    },
                    { 
                      id:"Edith",
                      "image": "./assets/img/PNG/organigrama/Edith_Gonzalez.png",
                      active:false, 
                    }
              ]
            },
            { 
              id:"Eduardo",
              "image": "./assets/img/PNG/organigrama/Eduardo_Rendon.png", 
              active:false,
            },
            { 
              id:"Roberto",
              "image": "./assets/img/PNG/organigrama/Roberto_Rivera.png", 
              active:false,
            }
        ]
      },
       {

          image: "./assets/img/PNG/organigrama/Vania_Jimenez.png",
          active:false,
        }
      ]
}];

var container = root.container.children.push(
  am5.Container.new(root, {
    width: am5.percent(100),
    height: am5.percent(100),
    layout: root.verticalLayout,
  })
);



var series = container.children.push(
  am5hierarchy.Tree.new(root, {
    name:"series",
    valueField: "value",
    categoryField: "name",
    childDataField: "children",
    initialDepth: 0,
    topDepth: 0,
    paddingTop:100,
    paddingBottom:100,
    tooltip: am5.Tooltip.new(root, {
      pointerOrientation: "vertical",
      forceHidden:true
    }),
  })
);

series.appear(3000,200);

// Disable circles
series.circles.template.setAll({
  radius: 20,
  forceHidden: false
});

series.outerCircles.template.setAll({
  radius: 40,
  forceHidden: true
});

// Set up labels
series.labels.template.setAll({
  fill: am5.color(0x000000),
  y: 30,
  oversizedBehavior: "none"
});

// Use template.setup function to prep up node with an image
series.nodes.template.setup = function(target) {
  target.events.on("dataitemchanged", function(ev) {
    var icon = target.children.push(am5.Picture.new(root, {
      width: 160,
      height: 190,
      centerX: am5.percent(50),
      centerY: am5.percent(50),
      src: ev.target.dataItem.dataContext.image,
    }));
  });
}

series.data.setAll(data);
series.set("selectedDataItem", series.dataItems[0]);
 

setTimeout(()=> 
{
  //Renato's Child
  series.nodes.template._entities[1].show(); // muestra a Paty
  series.nodes.template._entities[2].show(); //muestra a Zamira
  series.nodes.template._entities[4].show(); //muestra a Lupita
  series.nodes.template._entities[12].show(); //muestra a Vania
  //Zamira's Child
  setTimeout(()=> 
  {
    series.nodes.template._entities[3].show(); //muestra a Caro
  },2000); 

   //Zamira's Child
   setTimeout(()=> 
   {
     series.nodes.template._entities[5].show(); //muestra a RobertoRios
     setTimeout(()=> 
     {
       series.nodes.template._entities[6].show(); //muestra a Vanessa
       series.nodes.template._entities[7].show(); //muestra a Fernanda
       series.nodes.template._entities[8].show(); //muestra a Martin
       series.nodes.template._entities[9].show(); //muestra a Edith
     },1000); 

     series.nodes.template._entities[10].show(); //muestra a Roberto
     series.nodes.template._entities[11].show(); //muestra a Eduardo
   },2000); 

},3000);