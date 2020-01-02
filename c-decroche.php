<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/c_decroche.css">

  <!-- Custom styles for this template -->

</head>

<body style="background-color: rgb(27,33,54);min-width: 320px; ">
  
    <?php $benne=""; 
    if (isset( $_GET['benne'])) {
      $benne = $_GET['benne'];
    } else{
      $benne ="dd"; 
    } ?>
    <?php $valeur="faux"; ?>

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
            <samp class="" >Affectation Benne</samp></a></li>
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

              <div class="form-group form-group-default bennea <?php if ($benne != 'vide') { echo 'affiche';}else{ echo 'masque';}?>">
                <div>Types Benne : <samp class="benn">Double bennes</samp></div>
              </div>
              <div class="form-group form-group-default benned <?php if ($benne == 'vide') { echo 'affiche';}else{ echo 'masque';}?>">
                <label id="tbenne">Types Benne *</label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="tbenne">
                  <option>6x4</option>
                  <option>8x4</option>
                </select>
              </div>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">


              <div class="form-group form-group-default bennea <?php if ($benne != 'vide') { echo 'affiche';}else{ echo 'masque';}?>">
                <label for="Idcmid">Identifiant benne tracté</label>
                <div class="benn"> N°468684864684 </div>
              </div>
              <div class="form-group has-primary benned <?php if ($benne == 'vide') { echo 'affiche';}else{ echo 'masque';}?>">
                <label for="Idcmid">Identifiant benne tracté *</label>
                <input style="background-color: rgb(27,33,54);" type="text" id="Idcmid" placeholder="Champ Obligatoire" class="form-control">
              </div>


              <div class="row checkboxvalid" style="margin-bottom: 20px; margin-top: 20px;">
                <div class="col-sm-6 <?php if ($benne != 'vide') { echo 'affiche';}else{ echo 'masque';}?>">
                  <div class="form-group has-primary">
                  <input type="checkbox" <?php if ($benne != 'vide') { echo 'checked';}else{echo "string";}?>  data-toggle="switch" id="check" />
                </div>
                </div>
              </div>
            </div>
             <div class=" form-group form-group-default validation">
          <button class="btn btn-primary p22">Valider</button>
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

              
              
            
    
  <script src="plugin/alert/sweetalert.min.js"></script>
  <!--custom switch-->
  <script src="js/c-decroche.js"></script>
  <!--custom tagsinput-->
  <script src="plugin/jquery.tagsinput.js"></script>
  <!--bar du chargement -->
  <script src="plugin/nprogress.js"></script>
<script type="text/javascript">    
  $(document).ready(function () {

    $(".switch-animate").click(function(event){
      if ($(".switch-animate").hasClass('switch-on')) {
        $(".switch-animate").removeClass('switch-on').addClass('switch-off');
        $(".benn").addClass('bare');
      }
      else if ($(".switch-animate").hasClass('switch-off')) {
        $(".switch-animate").removeClass('switch-off').addClass('switch-on');
        $(".benn").removeClass('bare');
      }
    });

    $(".point").click(function(event){
      if ($(".switch-animate").hasClass('switch-on')) {
        $(".switch-animate").removeClass('switch-on').addClass('switch-off');
        $(".benn").addClass('bare');
      }
      else if ($(".switch-animate").hasClass('switch-off')) {
        $(".switch-animate").removeClass('switch-off').addClass('switch-on');
        $(".benn").removeClass('bare');
      }
    });
    SweetAlert2Demo.init();
  });
      var sOut = '<div class="container containerl"><div id="circle">';
      sOut += '<div class="ooo" style=""></div>';
      sOut += '<div class="loader"><div class="loader"><div class="loader"><div class="loader" style="position:relative;"></div></div></div></div>';
      sOut += '</div></div> ';
      sOut += '</div>';
</script>


  <!-- ------------------ chargement lors du click-------------- -->


<script>
    //== Class definition
  var SweetAlert2Demo = function() {

      //== Demos
    var initDemos = function() { 
    <?php if (isset( $_GET['benne']) and  $_GET['benne']!= "vide" ) { ?>     
        $('.p22').click(function(e) {
          if ($(".switch-animate").hasClass('switch-off')) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
        setTimeout(mafonction, 2000); 
          function mafonction() { 
          swal({
            title: '! ! !',
            text: "Vous le-vous vraiment  décrocher le seb XXXX",
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
              
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                setTimeout( document.location.href="c-decroche.php?benne=vide", 90000); 
                           
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
        }
        });

<?php }  ?>


 <?php if (isset( $_GET['benne']) and  ($_GET['benne']== "vide" or $_GET['benne']== "") ) { ?>     
        $('.p22').click(function(e) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
        setTimeout(mafonction, 2000); 
          function mafonction() { 
          swal({
            title: '! ! !',
            text: "Confirmer vous l’affectation du benne xxx au camion XXX",
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
              }); 
                $('.containerl').replaceWith('<div class="container p2" ></div>');
                $('.containerp').css('opacity','1');
                setTimeout( document.location.href="c-decroche.php?benne=R-50", 90000); 
                           
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



  <!-- ------------------pour le progres bar du demarage etun eventuel sous menu de gauche-------------- -->
  <script>
    !function(e){
  "use strict";
  var t={};
  NProgress.start(),e(document).ready(function(){return t.module.init(),t.plugin.init(),e('[data-toggle="tooltip"]').length&&e('[data-toggle="tooltip"]').tooltip(),!1}),
  e(window).on("load",function(){return t.plugin.isotope.init(),t.func.resizeNotice(),NProgress.done(),!1}),
  t.module={
    init:function(){return t.module.dropDown("js__drop_down",!1),t.module.toggle(),!1},
    dropDown:function(t,i){var r=e("."+t);return r.each(function(){var t=e(this);t.on("click",".js__drop_down_button",function(o){return o.preventDefault(),(e(window).width()<1025||i===!1)&&(t.hasClass("active")?t.removeClass("active"):(r.removeClass("active"),t.addClass("active"))),!1})}),e("html").on("click",function(i){var r=e(i.target);r.hasClass(t)||r.parents("."+t).length||e("."+t+".active").removeClass("active")}),!1},
  },
  t.func={
    childReturnWidth:function(i,r){if(i.children("li").children(".sub-menu").length){var o=0;return i.children("li").children(".sub-menu").each(function(){var i=t.func.childReturnWidth(e(this),r+e(this).outerWidth());i>o&&(o=i)}),o}return r},
    resizeNotice:function(){e(".notice-popup").each(function(){var t=e(this),i=parseInt(t.data("space"),10)>0?parseInt(t.data("space"),10):75,r=e(window).height()-i;t.attr("style",""),t.height()>r&&t.css({height:r})})}
  },
  t.plugin={
    init:function(){return t.plugin.chart(),t.plugin.mCustomScrollbar(),t.plugin.select2(),t.plugin.ui.accordion(),t.plugin.ui.slider(),t.plugin.ui.sortable(),t.plugin.ui.tabs(),t.plugin.waves(),t.plugin.isotope.filter(),!1},
    isotope:{
      init:function(){return setTimeout(function(){e(".js__filter_isotope").each(function(){var t=e(this);t.find(".js__isotope_items").isotope({itemSelector:".js__isotope_item",layoutMode:"cellsByRow"})})},100),!1},
    }
  }
}(jQuery);
  </script>
</body>

</html>
