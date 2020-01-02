<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

<head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jav.js"></script>
<link  href="css/style.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<title>kemoko</title>
<?php 
$o=102; 
$der=80; 
$type = 81; 
?>
<script type="text/javascript">
  var type1 =parseInt(<?php echo $type; ?>);
  $(document).ready(function () {
    $('#port1').click(function (event) {
    $("#port1").removeClass("btn-success");
    $("#port2").removeClass("btn-success");
    $("#port1").toggleClass("btn-success");
    });
    $('#port2').click(function (event) {
     $("#port2").removeClass("btn-success");
     $("#port1").removeClass("btn-success");
     $("#port2").toggleClass("btn-success");
    });

    function setCalculatorValuecoin_calc(){

    var currencyvalue1old = jQuery(".coin_calc .currencyvalue1").val();

    var currencyvalue2unit = jQuery(".coin_calc .currency-switcher").val();

    jQuery(".coin_calc .currencyvalue2").val(currencyvalue1old*currencyvalue2unit);

    }
    function setCalculatorValue2coin_calc(){

    var currencyvalue2old = jQuery(".coin_calc .currencyvalue2").val();

    var currencyvalue2unit = jQuery(".coin_calc .currency-switcher").val();

    jQuery(".coin_calc .currencyvalue1").val(currencyvalue2old/currencyvalue2unit);

    }
    setCalculatorValuecoin_calc(); //call at start
    jQuery(".coin_calc .currencyvalue1").keyup(setCalculatorValuecoin_calc);
    jQuery(".coin_calc .currency-switcher").change(setCalculatorValuecoin_calc);
    jQuery(".coin_calc .currencyvalue2").keyup(setCalculatorValue2coin_calc);

    setInterval(function not() {$('.derniernot').after('<div class="activity-item"> <div class="bar bg-primary"> <div class="dot bg-primary"></div>  </div><div class="content"> <div class="date">01 min</div><div class="text"> point de chargement xx chargeuse 2 en panne </div></div></div>')}, 60000);
    
    setInterval(function piet() {
      type1 = type1 + 1;
      $('#type1h3').replaceWith('<h3 class="text-info percent textprogress" id="type1h3" >'+type1+'%</h3>');
      $('#type1').css('width',type1+"%");}, 60000);

              
  });

  var der = 80;


  // chart js - start
  // --------------------------------------------------
  var chartData = [ {
    "date": "03",
    "distance": 100,
    "townSize": 25,
    "latitude": 40.71,
    "duration": 408
  }, {
    "date": "04",
    "distance": 94,
    "townSize": 14,
    "latitude": 38.89,
    "duration": 482
  }, {
    "date": "05",
    "distance": 115,
    "townSize": 6,
    "latitude": 34.22,
    "duration": 562
  }, {
    "date": "06",
    "distance": 96,
    "townSize": 7,
    "latitude": 30.35,
    "duration": 379
  }, {
    "date": "07",
    "distance": <?php echo $o; ?>,
    "townSize": 10,
    "latitude": 25.83,
    "duration": 501
  }, {
    "date": "08",
    "distance": 75,
    "townSize": 7,
    "latitude": 30.46,
    "duration": 443
  }, {
    "date": "09",
    "distance": 80,
    "townSize": 10,
    "latitude": 29.94,
    "duration": 405
  }, {
    "date": "10",
    "distance": 99,
    "townSize": 16,
    "latitude": 29.76,
    "duration": 309
  }, {
    "date": "11",
    "distance": 78,
    "townSize": 17,
    "latitude": 32.8,
    "duration": 287
  }, {
    "date": "12",
    "distance": 81,
    "townSize": 11,
    "latitude": 35.49,
    "duration": 485
  }, {
    "date": "13",
    "distance": 103,
    "townSize": 10,
    "latitude": 39.1,
    "duration": 890
  }, {
    "date": "14",
    "distance": 74,
    "townSize": 18,
    "latitude": 39.74,
    "duration": 810
  }, {
    "date": "15",
    "townSize": 12,
    "distance": der,
    "duration": 670,
    "latitude": 40.75,
    "alpha": 0.4
  }, {
    "date": "16",
    "latitude": 36.1,
    "duration": 470,
    "bulletClass": "lastBullet"
  }, {
    "date": "17"
  }, {
    "date": "18"
  }, {
    "date": "19"
  }, {
    "date": "20"
  }, {
    "date": "21"
  }, {
    "date": "22"
  }, {
    "date": "23"
  }, {
    "date": "00"
  }, {
    "date": "01"
  }, {
    "date": "02"
  } ];
  var chart = AmCharts.makeChart( "chartdiv", {
    "type": "serial",
    "theme": "light",

    "dataDateFormat": "hh",
    "dataProvider": chartData,

    "addClassNames": true,
    "startDuration": 1,
    "color": "#ffffff",
    "marginLeft": 0,

  "categoryField": "date",
  "categoryAxis": {
    "parseDates": false,
    "minPeriod": "hh",
    "autoGridCount": false,
    "gridCount": 50,
    "gridAlpha": 0.1,
    "axisAlpha": 1,
    "gridColor": "#ffffff",
    "axisColor": "#ffffff",
    "dateFormats": [ {
      "period": 'hh',
      "format": 'hh'
    }, {
      "period": 'hh',
      "format": 'JJ:NN'
    } ]
  },

  "valueAxes": [ {
    "id": "a1",
    // "title": "distance",
    "autoGridCount": true,
    "gridCount": 50,
    "gridAlpha": 0.1,
    "axisAlpha": 1,
    "gridColor": "#ffffff",
    "axisColor": "#ffffff",
  }/*, {
    "id": "a2",
    "position": "right",
    "gridAlpha": 20,
    "axisColor": "#ffffff",
    "axisAlpha": 20,
    "labelsEnabled": true
  }, {
    "id": "a3",
    // "title": "duration",
    "position": "right",
    "gridAlpha": 0,
    "axisAlpha": 0,
    "inside": false,
    "duration": "mm",
    "durationUnits": {
      "DD": "",
      "hh": "",
      "mm": "",
      "ss": ""
    }
  }*/ ],
  "graphs": [ {
    "id": "g1",
    "valueField": "distance",
    "title": "Nombre de Rotation",
    "type": "column",
    "fillAlphas": 0.9,
    "valueAxis": "a1",
    "balloonText": "[[value]] CH",
    "legendValueText": "[[value]] Rotation",
    "legendPeriodValueText": "total: [[value.sum]] Rotation",
    "lineColor": "#ffffff",
    "alphaField": "alpha"
  }/*, {
    "id": "g2",
    "valueField": "latitude",
    "classNameField": "bulletClass",
    "title": "Total Balance",
    "type": "line",
    "valueAxis": "a2",
    "lineColor": "#ffffff",
    "lineThickness": 1,
    "legendValueText": "[[value]]/[[description]]",
    "bullet": "round",
    "bulletSizeField": "townSize",
    "bulletBorderColor": "#ffffff",
    "bulletBorderAlpha": 1,
    "bulletBorderThickness": 2,
    "bulletColor": "#ffc107",
    "labelPosition": "right",
    "balloonText": "latitude:[[value]]",
    "showBalloon": true,
    "animationPlayed": true
  }, {
    "id": "g3",
    "title": "This Month",
    "valueField": "duration",
    "type": "line",
    "valueAxis": "a3",
    "lineColor": "#ff5755",
    "balloonText": "[[value]]",
    "lineThickness": 1,
    "legendValueText": "[[value]]",
    "bullet": "square",
    "bulletBorderColor": "#ff5755",
    "bulletBorderThickness": 1,
    "bulletBorderAlpha": 1,
    "dashLengthField": "dashLength",
    "animationPlayed": true
  }*/ ],

  "chartCursor": {
    "zoomable": false,
    "categoryBalloonDateFormat": "hh",
    "cursorAlpha": 0,
    "valueBalloonsEnabled": false
  },
  "legend": {
    "bulletType": "round",
    "equalWidths": false,
    "valueWidth": 120,
    "useGraphSettings": true,
    "color": "#ffffff"
  }
  });







  setInterval(function grap() {
    <?php $der = $der+5; ?>
  var chartData = [ {
    "date": "03",
    "distance": 100,
    "townSize": 25,
    "latitude": 40.71,
    "duration": 408
  }, {
    "date": "04",
    "distance": 94,
    "townSize": 14,
    "latitude": 38.89,
    "duration": 482
  }, {
    "date": "05",
    "distance": 115,
    "townSize": 6,
    "latitude": 34.22,
    "duration": 562
  }, {
    "date": "06",
    "distance": 96,
    "townSize": 7,
    "latitude": 30.35,
    "duration": 379
  }, {
    "date": "07",
    "distance": <?php echo $o; ?>,
    "townSize": 10,
    "latitude": 25.83,
    "duration": 501
  }, {
    "date": "08",
    "distance": 75,
    "townSize": 7,
    "latitude": 30.46,
    "duration": 443
  }, {
    "date": "09",
    "distance": 80,
    "townSize": 10,
    "latitude": 29.94,
    "duration": 405
  }, {
    "date": "10",
    "distance": 99,
    "townSize": 16,
    "latitude": 29.76,
    "duration": 309
  }, {
    "date": "11",
    "distance": 78,
    "townSize": 17,
    "latitude": 32.8,
    "duration": 287
  }, {
    "date": "12",
    "distance": 81,
    "townSize": 11,
    "latitude": 35.49,
    "duration": 485
  }, {
    "date": "13",
    "distance": 103,
    "townSize": 10,
    "latitude": 39.1,
    "duration": 890
  }, {
    "date": "14",
    "distance": 74,
    "townSize": 18,
    "latitude": 39.74,
    "duration": 810
  }, {
    "date": "15",
    "townSize": 12,
    "distance": der = der +2 ,
    "duration": 670,
    "latitude": 40.75,
    "alpha": 0.4
  }, {
    "date": "16",
    "latitude": 36.1,
    "duration": 470,
    "bulletClass": "lastBullet"
  }, {
    "date": "17"
  }, {
    "date": "18"
  }, {
    "date": "19"
  }, {
    "date": "20"
  }, {
    "date": "21"
  }, {
    "date": "22"
  }, {
    "date": "23"
  }, {
    "date": "00"
  }, {
    "date": "01"
  }, {
    "date": "02"
  } ];
  var chart = AmCharts.makeChart( "chartdiv", {
    "type": "serial",
    "theme": "light",

    "dataDateFormat": "hh",
    "dataProvider": chartData,

    "addClassNames": true,
    "startDuration": 0,
    "color": "#ffffff",
    "marginLeft": 0,

  "categoryField": "date",
  "categoryAxis": {
    "parseDates": false,
    "minPeriod": "hh",
    "autoGridCount": false,
    "gridCount": 50,
    "gridAlpha": 0.1,
    "axisAlpha": 1,
    "gridColor": "#ffffff",
    "axisColor": "#ffffff",
    "dateFormats": [ {
      "period": 'hh',
      "format": 'hh'
    }, {
      "period": 'hh',
      "format": 'JJ:NN'
    } ]
  },

  "valueAxes": [ {
    "id": "a1",
    // "title": "distance",
    "autoGridCount": true,
    "gridCount": 50,
    "gridAlpha": 0.1,
    "axisAlpha": 1,
    "gridColor": "#ffffff",
    "axisColor": "#ffffff",
  }/*, {
    "id": "a2",
    "position": "right",
    "gridAlpha": 20,
    "axisColor": "#ffffff",
    "axisAlpha": 20,
    "labelsEnabled": true
  }, {
    "id": "a3",
    // "title": "duration",
    "position": "right",
    "gridAlpha": 0,
    "axisAlpha": 0,
    "inside": false,
    "duration": "mm",
    "durationUnits": {
      "DD": "",
      "hh": "",
      "mm": "",
      "ss": ""
    }
  }*/ ],
  "graphs": [ {
    "id": "g1",
    "valueField": "distance",
    "title": "Nombre de Rotation",
    "type": "column",
    "fillAlphas": 0.9,
    "valueAxis": "a1",
    "balloonText": "[[value]] CH",
    "legendValueText": "[[value]] Rotation",
    "legendPeriodValueText": "total: [[value.sum]] Rotation",
    "lineColor": "#ffffff",
    "alphaField": "alpha"
  }/*, {
    "id": "g2",
    "valueField": "latitude",
    "classNameField": "bulletClass",
    "title": "Total Balance",
    "type": "line",
    "valueAxis": "a2",
    "lineColor": "#ffffff",
    "lineThickness": 1,
    "legendValueText": "[[value]]/[[description]]",
    "bullet": "round",
    "bulletSizeField": "townSize",
    "bulletBorderColor": "#ffffff",
    "bulletBorderAlpha": 1,
    "bulletBorderThickness": 2,
    "bulletColor": "#ffc107",
    "labelPosition": "right",
    "balloonText": "latitude:[[value]]",
    "showBalloon": true,
    "animationPlayed": true
  }, {
    "id": "g3",
    "title": "This Month",
    "valueField": "duration",
    "type": "line",
    "valueAxis": "a3",
    "lineColor": "#ff5755",
    "balloonText": "[[value]]",
    "lineThickness": 1,
    "legendValueText": "[[value]]",
    "bullet": "square",
    "bulletBorderColor": "#ff5755",
    "bulletBorderThickness": 1,
    "bulletBorderAlpha": 1,
    "dashLengthField": "dashLength",
    "animationPlayed": true
  }*/ ],

  "chartCursor": {
    "zoomable": false,
    "categoryBalloonDateFormat": "hh",
    "cursorAlpha": 0,
    "valueBalloonsEnabled": false
  },
  "legend": {
    "bulletType": "round",
    "equalWidths": false,
    "valueWidth": 120,
    "useGraphSettings": true,
    "color": "#ffffff"
  }
  });
    }, 60000);
