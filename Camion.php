<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

  <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-------------------- Css modification -------------------------------------->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/camion.css">



<!-- script representation en disk -->
<script src="lib/chart-master/Chart.js"></script>
<title>kemoko</title>
<!--execution php du demarage -->
  <?php 
    $affiche = "";
    if (isset($_GET['id']) and $_GET['id']!="") {
      $affiche = "uniter";
    }
    else{
      $affiche = "globale";
    }
  ?>
<?php $rp="vraix";  ?>
  <script type="text/javascript">
   $(document).ready(function () {
    SweetAlert2Demo.init();
     /*  $(".etat").click(function(event){
              if ($(".corp-etat").hasClass('masquer') && $(".corp-ajout").hasClass('affiche')) {
                $(".corp-ajout").removeClass('affiche');
                $(".corp-ajout").toggleClass('masquer');
                $(".corp-etat").toggleClass('affiche');
                $(".corp-etat").removeClass('masquer');
                $(".menu-bas").toggleClass('pied');
                
              }
              else if ($(".corp-etat").hasClass('masquer') && $(".corp-modifi").hasClass('affiche')) {
                $(".corp-modifi").removeClass('affiche');
                $(".corp-modifi").toggleClass('masquer');
                $(".corp-etat").toggleClass('affiche');
                $(".corp-etat").removeClass('masquer');
                $(".menu-bas").toggleClass('pied');
              }
              else if ($(".corp-etat").hasClass('masquer') && $(".corp-suprime").hasClass('affiche')) {
                $(".corp-suprime").removeClass('affiche');
                $(".corp-suprime").toggleClass('masquer');
                $(".corp-etat").toggleClass('affiche');
                $(".corp-etat").removeClass('masquer');
                $(".menu-bas").toggleClass('pied');
              }
              else if ($(".corp-etat").hasClass('masquer') && $(".corp-autre").hasClass('affiche')) {
                $(".corp-autre").removeClass('affiche');
                $(".corp-autre").toggleClass('masquer');
                $(".corp-etat").toggleClass('affiche');
                $(".corp-etat").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
            });
        $(".ajout").click(function(event){
            if ($(".corp-ajout").hasClass('masquer') && $(".corp-etat").hasClass('affiche')) {
                $(".corp-etat").removeClass('affiche');
                $(".corp-etat").toggleClass('masquer');
                $(".corp-ajout").toggleClass('affiche');
                $(".corp-ajout").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
                
              }
              else if ($(".corp-ajout").hasClass('masquer') && $(".corp-modifi").hasClass('affiche')) {
                $(".corp-modifi").removeClass('affiche');
                $(".corp-modifi").toggleClass('masquer');
                $(".corp-ajout").toggleClass('affiche');
                $(".corp-ajout").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-ajout").hasClass('masquer') && $(".corp-suprime").hasClass('affiche')) {
                $(".corp-suprime").removeClass('affiche');
                $(".corp-suprime").toggleClass('masquer');
                $(".corp-ajout").toggleClass('affiche');
                $(".corp-ajout").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-ajout").hasClass('masquer') && $(".corp-autre").hasClass('affiche')) {
                $(".corp-autre").removeClass('affiche');
                $(".corp-autre").toggleClass('masquer');
                $(".corp-ajout").toggleClass('affiche');
                $(".corp-ajout").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
        });
      $(".modifi").click(function(event){
              if ($(".corp-modifi").hasClass('masquer') && $(".corp-etat").hasClass('affiche')) {
                $(".corp-etat").removeClass('affiche');
                $(".corp-etat").toggleClass('masquer');
                $(".corp-modifi").toggleClass('affiche');
                $(".corp-modifi").removeClass('masquer');
                $(".menu-bas").removeClass('pied');

               }
              else if ($(".corp-modifi").hasClass('masquer') && $(".corp-ajout").hasClass('affiche')) {
                $(".corp-ajout").removeClass('affiche');
                $(".corp-ajout").toggleClass('masquer');
                $(".corp-modifi").toggleClass('affiche');
                $(".corp-modifi").removeClass('masquer');
                $(".menu-bas").removeClass('pied');

              }
              else if ($(".corp-modifi").hasClass('masquer') && $(".corp-suprime").hasClass('affiche')) {
                $(".corp-suprime").removeClass('affiche');
                $(".corp-suprime").toggleClass('masquer');
                $(".corp-modifi").toggleClass('affiche');
                $(".corp-modifi").removeClass('masquer');
                $(".menu-bas").removeClass('pied');

              }
              else if ($(".corp-modifi").hasClass('masquer') && $(".corp-autre").hasClass('affiche')) {
                $(".corp-autre").removeClass('affiche');
                $(".corp-autre").toggleClass('masquer');
                $(".corp-modifi").toggleClass('affiche');
                $(".corp-modifi").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
      });
      $(".suprime").click(function(event){
              if ($(".corp-suprime").hasClass('masquer') && $(".corp-etat").hasClass('affiche')) {
                $(".corp-etat").removeClass('affiche');
                $(".corp-etat").toggleClass('masquer');
                $(".corp-suprime").toggleClass('affiche');
                $(".corp-suprime").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
                
              }
              else if ($(".corp-suprime").hasClass('masquer') && $(".corp-ajout").hasClass('affiche')) {
                $(".corp-ajout").removeClass('affiche');
                $(".corp-ajout").toggleClass('masquer');
                $(".corp-suprime").toggleClass('affiche');
                $(".corp-suprime").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-suprime").hasClass('masquer') && $(".corp-modifi").hasClass('affiche')) {
                $(".corp-modifi").removeClass('affiche');
                $(".corp-modifi").toggleClass('masquer');
                $(".corp-suprime").toggleClass('affiche');
                $(".corp-suprime").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-suprime").hasClass('masquer') && $(".corp-autre").hasClass('affiche')) {
                $(".corp-autre").removeClass('affiche');
                $(".corp-autre").toggleClass('masquer');
                $(".corp-suprime").toggleClass('affiche');
                $(".corp-suprime").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
            });
            
      $(".autre").click(function(event){
              if ($(".corp-autre").hasClass('masquer') && $(".corp-etat").hasClass('affiche')) {
                $(".corp-etat").removeClass('affiche');
                $(".corp-etat").toggleClass('masquer');
                $(".corp-autre").toggleClass('affiche');
                $(".corp-autre").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
                
              }
              else if ($(".corp-autre").hasClass('masquer') && $(".corp-ajout").hasClass('affiche')) {
                $(".corp-ajout").removeClass('affiche');
                $(".corp-ajout").toggleClass('masquer');
                $(".corp-autre").toggleClass('affiche');
                $(".corp-autre").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-autre").hasClass('masquer') && $(".corp-modifi").hasClass('affiche')) {
                $(".corp-modifi").removeClass('affiche');
                $(".corp-modifi").toggleClass('masquer');
                $(".corp-autre").toggleClass('affiche');
                $(".corp-autre").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
              else if ($(".corp-autre").hasClass('masquer') && $(".corp-suprime").hasClass('affiche')) {
                $(".corp-suprime").removeClass('affiche');
                $(".corp-suprime").toggleClass('masquer');
                $(".corp-autre").toggleClass('affiche');
                $(".corp-autre").removeClass('masquer');
                $(".menu-bas").removeClass('pied');
              }
            });*/
      var affiche = "<?php echo $affiche; ?>";
            if (affiche == "globale") {
              $(".globale").removeClass('masquer');
              $(".uniter").addClass('masquer');
            }
            else if(affiche == "uniter"){
              $(".uniter").removeClass('masquer');
              $(".globale").addClass('masquer');
            }
        $(".ttt").click(function(event){
                
                $(".sidebarp").toggleClass('affiche1');
                $(".ttt").toggleClass('affiche2');
                $(".titrebien").toggleClass('titrebien1');
            });
        <?php  for ($k=1; $k <=3 ; $k++) {
             ?>
       var sideslider = $('[data-flotte<?php echo $k; ?>=collapse-side]');           
            sideslider.click(function(event){
                $(".flotte<?php echo $k; ?>").toggleClass('in');
                $(".flotte<?php echo $k; ?>").toggleClass('out');
                $(".pliflotte<?php echo $k; ?>").toggleClass("glyph");
            $(".depliflotte<?php echo $k; ?>").toggleClass("glyph");
            });
            <?php  } ?>
         <?php  for ($i=1; $i <=1 ; $i++) {
             ?>
            var sideslider<?php echo $i; ?> = $('[data-toggle<?php echo $i; ?>=collapse-side]');           
            sideslider<?php echo $i; ?>.click(function(event){
                $(".gflotte<?php echo $i; ?>").toggleClass('in');
                $(".gflotte<?php echo $i; ?>").toggleClass('out');
                $(".pli<?php echo $i; ?>").toggleClass("glyph");
            $(".depli<?php echo $i; ?>").toggleClass("glyph");
            });
          <?php  } ?>
    });
  </script>
  </head>
