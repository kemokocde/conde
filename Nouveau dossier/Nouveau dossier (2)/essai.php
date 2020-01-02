<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

  <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="camion.css">
<script src="camion.js"></script>
 <script src="lib/chart-master/Chart.js"></script>
<title>kemoko</title>

  <script type="text/javascript">

     $(document).ready(function () {
       var sideslider = $('[data-toggle=collapse-side]');           
            sideslider.click(function(event){
                $(".ppp").toggleClass('in');
                $(".ppp").toggleClass('out');
                $(".pli").toggleClass("glyph");
            $(".depli").toggleClass("glyph");
            });
         <?php  for ($i=1; $i <=3 ; $i++) {
             ?>
            var sideslider<?php echo $i; ?> = $('[data-toggle<?php echo $i; ?>=collapse-side]');           
            sideslider<?php echo $i; ?>.click(function(event){
                $(".ppp<?php echo $i; ?>").toggleClass('in');
                $(".ppp<?php echo $i; ?>").toggleClass('out');
                $(".pli<?php echo $i; ?>").toggleClass("glyph");
            $(".depli<?php echo $i; ?>").toggleClass("glyph");
            });
          <?php  } ?>
        });

</script>
  </head>
  <body style="background-color: rgb(8,8,8);">
    <!--entete -->
      <header >
      <?php include('menu1.php'); ?>
   <?php
$nbcamion= 20; ?>
    </header>


  <nav class=" navbar-inverse sidebar" style="">
    <div class="container-fluid" style="position: relative;height: 88%; overflow-y: scroll;">
       
      <ul class="nav navbar-nav" style="margin-left: 10; " >
        <?php for ($i=1; $i <=3 ; $i++) { 
         
        ?>
        <li class="dropdown" >
         <div class="navbar-header">
          <a data-toggle<?php echo $i; ?>="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn pull-left" style="margin: 0; padding: 0;"><span style="" class="depli<?php echo $i; ?> glyph  glyphicon glyphicon-menu-down"></span><span style="" class="pli<?php echo $i; ?>  glyphicon glyphicon-menu-right"></span>Settings<?php echo $i; ?> </a>
        </div>
        <div class="navbar-inverse ppp<?php echo $i; ?>  side-collapse in" >
        
            











<ul class=" navbar-nav" style="position: relative;left: -20px; " >
       
        <li class="" >
         <div class="navbar-header">
          <a data-toggle="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn " style="margin: 0; padding: 0;"><span style="" class="depli glyph  glyphicon glyphicon-menu-down"></span><span style="" class="pli  glyphicon glyphicon-menu-right"></span>Settings </a>
        </div>
        <div class="navbar-inverse ppp  side-collapse in" >
        
            <ul class="nav navbar-nav" style="margin-left: 30;font-size: 15px;">
               <?php for ($j=1; $j < $nbcamion ; $j++) { ?>
                        <li ><a href="#" style="margin: 0; padding: 0;">unite<?php echo $i; ?></a></li>
               <?php }?>
   
            </ul>
          
        </div>
      </li>
    
    </ul>












          
        </div>
      </li>
    <?php } ?>
    </ul>
  
      

    </div>
<div class="container" style="position: absolute;bottom:   50;width: 200px; color: white; border-top: solid 2px white; background-color: rgb(8,8,8);">
  <span style="font-size:16px; margin: 2px;" class=" glyphicon glyphicon-import"></span>
  <span style="font-size:16px; margin: 2px;" class="glyphicon glyphicon-pencil"></span>
  <span style="font-size:16px; margin: 2px;" class="showopacity glyphicon glyphicon-trash"></span>
               </div>
</nav>

<div class="container-fluid corp pull-right principale" style="position: absolute;  top: 55px;left: 205px; height: 100%;background-color: white;  padding: 0;">
    <div class="row" style="width: 100%; height: 100%; margin: 0;padding: 0; background-color: rgb(6,6,6);">
    <!--  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: rgb(6,6,6); height: 8%; min-height: 50px; margin: 0;padding: 0; ">
        <div  class=" navbar-top navbar-inverse " style="margin: 0;padding: 0; ">
      <div class="container">
        
        <div class="row">
          
            <ul class="nav "  style="text-align: center; margin: auto;">
              <li class="col-xs-3 col-sm-3 col-md-3 col-lg-2 "><a href="#Home">Etat</a></li>
              <li class="col-xs-3 col-sm-3 col-md-3 col-lg-2 "><a href="#users">Ajouter</a></li>
              <li class="col-xs-3 col-sm-3 col-md-3 col-lg-2 "><a href="#Home">suprimer</a></li>
              <li class="col-xs-3 col-sm-3 col-md-3 col-lg-2 "><a href="#users">Modifier</a></li>
             
            </ul>
          
        </div>
      </div>
    </div>
  </div> -->





