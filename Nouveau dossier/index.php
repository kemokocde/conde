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
  <body style="background-color: rgb(8,8,8);">
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
    <div class="graph" id="">
      <?php include('graph.php'); ?>
    </div>
    <div class="mdgraph" id="">
      <?php include('mdgraph.php'); ?>
    </div>
    <div class="smgraph" id="">
      <?php include('smgraph.php'); ?>
    </div>
    <div class="xsgraph" id="">
      <?php include('xsgraph.php'); ?>
    </div>
    <div class="phonegraph" id="">
      <?php include('phonegraph.php'); ?>
    </div>
 
</body>
</html>