<body style="background-color: rgb(27,33,54);min-width: 320px; ">

  <!--Menu -->
  <header >
    <?php include('menu1.php'); ?>
    <?php
    $nbcamion= 20; ?>
  </header>
  <!-- Corps etat -->
  <div class="corp-etat  affiche" >
    <!--Icone Menu gauche-->
    <div class="custom-template ttt">       
      <div class="custom-toggle">
        <i class="glyphicon  glyphicon-cog"></i>
      </div>
    </div>

      <!-- Menu gauche-->
    <nav class="sidebarp menugauche1" style="position: fixed; background-color: rgb(32,41,64); color: white;">
      <div class="titrebien">
        <div >Bien <span class="badge" style="">3</span></div>
      </div>
      <div class="container-fluid menugauche" style="position: relative;top: 30px;    "> 
        <ul class="nav navbar-nav menugauche2" style=" margin-bottom: 15px " >
          <?php for ($i=1; $i <=1 ; $i++) { ?>
          <li class="dropdown font" >
            <div class="navbar-header">
              <a data-toggle<?php echo $i; ?>="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn pull-left" style="margin: 0; padding: 0; "><span style="" class="depli<?php echo $i; ?> glyph glyphicon glyphicon-minus"></span><span style="" class="pli<?php echo $i; ?> glyphicon glyphicon-plus"></span>Groupe Flotte<?php echo $i; ?></a>
            </div>
            <div class=" gflotte<?php echo $i; ?>  side-collapse in" >
                <ul class=" navbar-nav menugauche3" style=" " >
                  <?php for ($k=1; $k <=3 ; $k++) { ?>
                  <li class=" font" >
                    <div class="">
                      <a data-flotte<?php echo $k; ?>="collapse-side" data-target=".side-collapse"  data-target-2=".side-collapse-container" class="btn " style="margin: 0; padding: 0;"><span style="" class="depliflotte<?php echo $k; ?> glyph glyphicon glyphicon-minus"></span><span style="" class="pliflotte<?php echo $k; ?> glyphicon glyphicon-plus"></span>Flotte </a>
                    </div>
                    <div class=" flotte<?php echo $k; ?>  side-collapse in" >
                      <ul class=" navbar-nav menugauche4" style="font-size: 15px; ">
                        <?php for ($j=1; $j < $nbcamion ; $j++) { ?>
                        <li class="font"><div><span style="color: green;" class="glyphicon glyphicon-record"></span><a href="#" style="margin: 0; padding: 0;">SEB 789<?php echo $i; ?></a></div></li>
                        <?php }?>
                      </ul>
                    </div>
                </li>
                <?php }?>
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
    <!-- conteneur principale etat-->
    <div class="container-fluid corp pull-right principale globale masquer" style="position: absolute;  top: 55px; height: 100%;background-color: white;  padding: 0;">
      <div class="row" style="width: 100%; height: 100%; margin: 0;padding: 0; background-color: rgb(27,33,54);">
        <div class="container titreetat" style=" min-width: 320px; background-color: rgb(32,41,64);  border-radius: 15px 15px 0px 0px; margin-top: 10px; margin-bottom: 10px; border-bottom: double white 1px; color: white;">
          <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-6" style="padding-top: 10px; color: white;"> <h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">Détail Flotte  </h4><h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">flotte Renault port 1</h4>
          </div>
          <div class=" form-group form-group-default col-xs-12 col-sm-8 col-md-7 col-lg-6 " style="padding-top: 20px; text-align: center;">
            <label class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right" style="">Sélectionné</label>
            <button class="btn btn-success col-xs-1 col-sm-1 col-md-1 col-lg-1" style=" margin-left: 10px;width: 40px; float: right;"><span class="glyphicon glyphicon-ok"></span></button>
            <select style="background-color: rgb(27,33,54); color: white;  float: right;" class="form-control select1 col-xs-11 col-sm-5 col-md-5 col-lg-5" >
              <option>flotte Renault port 1</option>
              <option>flotte 2</option>
            </select>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
          <ul class="list-inline" >
            <li style="margin-bottom: 0;">
              <div class="radio primary" style="margin-bottom: 0;"><input type="radio" checked name="radio-2" id="radio-10"><label class="text2" for="radio-10">Par Groupe de flotte</label></div>
              <!-- /.radio -->
            </li>
            <li style="margin-bottom: 0;">
              <div class="radio primary" style="margin-bottom: 0;"><input type="radio" name="radio-2" id="radio-11"><label class="text2" for="radio-11">Par Flotte</label></div>
              <!-- /.radio -->
            </li>
            <li style="margin-bottom: 0;">
              <div class="radio primary" style="margin-bottom: 0;"><input type="radio" name="radio-2" id="radio-12"><label class="text2" for="radio-12">Par Unité</label></div>
              <!-- /.radio -->
            </li>
          </ul>
            </div>
            
          </div>
        </div>
        <!--div ensemble Graphe disponibilité et info donut disponibilité-->
        <div class="col-lg-12 rpgraphique" style="">
          <!-- Graphe disponibilité-->
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
                    <li><span>10</span></li>
                    <li><span>8</span></li>
                    <li><span>6</span></li>
                    <li><span>4</span></li>
                    <li><span>2</span></li>
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
                  
                </div>
              </div>
            </div>
          </div>
          <!-- info donut disponibilité-->
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
           <!-- tableau info -->
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
              <?php for ($i=0; $i <50 ; $i++) { 
               ?>
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
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>





    <div class="corp pull-right principale uniter masquer" style="position: absolute;  top: 55px; height: 100%;background-color: white; ">
      <div class="row" style="width: 100%; height: 100%; margin: 0;padding: 0; background-color: rgb(27,33,54);">
        <div class="container titreetat" style=" min-width: 320px; background-color: rgb(32,41,64);padding: 0;  border-radius: 15px 15px 0px 0px; margin-top: 10px; margin-bottom: 10px; border-bottom: double white 1px; color: white;">
          <div class=" col-xs-12 col-sm-5 col-md-5 col-lg-6" style="padding-top: 10px; color: white;margin: 0;padding-left: 0;"> <h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">Détail </h4><h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">flotte Renault port 1</h4>
          </div>
          <div class=" form-group form-group-default col-xs-12 col-sm-7 col-md-7 col-lg-6 " style="padding-top: 20px; text-align: center;">
            <label class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="">Sélectionné</label>
            <button class="btn btn-success col-xs-1 col-sm-1 col-md-1 col-lg-1" style=" margin-left: 10px;width: 40px; float: right;"><span class="glyphicon glyphicon-ok"></span></button>
            <select style="background-color: rgb(27,33,54); color: white;  float: right;" class="form-control select1 col-xs-11 col-sm-5 col-md-5 col-lg-5" >
              <option>flotte Renault port 1</option>
              <option>flotte 2</option>
            </select>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <ul class="list-inline" >
                <li class="pull-left" style="margin-bottom: 0;">
                  <div class="radio primary" style="margin-bottom: 0;"><input type="radio" checked name="radio-1" id="radio-1"><label class="text2" for="radio-1">Par Groupe de flotte</label></div>
                  <!-- /.radio -->
                </li>
                <li class="pull-left" style="margin-bottom: 0;">
                  <div class="radio primary" style="margin-bottom: 0;"><input type="radio" name="radio-1" id="radio-2"><label class="text2" for="radio-2">Par Flotte</label></div>
                  <!-- /.radio -->
                </li>
                <li class="pull-left" style="margin-bottom: 0;">
                  <div class="radio primary" style="margin-bottom: 0;"><input type="radio" name="radio-1" id="radio-3"><label class="text2" for="radio-3">Par Unité</label></div>
                  <!-- /.radio -->
                </li>
              </ul>
            </div>
            
          </div>
        </div>
        <!--div ensemble camion personnel-->
        <div class="col-lg-12 rpgraphique" style="min-width: 320px;">
          <div class="box-content">
            <div class="dropdown js__drop_down ">
              <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
              <ul class="sub-menu">
                <li><a href="#">Transfert</a></li>
                <li><a href="#">Modifier</a></li>
                <li><a href="#">Suprimer</a></li>
                <li class="split"></li>
                <li><a href="#">Panne</a></li>
                <li><a href="#">Accidenté</a></li>
              </ul>
              <!-- /.sub-menu -->
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 40px">
            <!-- /.image camion -->
            <img class=" col-sm-3 col-md-2 col-lg-2 imgpcamion" src="img/renault-trucks-k-2019-image.JPG">
            <!-- /.conteneur info camion par uniter -->
            <div class=" col-sm-9 col-md-10 col-lg-10 " style="color: white;margin: 0;padding: 0;position: relative;">
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Identifiant  Camion : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > Unite 9999</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Flotte : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > Boké Renault Port1</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Zone Mobile : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > port1 Kaboy</div><hr class="ligne"  /></div>
              <div class="col-sm-6 col-md-4 col-lg-4 text cinfo"><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Marque : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > Renault</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Types : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > 6x4</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Serie : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > KERAX K440KERAX K440</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Etat : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12 text-warning" > panne</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Diponibilité : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12 text-primary" > Disponible</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Types De Benne : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > Double benne</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >Identifiant benne : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > VF631E13XHD000858</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >immat : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > IT - 1999</div><hr class="ligne"  /></div>
              <div class=" col-sm-6 col-md-4 col-lg-4 text cinfo" ><div class="lindex  col-sm-12 col-md-12 col-lg-12" >N° Chassie : </div><div class="divindex  col-sm-12 col-md-12 col-lg-12" > VF631E13XHD000858</div><hr class="ligne"  /></div>
            </div>
            <div class="container-fluid" style="margin-bottom: 50px; margin: 0;padding: 0;">
              <div class="row col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
                <div class=" col-sm-6 col-md-6 infodispo" style="">
                    <div class="card-body">
                      <div class="">
                        <div>
                          <h5 class="titreinfoc" style=""><b>Disponibilité des 7 derniers jours</b></h5>
                          <div class="text-muted" style="font-size:14px;line-height:1.82;margin-bottom:1rem;">Total Heur: 120</div>
                        </div>
                        <h3 class="text-info fw-bold" style="font-size:15px">75%</h3>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-info w-75" role="progressbar" value="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        </div>
                      </div>
                      <div>
                        <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infogauchep" >22 H/Jour</div>
                        <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infodroitp" >154 H/Semaine</div>
                      </div>
                    </div>
                </div>
                <div class=" col-sm-5 col-md-6 inforota" >
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="titreinfoc" style=""><b>Performance des  7 dernier jour  </b></h5>
                          <div class="text-muted" style="font-size:14px;line-height:1.82;margin-bottom:1rem;">Total rotation: 32</div>
                        </div>
                        <h3 class="text-success fw-bold" style="font-size:15px">25%</h3>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                      </div>
                      <div class="d-flex justify-content-between mt-2">
                        <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infogauchep" >6 R/ Jour</div>
                        <div class="text-muted col-xs-6 col-sm-6 col-md-6 col-lg-6 infodroitp" >42 R/Semaine</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>

      </div>
    </div>
  </div>
  <!--Menu bas -->
  <div  class="menu-bas navbar-fixed-bottom  pied" style="min-width: 320px; border-top: ridge black 1px; height: 30px; background-color: rgb(32,41,64); margin-top: 0;padding-top: 0;">
    <div class="container menu-basa" style="margin: 0;padding: 0; text-align: center;">
      
      
        <ul class="nav  menubas" style="">
           <li class="col-xs-3 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="" class="etat">
            <samp class="menubas-text"> Etat</samp>
            <samp class="menubas-icones glyphicon glyphicon-dashboard" style="color: red; width: 30px;height: 30px; position: relative; top: -5px;"></samp></a></li>
          <li class="col-xs-2 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="camion-ajout.php" class="ajout">
            <samp class="menubas-text"> Ajouter </samp>
            <samp class="menubas-icones"><img src="img/icone/ajout.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;"> </samp> </a></li>
          <li class="col-xs-2 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="camion-modifie.php" class="modifi">
            <samp class="menubas-text"> Modifier </samp>
            <samp class="menubas-icones"><img src="img/icone/modifie.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;;"> </samp> </a></li>
          <li class="col-xs-2 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="camion-suprime.php" class="suprime">
            <samp class="menubas-text"> Suprimer </samp>
            <samp class="menubas-icones"><img src="img/icone/suprime.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;"> </samp> </a></li>
          <li class="col-xs-3 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="camion-autre.php" class="autre">
            <samp class="menubas-text"> Autre </samp>
            <samp class="menubas-icones glyphicon glyphicon-certificate" style="color: red; width: 30px;height: 30px; position: relative; top: -5px;"></samp> </a></li>
        </ul>
      
    </div>
  </div>
  <!--bar du chargement -->
  <script src="plugin/nprogress.js"></script>
  <script src="js/cm.js"></script>
  <script src="lib/common-scripts.js"></script>

  <script src="plugin/alert/sweetalert.min.js"></script>
  <!--------------------------------------debut script modification-------------------------------------------- -->
  <!--pour la date parti modification -->

  <!-- <script src="scripts/x-editable.demo.min.js"></script> -->
  <!--  <script type="text/javascript">
    (function($) {
      "use strict";
      $(document).ready(function(){
        $('#inline-username').editable({
          type: 'text',
          pk: 1,
          name: 'username',
          title: 'Enter username',
          mode: 'inline'
        });

        $('#inline-firstname').editable({
          validate: function(value) {
            if($.trim(value) === '') return 'Chapm Obligatoire';
          },
          mode: 'inline'
        });

        $('#inline-sex').editable({
          prepend: "not selected",
          mode: 'inline',
          source: [
            {value: 1, text: 'Male'},
            {value: 2, text: 'Female'}
          ],
          display: function(value, sourceData) {
            var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
              elem = $.grep(sourceData, function(o){return o.value === value;});

            if(elem.length) {
              $(this).text(elem[0].text).css("color", colors[value]);
            } else {
              $(this).empty();
            }
          }
        });

        $('#inline-status').editable({mode: 'inline'});

        $('#inline-group').editable({
          showbuttons: false,
          mode: 'inline'
        });

        $('#inline-dob').editable({mode: 'inline'});
        $('#inline-event').editable({mode: 'inline'});

        $('#inline-comments').editable({
          showbuttons: 'bottom',
          mode: 'inline'
        });

        $('#inline-fruits').editable({
          pk: 1,
          limit: 3,
          source: [
            {value: 1, text: 'banana'},
            {value: 2, text: 'peach'},
            {value: 3, text: 'apple'},
            {value: 4, text: 'watermelon'},
            {value: 5, text: 'orange'}
          ],
          mode: 'inline'
        }); 
        return false
      });

      $("#switch-inline").on("change",function(){
        if ($(this).prop("checked")){
          destroy_all();
          $('#inline-username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
          });

          $('#inline-firstname').editable({
            validate: function(value) {
              if($.trim(value) === '') return 'This field is required';
            },
            mode: 'inline'
          });

          $('#inline-sex').editable({
            prepend: "not selected",
            mode: 'inline',
            source: [
              {value: 1, text: 'Male'},
              {value: 2, text: 'Female'}
            ],
            display: function(value, sourceData) {
              var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                elem = $.grep(sourceData, function(o){return o.value === value;});

              if(elem.length) {
                $(this).text(elem[0].text).css("color", colors[value]);
              } else {
                $(this).empty();
              }
            }
          });

          $('#inline-status').editable({mode: 'inline'});

          $('#inline-group').editable({
            showbuttons: false,
            mode: 'inline'
          });

          $('#inline-dob').editable({mode: 'inline'});
          $('#inline-event').editable({mode: 'inline'});

          $('#inline-comments').editable({
            showbuttons: 'bottom',
            mode: 'inline'
          });

          $('#inline-fruits').editable({
            pk: 1,
            limit: 3,
            source: [
              {value: 1, text: 'banana'},
              {value: 2, text: 'peach'},
              {value: 3, text: 'apple'},
              {value: 4, text: 'watermelon'},
              {value: 5, text: 'orange'}
            ],
            mode: 'inline'
          }); 
        }else{
          destroy_all();
          $('#inline-username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username'
          });

          $('#inline-firstname').editable({
            validate: function(value) {
              if($.trim(value) === '') return 'This field is required';
            }
          });

          $('#inline-sex').editable({
            prepend: "not selected",
            source: [
              {value: 1, text: 'Male'},
              {value: 2, text: 'Female'}
            ],
            display: function(value, sourceData) {
              var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                elem = $.grep(sourceData, function(o){return o.value === value;});

              if(elem.length) {
                $(this).text(elem[0].text).css("color", colors[value]);
              } else {
                $(this).empty();
              }
            }
          });

          $('#inline-status').editable();

          $('#inline-group').editable({
            showbuttons: false
          });

          $('#inline-dob').editable();
          $('#inline-event').editable();

          $('#inline-comments').editable({
            showbuttons: 'bottom'
          });

          $('#inline-fruits').editable({
            pk: 1,
            limit: 3,
            source: [
              {value: 1, text: 'banana'},
              {value: 2, text: 'peach'},
              {value: 3, text: 'apple'},
              {value: 4, text: 'watermelon'},
              {value: 5, text: 'orange'}
            ]
          }); 
        }
      });

      function destroy_all(){
        $('#inline-username').editable('destroy');
        $('#inline-firstname').editable('destroy');
        $('#inline-sex').editable('destroy');
        $('#inline-status').editable('destroy');
        $('#inline-group').editable('destroy');
        $('#inline-dob').editable('destroy');
        $('#inline-event').editable('destroy');
        $('#inline-comments').editable('destroy');
        $('#inline-fruits').editable('destroy'); 
        return false
      } 
    })(jQuery);
  </script>-->
  <script>
    //== Class definition
    var SweetAlert2Demo = function() {

      //== Demos
      var initDemos = function() {
        //== Sweetalert Demo 1
        /*$('#alert_demo_1').click(function(e) {
          swal('Good job!', {
            buttons: {              
              confirm: {
                className : 'btn btn-success'
              }
            },
          });
        });

        //== Sweetalert Demo 2
        $('#alert_demo_2').click(function(e) {
          swal("Here's the title!", "...and here's the text!", {
            buttons: {              
              confirm: {
                className : 'btn btn-success'
              }
            },
          });
        });

        //== Sweetalert Demo 3
        $('#alert_demo_3_1').click(function(e) {
          swal("Good job!", "You clicked the button!", {
            icon : "warning",
            buttons: {              
              confirm: {
                className : 'btn btn-warning'
              }
            },
          });
        });

        $('#alert_demo_3_2').click(function(e) {
          swal("Good job!", "You clicked the button!", {
            icon : "error",
            buttons: {              
              confirm: {
                className : 'btn btn-danger'
              }
            },
          });
        });

        $('#alert_demo_3_3').click(function(e) {
          swal("Good job!", "You clicked the button!", {
            icon : "success",
            buttons: {              
              confirm: {
                className : 'btn btn-success'
              }
            },
          });
        });

        $('#alert_demo_3_4').click(function(e) {
          swal("Good job!", "You clicked the button!", {
            icon : "info",
            buttons: {              
              confirm: {
                className : 'btn btn-info'
              }
            },
          });
        });

        //== Sweetalert Demo 4
        $('#alert_demo_4').click(function(e) {
          swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            buttons: {
              confirm: {
                text: "Confirm Me",
                value: true,
                visible: true,
                className: "btn btn-success",
                closeModal: true
              }
            }
          });
        });

        $('#alert_demo_5').click(function(e){
          swal({
            title: 'Input Something',
            html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
            content: {
              element: "input",
              attributes: {
                placeholder: "Input Something",
                type: "text",
                id: "input-field",
                className: "form-control"
              },
            },
            buttons: {
              cancel: {
                visible: true,
                className: 'btn btn-danger'
              },              
              confirm: {
                className : 'btn btn-success'
              }
            },
          }).then(
          function() {
            swal("", "You entered : " + $('#input-field').val(), "success");
          }
          );
        });

        $('#alert_demo_6').click(function(e) {
          swal("This modal will disappear soon!", {
            buttons: false,
            timer: 3000,
          });
        });*/  
        <?php for ($i=0; $i <50 ; $i++) {  ?>
        $('#alert_demo_<?php echo $i; ?>').click(function(e) {
          swal({
            title: 'Voulez vous vraiment Suprimer <?php echo "Unité".$i; ?>?',
            text: "cette action est inrevercible!",
            type: 'warning',
            buttons:{
              confirm: {
                text : 'oui',
                className : 'btn btn-success',
              },
              cancel: {
                text : 'Annuler',
                visible: true,
                className: 'btn btn-danger'
              }
            }
          }).then((Delete) => {
            if (Delete) {
              <?php if ($rp == "vraix") { ?> 
              swal({
                icon: "success",             
                title: 'Suprimer!',
                text: 'Suppression effectuer avec succès .',
                type: 'success',
                buttons : {
                  confirm: {
                    className : 'btn btn-success'
                  }
                } 
              });
                  $('tbody').children('tr').remove('#tr<?php echo $i; ?>');
                
              <?php  } 
                else {?>
                swal({
                 icon: "error",             
                title: 'Echec!',
                text: 'Echec de La suppression réessayer ultérieurement .',
                type: 'error',
                buttons : {
                  confirm: {
                    className : 'btn btn-danger'
                  }
                }
              });
                 <?php }?> 
             /*   */
            } else {
              swal.close();
            }
          });
        });
      <?php }?>
        /*$('#alert_demo_8').click(function(e) {
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            buttons:{
              cancel: {
                visible: true,
                text : 'No, cancel!',
                className: 'btn btn-danger'
              },              
              confirm: {
                text : 'Yes, delete it!',
                className : 'btn btn-success'
              }
            }
          }).then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                buttons : {
                  confirm : {
                    className: 'btn btn-success'
                  }
                }
              });
            } else {
              swal("Your imaginary file is safe!", {
                buttons : {
                  confirm : {
                    className: 'btn btn-success'
                  }
                }
              });
            }
          });
        })*/

      };

      return {
        //== Init
        init: function() {
          initDemos();
        },
      };
    }();
  </script>
</body>
</html>