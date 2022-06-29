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
  name:"Renato",
  image: " ./assets/img/PNG/organigrama/Renato_Ortiz.png",
  value:6,
  collapsed:true,
  children:  [
        {
        value:4,
        collapsed:true,
        image: "./assets/img/PNG/organigrama/Patricia_Palma.png"
      }, 
      {
          collapsed:true,
          image: "./assets/img/PNG/organigrama/Zamira_Morales.png",
          children:[
              {
                  "image": "./assets/img/PNG/organigrama/Carolina_Gaona.png",
              }
          ]
      },
      {
        image: "./assets/img/PNG/organigrama/Guadalupe_Escamilla.png",
        collapsed:true,
        children:[
            { 
             "image": "./assets/img/PNG/organigrama/Roberto_Rios.png",
              collapsed:true,
              children:[
                  { 
                    collapsed:true,
                      "image": "./assets/img/PNG/organigrama/Vanessa_Flores.png", 
                    },
                    { 
                      collapsed:true,
                      "image": "./assets/img/PNG/organigrama/Martin_Vazquez.png", 
                    },
                    { 
                      collapsed:true,
                      "image": "./assets/img/PNG/organigrama/Fernanda_Cardenas.png", 
                    },
                    { 
                      collapsed:true,
                      "image": "./assets/img/PNG/organigrama/Edith_Gonzalez.png", 
                    }
              ]
            },
            { 
              collapsed:true,
              "image": "./assets/img/PNG/organigrama/Eduardo_Rendon.png", 
            },
            { 
              collapsed:true,
              "image": "./assets/img/PNG/organigrama/Roberto_Rivera.png", 
            }
        ]
      },
       {
          collapsed:true,
          image: "./assets/img/PNG/organigrama/Vania_Jimenez.png"
        }
      ]
}];


var container = root.container.children.push(
  am5.Container.new(root, {
    width: am5.percent(100),
    height: am5.percent(100),
    layout: root.verticalLayout,
    valueYField: "value", 
    valueXField: "date",
    collapsed: "collapsed",
    

  })
);

var series = container.children.push(
  am5hierarchy.Tree.new(root, {
    singleBranchOnly: false,
    downDepth: 1,
    initialDepth: 5,
    topDepth: 0,
    valueField: "value",
    categoryField: "name",
    childDataField: "children",
    paddingTop:100,
    paddingBottom:100
  })
);

// Disable circles
series.circles.template.setAll({
  radius: 40,
  forceHidden: true
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
      width: 140,
      height: 160,
      centerX: am5.percent(50),
      centerY: am5.percent(50),
      src: ev.target.dataItem.dataContext.image
    }));
  });
}

series.data.setAll(data);
series.set("selectedDataItem", series.dataItems[0]);


chart.data = data;

console.log(data[0].children[1]);

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