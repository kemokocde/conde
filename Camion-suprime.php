<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
  <head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/camion_suprime.css">
  <title>kemoko</title>
  <?php $rp="vraix";  ?>
    <script type="text/javascript">
     $(document).ready(function () {
      SweetAlert2Demo.init();
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
 
  <div class="container-fluid containerp">
    <div class=" row containerp1">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style=" min-width: 320px; background-color: rgb(32,41,64);  border-radius: 15px 15px 0px 0px;  border-bottom: double white 1px; color: white;">
        <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-6" style=" padding-top: 10px; color: white;"> <h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">Suppression </h4><h4 class="col-xs-6 col-sm-12 col-md-12 col-lg-12">flotte Renault port 1</h4></div>
        <div class=" form-group form-group-default col-xs-12 col-sm-8 col-md-7 col-lg-6 " style=" padding-top: 20px; text-align: center;">
          <label class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right" style="">Sélectionné</label>
          <button class="btn btn-success col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right" style=" margin-left: 10px;width: 40px; "><span class="glyphicon glyphicon-ok"></span></button>
          <select style="background-color: rgb(27,33,54); color: white; width: 50%;" class="form-control col-xs-11 col-sm-5 col-md-5 col-lg-5 pull-right" >
            <option>flotte Renault port 1</option>
            <option>flotte 2</option>
          </select>
        </div>
      </div>
      <div class="scrollbar scrollbar-primary " style=" border: solid white 2px; background-color:rgb(32,41,64); color:rgb(6,6,6);max-height: 500px">
        <table class="table table-striped   custab col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-width: 900px;background-color:transparent; color: rgb(143,149,163);">
          <thead>
            <tr>
              <th>flotte</th>
              <th>Nom Unité</th>
              <th>Marque  </th>
              <th>Serie</th>
              <th>Model</th>
              <th>Immatriculation</th>
              <th>Zone Mobile</th>
              <th>N° Châssis</th>
              <th >ETAT</th>
              <th >Valeur</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody >         
            <?php for ($i=0; $i <20 ; $i++) { 
            ?>
            <tr class="" id="tr<?php echo $i; ?>">
                <td>Unite <?php echo $i; ?></td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                <td>News Cate</td>
                <td>News</td>
                <td>News Cate</td>
                
                <td ><a href="#" class="btn btn-danger btn-xs" id="alert_demo_<?php echo $i; ?>"><span class="glyphicon glyphicon-trash"></span><?php echo $rp; ?> Suprimer</a></td>
            </tr>
         <?php  } ?>
       </tbody>
        </table>
      </div>
    </div>
  </div >
 <div  class="menu-bas navbar-fixed-bottom  " style=" border-top: ridge black 1px; height: 30px; background-color: rgb(32,41,64); margin-top: 0;padding-top: 0;">
    <div class="container menu-basa" style="margin: 0;padding: 0; text-align: center;">
        <ul class="nav  menubas" style="">
           <li class="col-xs-3 col-sm-2 col-md-2" style="margin: 0;padding: 0;"><a href="camion.php" class="etat">
            <samp class="menubas-text"> Etat</samp>
            <samp class="menubas-icones glyphicon glyphicon-dashboard" style="color: red; width: 30px;height: 30px; position: relative; top: -5px;"></samp></a></li>
          <li class="col-xs-2 col-sm-2 col-md-2" style="margin: 0;padding: 0;"><a href="camion-ajout.php" class="ajout">
            <samp class="menubas-text"> Ajouter </samp>
            <samp class="menubas-icones"><img src="img/icone/ajout.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;"> </samp> </a></li>
          <li class="col-xs-2 col-sm-2 col-md-2" style="margin: 0;padding: 0;"><a href="camion-modifie.php" class="modifi">
            <samp class="menubas-text"> Modifier </samp>
            <samp class="menubas-icones"><img src="img/icone/modifie.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;;"> </samp> </a></li>
          <li class="col-xs-2 col-sm-2 col-md-2" style="margin: 0;padding: 0;"><a href="camion-suprime.php" class="suprime">
            <samp class="menubas-text"> Suprimer </samp>
            <samp class="menubas-icones"><img src="img/icone/suprime.PNG" style="width: 30px;height: 30px; position: relative; top: -5px;"> </samp> </a></li>
          <li class="col-xs-3 col-sm-2 col-md-2" style="margin: 0;padding: 0;"><a href="camion-autre.php" class="autre">
            <samp class="menubas-text"> Autre </samp>
            <samp class="menubas-icones glyphicon glyphicon-certificate" style="color: red; width: 30px;height: 30px; position: relative; top: -5px;"></samp> </a></li>
        </ul>
      
    </div>
  </div>
  <!--bar du chargement -->
  <script src="plugin/nprogress.js"></script>
  <script src="js/cm.js"></script>
  <script src="plugin/alert/sweetalert.min.js"></script>
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