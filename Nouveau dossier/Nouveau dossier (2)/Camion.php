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
  <link rel="stylesheet" type="text/css" href="flaticon/flaticon.css">
<title>kemoko</title>

  <script type="text/javascript">

     $(document).ready(function () {
        $(".ttt").click(function(event){
                
                $(".sidebarp").toggleClass('affiche1');
                $(".ttt").toggleClass('affiche2');
                $(".titrebien").toggleClass('titrebien1');
            });

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
  <body style="background-color: rgb(27,33,54);min-width: 320px; ">
  
    <!--entete -->
      <header >
      <?php include('menu1.php'); ?>
   <?php
$nbcamion= 20; ?>
    </header>










    <div class="custom-template ttt">       
            <div class="custom-toggle">
                <i class="glyphicon  glyphicon-cog"></i>
            </div>
        </div>


  <nav class="sidebarp menugauche1" style="position: fixed; background-color: rgb(32,41,64); color: white;">
    <div class="titrebien">
           <div >Bien <span class=" badge" style="">3</span></div>
           
       </div>
    <div class="container-fluid" style="position: relative;top: 30px; height: 83%; overflow-y: scroll;   "> 
        
      <ul class="nav navbar-nav menugauche2" style="  " >
        <?php for ($i=1; $i <=3 ; $i++) { ?>
        <li class="dropdown" >
            <div class="navbar-header">
            <a data-toggle<?php echo $i; ?>="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn pull-left" style="margin: 0; padding: 0;"><span style="" class="depli<?php echo $i; ?> glyph glyphicon glyphicon-minus"></span><span style="" class="pli<?php echo $i; ?> glyphicon glyphicon-plus"></span>Groupe Flotte<?php echo $i; ?></a>
         </div>
         <div class=" ppp<?php echo $i; ?>  side-collapse in" >
                    <ul class=" navbar-nav menugauche3" style=" " >
                <li class="" >
                    <div class="">
                    <a data-toggle="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn " style="margin: 0; padding: 0;"><span style="" class="depli glyph glyphicon glyphicon-minus"></span><span style="" class="pli   glyphicon glyphicon-plus"></span>Flotte </a>
                    </div>
                <div class=" ppp  side-collapse in" >
        
             <ul class=" navbar-nav menugauche4" style="font-size: 15px; ">
               <?php for ($j=1; $j < $nbcamion ; $j++) { ?>
                <li ><span style="color: green;" class="glyphicon glyphicon-record"></span><a href="#" style="margin: 0; padding: 0;">SEB 789<?php echo $i; ?></a></li>
               <?php }?>
                </ul>
                </div>
            </li>
            </ul>
            </div>
     </li> <?php } ?>
    </ul>
   </div>





<div class="container" style="position: absolute;bottom:   50;width: 200px; color: white; border-top: solid 2px white; background-color: rgb(27,33,54);">
  <a href=""><span style="font-size:16px; margin: 2px;" class=" glyphicon glyphicon-import"></span></a>
  <span style="font-size:16px; margin: 2px;" class="glyphicon glyphicon-pencil"></span>
  <span style="font-size:16px; margin: 2px;" class="showopacity glyphicon glyphicon-trash"></span>
               </div>
</nav>

<div class="container-fluid corp pull-right principale" style="position: absolute;  top: 55px; height: 100%;background-color: white;  padding: 0;">
    <div class="row" style="width: 100%; height: 100%; margin: 0;padding: 0; background-color: rgb(27,33,54);">
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
  </div><div class="custom-toggle">
        <i class="flaticon-settings"></i>
      </div> -->





<div class="col-lg-12 rpgraphique" style="">
      <div class="col-xs-6 col-md-7 col-lg-6 disponibilite" style="color: white; background-color:rgb(32,41,64); min-height: 300px;overflow-x: scroll; border: ridge 2px;">
          <div class="row" style="min-width:  520px; max-height: 320px;  ">
            <!--CUSTOM CHART START -->
            <div class="border-head" style="">
              <h3>DISPONIBILITE</h3>
            </div>
            <div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 Disponibiliteinfo" style=" " >
          <div class="" style="padding: 2px; height:100px; width: 100px;text-align: center; border: solid 1px white;margin: 5px; background-color: rgb(32,41,64);" >
            <div class="container-fluid" style="border: solid 2px white; margin: auto;height: 100%;">
         <h4>Total Unité</h4>
         <div style="font-size: 20px;">150</div>
         </div>
          </div>
           <div class="" style="padding: 2px; height:100px; width: 100px;text-align: center; border: solid 1px white;margin: 5px; background-color: rgb(32,41,64);" >
            <div class="container-fluid" style="border: solid 2px white; padding: 3px;height: 100%;">
         <h4>Inactif</h4>
         <div style="font-size: 20px;">42</div>
         </div>
          </div>
        </div>
            <div class="custom-bar-chart col-xs-8 col-sm-8 col-md-8 col-lg-8 graph" style="">
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









      <div class="container col-xs-6 col-sm-5 col-md-5 col-lg-5 infodonut " style="background-color: rgb(32,41,64); color: white;height: 300px; border: outset   2px white;    ">
         
    
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








      <div class="container col-xs-12 col-sm-12 col-md-11 col-lg-12 tableau" style="top: 10px; bottom: 50px;background-color:rgb(32,41,64);border-radius: 15px 15px 0px 0px;">
        <div class="titreinfopch" style="  padding: 0; margin-bottom: 5px; margin-left: 30px;">
          <p class="titre" style=" color: white; font-size: 20px;font-style: Arial Black;">FLOTTE DETAILLE</p>
        </div>
        <div style="overflow-x: scroll; border: inset  1px; background-color:rgb(32,41,64); color:rgb(6,6,6);">
         <table class="table table-striped   custab" style="min-width: 900px;background-color:transparent; color: rgb(143,149,163);">
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
</div>

<div  class=" navbar-fixed-bottom navbar-inverse pied" style="height: 25px; background-color: rgb(32,41,64);">
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