</script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;

      }

    </style>
  </head>
<body style="background-color: rgb(27,33,54); min-width: 360px;">
    <!--entete -->
  <header >
      <?php include('menu1.php'); ?>
    <div class="container" style=" ">
      <div class="row" style=" ">
        <div class="col-md-12">     
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row">
      <div class="container-fluid col-xs-12 col-sm-8 col-md-8 col-lg-9"style="margin: 0;padding: 0;">
 
          <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin: 0;padding: 0;">
            <div class="section-title">
                <h3 align="center"></h3>
            </div>                
            <div class=""  id="chartdiv" style="margin: 0;padding: 0;"></div>
          </div>
        
  

  
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0;margin: 0;">
          <div class="container-fluid col-xs-6 col-md-4 type1" >
            <div class="panel panel-default">
              <div class="panel-body easypiechart-panel">
                <div class="d-flex justify-content-between">
                  <div>
                    <h4 class="titreinfoc" style="">Camion Type 1</h4>
                  </div>
                    <h3 class="text-info percent textprogress" id="type1h3" ><?php echo $type; ?>%</h3>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-info w-25" id="type1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $type; ?>%; max-width: 100%;">
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-2 col-xs-12" >
                  <div class="text-muted  col-sm-6 col-md-6 col-lg-6 infogauchep ">Total R:</div>
                  <div class="text-muted  col-sm-6 col-md-6 col-lg-6 infodroitp" > 320/412</div>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid col-xs-6 col-md-4">
            <div class="panel panel-default">
              <div class="panel-body easypiechart-panel">
                <div class="d-flex justify-content-between">
                  <div>
                    <h4 class="titreinfoc" style="">Camion Type 2</h4>
                  </div>
                    <h3 class="text-orange percent textprogress" id="type1h3" >28%</h3>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-orange w-25" id="type2" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 28%; max-width: 100%;">
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-2" >
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infogauchep ">Total R:</div>
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infodroitp" > 320/412</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
               <div class="panel-body easypiechart-panel">
                <div class="d-flex justify-content-between">
                  <div>
                    <h4 class="titreinfoc" style="">camion Type 3</h4>
                  </div>
                    <h3 class="text-warning percent textprogress" id="type1h3" >72%</h3>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-warning w-25" id="type3" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%; max-width: 100%;">
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-2" >
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infogauchep ">Total R:</div>
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infodroitp" > 320/412</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
               <div class="panel-body easypiechart-panel">
                <div class="d-flex justify-content-between">
                  <div>
                    <h4 class="titreinfoc" style="">camion Type 4</h4>
                  </div>
                    <h3 class="text-red percent textprogress" id="type1h3" >22%</h3>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-red w-25" id="type3" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%; max-width: 100%;">
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-2" >
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infogauchep ">Total R:</div>
                  <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infodroitp" > 320/412</div>
                </div>
              </div>
            </div>
          </div>

          <!--
          <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
              <div class="panel-body easypiechart-panel">
                <h4>type 2</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="65"  ><span class="percent"><?php echo $der; ?></span></div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
              <div class="panel-body easypiechart-panel">
                <h4>type 3</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="56"  ><span class="percent">56%</span></div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
              <div class="panel-body easypiechart-panel">
                <h4>type 4</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
              </div>
            </div>
          </div>!-->
        </div><!--/.row-->
      </div>






      <div class="container col-xs-12 col-sm-4 col-md-4 col-lg-3" style="position: relative;">
        <div class="box-content C_notification">
          <h4 class="box-title">Notification</h4>
          <div class="scrollbar scrollbar-primary">
          <!-- /.dropdown js__dropdown scrollbar scrollbar-primary -->
            <div class="activity-list " style="" >
              <div class="derniernot"></div>
              <div class="activity-item">
                <div class="bar bg-primary">
                  <div class="dot bg-primary"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">10 min</div>
                  <!-- /.date -->
                  <div class="text">
                    point de chargement xx chargeuse 2 en panne
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-danger">
                  <div class="dot bg-danger"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">15 min</div>
                  <!-- /.date -->
                  <div class="text">
                    Accident camion xxx
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-success">
                  <div class="dot bg-success"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">30 min</div>
                  <!-- /.date -->
                  <div class="text">
                    Point ch 2, chargeuse 4 répare 
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-violet">
                  <div class="dot bg-violet"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">1 hour ago</div>
                  <!-- /.date -->
                  <div class="text">Write some comments</div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-warning">
                  <div class="dot bg-warning"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">1 day ago</div>
                  <!-- /.date -->
                  <div class="text">4 friends request accepted</div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-orange">
                  <div class="dot bg-orange"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">6 days ago</div>
                  <!-- /.date -->
                  <div class="text">Betty has joined your team</div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
              <div class="activity-item">
                <div class="bar bg-orange">
                  <div class="dot bg-orange"></div>
                  <div class="last-dot bg-orange"></div>
                  <!-- /.dot -->
                </div>
                <!-- /.bar -->
                <div class="content">
                  <div class="date">12 days ago</div>
                  <!-- /.date -->
                  <div class="text">Daisy has joined your team</div>
                  <!-- /.text -->
                </div>
                <!-- /.content -->
              </div>
              <!-- /.activity-item -->
            </div>
          </div>
          <!-- /.activity-list -->
          <a href="#" class="activity-link">View all activity <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.box-content -->
      </div>
    </div>
  </div>
    <!-- bar de chargement ouverture -->
    <script src="plugin/nprogress.js"></script>
    <script src="js/cm.js"></script>
 <script src="plugin/easypiechart.js"></script>
</body>
</html>