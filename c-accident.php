<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/c_accident.css">

  <!--date -->

<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
</head>

<body style="background-color: rgb(27,33,54);min-width: 320px; ">
  
    <?php $etat=""; 
    if (isset( $_GET['etat'])) {
      $etat = $_GET['etat'];
    } else{
      $etat ="bonne"; 
    } ?>
    <?php $valeur="vraix"; ?>

  <div class="container p2" ></div>
  <!--Menu -->
  <header style="">
    <?php include('menu1.php'); ?>
  </header>
  <div class="container-fluid containerp">
  <div  class="row menuinfo" style="height: 60px; background-color: transparent; margin-top: 0;padding-top: 0;">
    <div class="container " style="margin: 0;padding: 0; text-align: left;">    
        <ul class="nav menuinfo1" style="">
           <li class="limenuinfo1 " style="display:inline-block;"><a href="camion.php" class="" >
            <samp class="phoned" > Gestion </samp><samp class="phonea" > >> </samp></a></li>
          <li class="limenuinfo " style="display:inline-block;"><a href="camion.php" class="" style="margin: 0;padding: 0;">
            <samp class="phoned" > Camion ></samp></a></li>
          <li class="limenuinfo" style="display:inline-block;"> <a href="camion-autre.php" class="" style="margin: 0; padding: 0;">
            <samp class="" > Autre ></samp></a></li>
          <li class="limenuinfo" style="display:inline-block;"><a href="" class="" style="margin: 0; padding: 0;">
            <samp class="" >Accidenter  </samp></a></li>
        </ul>
    </div>
  </div>
    <div class="row containerp2" style="">

        <div class="card-header" style="height: 60px;border-bottom: ridge 1px; padding-left: 20px;padding-top: 15px; ">
          <div class="card-title" style="font-size: 20px">Affectation Benne</div>
        </div>
        <div class="card-body" style="margin-top: 15px; ">
          <div class="">
            <div class="col-sm-6 col-md-6 col-lg-6" style="font-size: 15px; font-family: Arial Black;">
              <div class="form-group has-primary">
                <div class="" >Identifiant  Camion : <samp>Unite 9999</samp></div>
               
              </div>
              <div class="form-group has-primary">
                <div >Marque  Camion : <samp>Renault</samp></div>
                
              </div>
              <div class="form-group has-primary">
                <div >SERIE : <samp>kerex 1500</samp></div>
                
              </div>
              <div class="form-group form-group-default">
                <div>Model :<samp> 6x2</samp></div>
              </div>

              <div class="form-group form-group-default bennea ">
                <div>Etat actuel : 
                  <samp class="benn text-success <?php if ($etat != 'accident') { echo '';}else{ echo 'masque';}?>" style="color: green" >Bonne</samp>
                  <samp class="benn text-danger <?php if ($etat == 'accident') { echo '';}else{ echo 'masque';}?>" style="color: red" >Accidenté</samp>
                </div>
              </div>
              <div class="form-group form-group-default <?php if ($etat != 'accident') { echo 'affiche';}else{ echo 'masque';}?>">
                <label id="tbenne">Lieu D’accident </label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="tbenne">
                  <option>Route port 1  </option>
                  <option>Route port 2  </option>
                </select>
              </div>
              <div class="form-group form-group-default <?php if ($etat == 'accident') { echo 'affiche';}else{ echo 'masque';}?>">
                <label id="tbenne">Lieux de dépannage  </label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="tbenne">
                  <option>Renault Base technique 1  </option>
                  <option>Renault base technique 2  </option>
                </select>
              </div>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group has-primary ">
                <label for="filter-date" class="<?php if ($etat != 'accident') { echo 'affiche';}else{ echo 'masque';}?>">Date et Heures  D’accident *</label>
                <label for="filter-date" class="<?php if ($etat == 'accident') { echo 'affiche';}else{ echo 'masque';}?>">Date et heures de dépannage *</label>
                <input style="background-color: rgb(27,33,54);" class="form-control" type="text" name="filter-date" id="filter-date" autocomplete="off" />
              </div>
              <div class="form-group form-group-default <?php if ($etat != 'accident') { echo '';}else{ echo 'masque';}?>">
                <label id="tbenne">Lieu de stationnement     </label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="tbenne">
                  <option>Garage Renault port 1 </option>
                  <option>Garage Renault port 2 </option>
                </select>
              </div>


              <!--<div class="row checkboxvalid" style="margin-bottom: 20px; margin-top: 20px;">
                <div class="col-sm-6 ">
                  <div class="form-group has-primary">
                  <input type="checkbox" checked=""  data-toggle="switch" id="check" />
                </div>
                </div>
              </div>-->
            </div>
             <div class=" form-group form-group-default validation">
          <button class="btn btn-primary  p22">Valider</button>
          <button class="btn btn-danger">Annuler</button>
        </div>
          </div>

        </div>