<div class="col-lg-12 rpgraphique" style="">
      <div class="col-sm-6 col-md-6 col-lg-6 " style="color: white; background-color: rgb(46,46,46); min-width:  400px;min-height: 300px;overflow-x: scroll; border: ridge 3px;">
        
         
      
        
          <div class="row" style="min-width:  520px; max-height: 320px;  ">
            <!--CUSTOM CHART START -->
            <div class="border-head" style="">
              <h3>DISPONIBILITE</h3>
            </div>
            <div>
            <div class=" col-sm-4 col-md-4 col-lg-4" style=" height:220px;min-width: 100px; width: 15%; margin: auto;padding: 0;" >
          <div style="padding: 2px; height:100px; width: 100%;text-align: center; border: solid 1px white;margin: 5px; background-color: rgb(92,92,92);" >
            <div class="container-fluid" style="border: solid 2px white; margin: auto;height: 100%;">
         <h4>Total Unité</h4>
         <div style="font-size: 20px;">150</div>
         </div>
          </div>
           <div style="padding: 2px; height:100px; width: 100%;text-align: center; border: solid 1px white;margin: 5px; background-color: rgb(92,92,92);" >
            <div class="container-fluid" style="border: solid 2px white; padding: 3px;height: 100%;">
         <h4>Inactif</h4>
         <div style="font-size: 20px;">42</div>
         </div>
          </div>
        </div>
            <div class="custom-bar-chart col-sm-8 col-md-8 col-lg-8 graph" style="">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">1 jour</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="bottom">85%</div>
              </div>
              <div class="bar ">
                <div class="title">2 jour</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">4 jour</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">7 jour</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">2 S</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">1+ Mois</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              
            </div></div>
            
        </div>
      </div>









      <div class="container col-sm-5 col-md-5 col-lg-5 info " style="background-color: rgb(46,46,46); color: white;height: 300px; border: outset   3px white;margin: 0; margin-left: 10px;   ">
         
    
        <div class="row " style=" ">
          <div class="col-lg-12 main-chart" style=" ">

            <div class="row mt" style=" ">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-12 col-sm-12 col-lg-12 mb" style=" ">
                <div class="grey-panel pn donut-chart" style=" ">
                  <div class="grey-header">
                    <h5>Disponibilite Actuel</h5>
                  </div>
                  <canvas id="serverstatus01" height="200" width="200"  ></canvas>
                  <script >
                    var doughnutData = [{
                        value: 85,
                        color: "#FF6B6B"
                      },
                      
                      {
                        value: 15,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 goleft">
                      <p>EN<br/>ACTIVITE:</p>
                    </div>
                    <div class=" col-sm-6 col-xs-6 col-md-6 col-lg-6">
                      <h2>85%</h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              
             
            </div>
          </div>
         
      </div>

      </div>
</div>








      <div class="container col-sm-12 col-md-11 col-lg-12 tableau" style="  top: 10px; ">
        <div class="titreinfopch" style=" background-color: rgb(92,92,92); padding: 0; margin-bottom: 5px;border: inset  3px;">
          <p class="titre" style=" color: white; font-size: 20px;">FLOTTE DETAILLE</p>
        </div>
         <table class="table table-striped   custab" style="border: inset  3px;">
    <thead>
    <tr>
            <th>Nom Unité</th>
            <th>flotte</th>
            <th>Site  </th>
             <th>Etat</th>
            <th>Actif</th>
             <th>types baine</th>
            <th>imatriculation </th>
            <th >Action</th>
        </tr>
    </thead>
            <tr>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                
                <td ><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                
                <td ><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                
                <td ><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
    </table>


      </div>
      
    </div>
</div>

<div  class=" navbar-fixed-bottom navbar-inverse pied" style="height: 25px; ">
      <div class="container">
        
        <div class="">
          
            <ul class="nav ">
               <li class="col-xs-3  "><a href="#Home">Etat</a></li>
              <li class="col-xs-3  "><a href="#users">Ajouter</a></li>
              <li class="col-xs-3  "><a href="#Home">suprimer</a></li>
              <li class="col-xs-3  "><a href="#users">Modifier</a></li>
            </ul>
          
        </div>
      </div>
    </div>
 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/common-scripts.js"></script>
</body>
</html>