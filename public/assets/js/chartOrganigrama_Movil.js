
/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

/* Enable theme(s) */
am4core.useTheme(am4themes_animated);

 var chart = am4core.create("chartOrganigrama_Movil", am4plugins_forceDirected.ForceDirectedTree);
 var organigramaSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())
 
 let data = [
  {
    name: "Renato",
    value:6,
    collapsed:true,
    image: " ./assets/img/PNG/organigrama/Renato_Ortiz.png",
    children: [
      {
        name: "Patricia",
        value:4,
        collapsed:true,
        image: "./assets/img/PNG/organigrama/Patricia_Palma.png"
      },
      {
        name: "Zamira Morales",
        value:4,
        collapsed:true,
        image: "./assets/img/PNG/organigrama/Zamira_Morales.png",
        children: [
          { 
            name: "Carolina Gaona",
            "image": "./assets/img/PNG/organigrama/Carolina_Gaona.png",
            value: 3
          }
        ]
      },
      {
        name: "Vania Jimenez",
        value: 4,
        image: "./assets/img/PNG/organigrama/Vania_Jimenez.png"
      },
      {
        name: "Guadalupe Escamilla",
        value:4,
        image: "./assets/img/PNG/organigrama/Guadalupe_Escamilla.png",
        collapsed:true,
        children: [
          { 
            name: "Eduardo Rendon",
            "image": "./assets/img/PNG/organigrama/Eduardo_Rendon.png", 
            value: 3
          },
          { 
            name: "Roberto Rivera",
            "image": "./assets/img/PNG/organigrama/Roberto_Rivera.png", 
            value: 3
          },
          { 
            name: "Roberto Rios",
            value: 3,
            "image": "./assets/img/PNG/organigrama/Roberto_Rios.png",
            collapsed:true,
            children: [
              { 
                name: "Vanessa Flores",
                "image": "./assets/img/PNG/organigrama/Vanessa_Flores.png", 
                value: 3
              },
              { 
                name: "Martin Vazquez",
                "image": "./assets/img/PNG/organigrama/Martin_Vazquez.png", 
                value: 3
              },
              { 
                name: "Fernanda Cardenas",
                "image": "./assets/img/PNG/organigrama/Fernanda_Cardenas.png", 
                value: 3
              },
              { 
                name: "Edith Gonzalez",
                "image": "./assets/img/PNG/organigrama/Edith_Gonzalez.png", 
                value: 3
              },
            ],
          }
        ]
      }

    ]
  }
];


chart.data = data;
 
organigramaSeries.dataFields.value = "value";
organigramaSeries.dataFields.name = "name";
organigramaSeries.dataFields.id = "name";
organigramaSeries.dataFields.children = "children";
organigramaSeries.dataFields.linkWith = "link";
organigramaSeries.dataFields.collapsed="collapsed"
organigramaSeries.minRadius = 20;
// Configure circles
organigramaSeries.nodes.template.circle.disabled = true;
organigramaSeries.nodes.template.outerCircle.disabled = true;


// organigramaSeries.events.on("inited", function() {
//   organigramaSeries.animate({
//     "from": 0,
//     "to": 3,
//     "property": "velocityDecay"
//   }, 20000);
// });

//show childs Renato ortiz
setTimeout(()=> {
  data[0].collapsed = false; 
  chart.data= data;
  //show childs Zamira
  setTimeout(()=> {
    data[0].children[1].collapsed = false; 
    chart.data= data;
    //show childs Zamira
    setTimeout(()=> {
      data[0].children[3].collapsed = false; 
      chart.data= data;
      setTimeout(()=> {
        data[0].children[3].children[2].collapsed = false; 
        chart.data= data;
      },2000);
    },2000);

  },2000);

},4000)
//Hidden child
// organigramaSeries.maxLevels = 1;
// // Expand single level only
organigramaSeries.nodes.template.expandAll = false;
// Configure icons
var icon = organigramaSeries.nodes.template.createChild(am4core.Image);
icon.propertyFields.href = "image";
icon.horizontalCenter = "middle";
icon.verticalCenter = "middle";
icon.width = 250;
icon.height =  250;
// icon.widthRatio = 0.9;




organigramaSeries.centerStrength = 0.4;


organigramaSeries.links.template.strokeWidth = 2;
organigramaSeries.dataFields.fixed = "fixed";

chart.responsive.enabled = true;

chart.responsive.rules.push({
  relevant: function(target) {
    if (target.pixelWidth <= 500) {
      icon.width = 150;
      icon.height =  150;
    }
    return false;
  },
  state: function(target, stateId) {
    return;
  }
});