<!-- <samp class="pull-left glyphicon glyphicon-menu-left"></samp>
 <samp class="menubas-icones glyphicon glyphicon-menu-right"></samp>-->
      
    </div>
  </div>
  <div  class="menu-bas navbar-fixed-bottom  " style=" border-top: ridge black 1px; height: 30px; background-color: rgb(32,41,64); margin-top: 0;padding-top: 0;">
    <div class="container" style="margin: 0;padding: 0; text-align: center;">
      
      
        <ul class="nav  menubas" style="">
           <li class="col-xs-3 col-sm-2 col-md-2  libas" style="margin: 0;padding: 0;"><a href="camion.php" class="etat">
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

  <script src="plugin/alert/sweetalert.min.js"></script>
  <script src="plugin/Date.jquery.js"></script>
  <script src="plugin/jquery.datetimepicker.full.js"></script>
  <script type="text/javascript">    
  $(document).ready(function () {
  'use strict';

 jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
    SweetAlert2Demo.init();
  });
      var sOut = '<div class="container containerl"><div id="circle">';
      sOut += '<div class="ooo" style=""></div>';
      sOut += '<div class="loader"><div class="loader"><div class="loader"><div class="loader" style="position:relative;"></div></div></div></div>';
      sOut += '</div></div> ';
      sOut += '</div>';
</script>
<script>
    //== Class definition
  var SweetAlert2Demo = function() {

      //== Demos
    var initDemos = function() { 
    <?php if (isset( $_GET['etat']) and  $_GET['etat']!= "accident" ) { ?>     
        $('.p22').click(function(e) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
        setTimeout(mafonction, 2000); 
          function mafonction() { 
          swal({
            icon: "warning",
            text: "Confirmer vous que l’unité xxx est accidenté    ",
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
              <?php if ($valeur == "vraix") { ?> 
                setTimeout( document.location.href="c-accident.php?etat=accident", 2000); 
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                
                           
              <?php  } 
                else {?>
                swal({
                 icon: "error",             
                title: 'Echec!',
                text: 'Erreur lors de l’exécution de la requête réessayer ultérieurement .',
                type: 'error',
                buttons : {
                  confirm: {
                    className : 'btn btn-danger'
                  }
                }
              });
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                 $(".switch-animate").removeClass('switch-off').addClass('switch-on');
                $(".benn").removeClass('bare');
                 <?php }?> 
             
            } else {
              swal.close();
              $('.containerl').replaceWith('<div class="container p2" ></div>');
              $('.containerp').css('opacity','1');
            }
          });}
        
        });

<?php }  ?>


 <?php if (isset( $_GET['etat']) and  ($_GET['etat']== "accident") ) { ?>     
        $('.p22').click(function(e) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
        setTimeout(mafonction, 2000); 
          function mafonction() { 
          swal({
            icon: "warning",
            text: "Confirmer vous le dépannage du seb xxxxx",
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
              <?php if ($valeur == "vraix") { ?> 
              swal({
                icon: "success",             
                title: 'Décrocher!',
                text: 'Unité xxx Décrocher  .',
                type: 'success',
                buttons : {
                  confirm: {
                    className : 'btn btn-success'
                  }
                } 
              }); setTimeout( document.location.href="c-accident.php?etat=bonne", 3000);
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                
                           
              <?php  } 
                else {?>
                swal({
                 icon: "error",             
                title: 'Echec!',
                text: 'Erreur lors de l’exécution de la requête réessayer ultérieurement .',
                type: 'error',
                buttons : {
                  confirm: {
                    className : 'btn btn-danger'
                  }
                }
              });
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                 $(".switch-animate").removeClass('switch-off').addClass('switch-on');
                $(".benn").removeClass('bare');
                 <?php }?> 
             
            } else {
              swal.close();
              $('.containerl').replaceWith('<div class="container p2" ></div>');
              $('.containerp').css('opacity','1');
            }
          });}
        });

<?php }  ?>
   



    /*  $('.p22').click(function(e) {
        $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);});
          $('.containerp').css('opacity','0.3');
          setTimeout(mafonction, 1000); 
          function mafonction() { 
            <?php if ($valeur == "faux") { ?> 
        
              swal("Echec L'or du Sauvegarde", {
                icon : "error",
                buttons: {              
                  confirm: {
                    className : 'btn btn-danger'
                  }
                },
              });$('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
            
            <?php } ?>
            <?php if ($valeur == "vraix") { ?>
              swal("Sauvegarder avec success", {
                icon : "success",
                buttons: {              
                  confirm: {
                    className : 'btn btn-success'

                  }
                },
              });
              $('.containerl').replaceWith('<div class="container p2" ></div>');
              $('.containerp').css('opacity','1');
            <?php } ?>
          }
        
          
      
      });*/

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
