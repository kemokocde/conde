<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

  <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jav.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="css/index.css" rel="stylesheet">
<title>kemoko</title>
  <script type="text/javascript">
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
        });

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
<body style="background-color: rgb(27,33,54);">
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
<div class="container col-xs-12 col-sm-8 col-md-8 col-lg-9">

    <div class="" >
      <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="section-title">
            <h3 align="center"></h3>
        </div>                
        <div  id="chartdiv"></div>
      </div>
    </div>
  

  
    <div class="row" >
      <div class="col-xs-6 col-md-3" >
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>type 1</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>type 2</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>type 3</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>type 4</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>






<div class="container col-xs-12 col-sm-4 col-md-4 col-lg-3" style="position: relative;">
        <div class="box-content">
          <h4 class="box-title">Notification</h4>
        <div class="scrollbar scrollbar-primary">
          <!-- /.dropdown js__dropdown scrollbar scrollbar-primary -->
          <div class="activity-list " style="" >
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
 <script src="plugin/easypiechart.js"></script>
</body>
</html>