<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/c_decroche.css">
  <link rel="stylesheet" type="text/css" href="35/style.css">

  <title>kemoko</title>
  <script type="text/javascript">
  $(document).ready(function () {
    SweetAlert2Demo.init();
        $(".switch-animate").click(function(event){
      if ($(".switch-animate").hasClass('switch-on')) {
        $(".switch-animate").removeClass('switch-on').addClass('switch-off');
        
      }
      else if ($(".switch-animate").hasClass('switch-off')) {
        $(".switch-animate").removeClass('switch-off').addClass('switch-on');
      }
    });
  });


</script>
</head>
<body style="background-color: rgb(27,33,54);min-width: 320px; ">
  <?php $valeur="faux" ?>
  <div class="container p2" ></div>
  <!--Menu -->
  <header style="">
    <?php include('menu1.php'); ?>
  </header>
  <div class="container-fluid containerp">
    <div class="row containerp2" style="">
        <div class="card-header" style="height: 60px;border-bottom: ridge 1px; padding-left: 20px;padding-top: 15px; ">
          <div class="card-title" style="font-size: 20px">Affectation Benne</div>
        </div>
        <div class="card-body" style="margin-top: 15px; ">
          <div class="">
            <div class="col-sm-6 col-md-6 col-lg-6" style="font-size: 15px;">
              <div class="form-group has-primary">
                <div >Identifiant  Camion : <shadow>Unite 9999</shadow></div>
               
              </div>
              <div class="form-group has-primary">
                <div >Marque  Camion : <samp>Renault</samp></div>
                
              </div>
              <div class="form-group has-primary">
                <div >SERIE : <samp>kerex 1500</samp></div>
                
              </div>
              <div class="form-group form-group-default">
                <div>Model : 6x2</div>
              </div>
              <div class="form-group form-group-default">
                <div>Benne : Double bennes </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group form-group-default">
                <label>Identifiant benne tracté</label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="zone">
                  <option value="zone 1">Zone 1</option>
                  <option value="zone 2">Zone 2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6 text-center" >
                  <input class="inp" type="checkbox" checked="" data-toggle="switch" />
                </div>
        </div>
       
      
    </div>
  </div>
  <div  class="menu-bas navbar-fixed-bottom  " style=" border-top: ridge black 1px; height: 30px; background-color: rgb(32,41,64); margin-top: 0;padding-top: 0;">
    <div class="container menu-basa" style="margin: 0;padding: 0; text-align: center;">
      
      
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

</body>
  <script src="js/c_decroche.js"></script>
  <script src="plugin/alert/sweetalert.min.js"></script>
  <script src="plugin/checbox/jquerytagsinput.js"></script>
<script>
    //== Class definition
  var SweetAlert2Demo = function() {

      //== Demos
    var initDemos = function() {
    
        $('#Accroche').click(function(e) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
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
                 <?php }?> 
             
            } else {
              swal.close();
              $('.containerl').replaceWith('<div class="container p2" ></div>');
              $('.containerp').css('opacity','1');
            }
          });
        });





        $('#decroche').click(function(e) {
          $('.p2').each(function(){
          var elemH2 = $(this);
          elemH2.replaceWith( sOut);
        $('.containerp').css('opacity','0.3');});
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
                 <?php }?> 
             
            } else {
              swal.close();
              $('.containerl').replaceWith('<div class="container p2" ></div>');
              $('.containerp').css('opacity','1');
            }
          });
        });


   



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
</html>