<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

  <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-------------------- Css modification -------------------------------------->
<link rel="stylesheet" href="plugin/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/camion_modifie.css">

<script src="js/camion.js"></script>
<title>kemoko</title>
<?php $rp="vraix";  ?>
  <script type="text/javascript">
   $(document).ready(function () {
          $('#inline-flotte').editable({
          
          mode: 'inline',
          source: [
            {value: 1, text: 'flotte 1'},
            {value: 2, text: 'flotte 2'}
          ],
          
        });
           $('#inline-identifiant').editable({
          type: 'text',
          pk: 1,
          name: 'identifiant',
          title: 'Enter identifiant',
          mode: 'inline'
        });
        $('#inline-zone').editable({
          
          mode: 'inline',
          source: [
            {value: 1, text: 'zone 1'},
            {value: 2, text: 'zone 2'}
          ],
          
        });
        $('#inline-marque').editable({
          
          mode: 'inline',
          source: [
            {value: 1, text: 'Renault'},
            {value: 2, text: 'Howo'}
          ],
          
        });
         $('#inline-serie').editable({
          type: 'text',
          pk: 1,
          name: 'serie',
          title: 'Enter serie',
          mode: 'inline'
        });
         $('#inline-model').editable({
          
          mode: 'inline',
          source: [
            {value: 1, text: '6x4'},
            {value: 2, text: '8x4'}
          ],
          
        });
         $('#inline-immatriculation').editable({
          type: 'text',
          pk: 1,
          name: 'immatriculation',
          title: 'Enter immatriculation',
          mode: 'inline'
        });
         $('#inline-chassis').editable({
          type: 'number',
          pk: 1,
          name: 'chassis',
          title: 'Enter chassis',
          mode: 'inline'
        });
         $('#inline-baines').editable({
          
          mode: 'inline',
          source: [
            {value: 1, text: '2 Baine'},
            {value: 2, text: 'R-50'},
            {value: 2, text: '12 Roue'}
          ],
          
        });
         $('#inline-nbaine').editable({
          type: 'text',
          pk: 1,
          name: 'identifiant',
          title: 'Enter identifiant',
          mode: 'inline'
        });
         /*
        $('#inline-firstname').editable({
          validate: function(value) {
            if($.trim(value) === '') return 'Chapm Obligatoire';
          },
          mode: 'inline'
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
        }); */
        return false




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
  <div class="container-fluid containerp" >
    <div class="row containerp1">
      <div class="col-xs-12 containerp2" style="">
        <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-6" style=" padding-top: 10px;"> <h4 class="">MODIFICATION </h4></div>
        <div class=" form-group form-group-default col-xs-12 col-sm-8 col-md-7 col-lg-6 " style=" padding-top: 20px;">
          <label class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="">Sélectionné</label>
          <select style="background-color: rgb(27,33,54); color: white; width: 80%;text-align: right;" class="form-control col-xs-11 col-sm-5 col-md-5 col-lg-5" >
            <option>camion 1</option>
            <option>camion 2</option>
          </select>
          <button class="btn btn-success col-xs-1 col-sm-1 col-md-1 col-lg-1" style=" text-align: right;margin-left: 10px;width: 40px; "><span class="glyphicon glyphicon-ok"></span></button>
        </div>
        
          <!-- /.dropdown js__dropdown 
          <div class="switch primary margin-bottom-20"><input type="checkbox" id="switch-inline" checked><label for="switch-inline"><strong>:</strong></label></div>-->
          <table class="table table-bordered table-striped" style="color: white;">
            <tbody>
               <tr>
                <td>Flotte</td>
                <td><a class="affichage" href="#" id="inline-flotte" data-type="select" data-pk="1" data-value="1"  data-title="Select flotte"></a></td>
              </tr>
              <tr>
                <td style="width: 35%">Identifiant Camion </td>
                <td><a class="affichage" href="#" id="inline-identifiant" data-type="text" data-pk="1" data-title="Enter identifiant">camion xxx</a></td>
              </tr>
               <tr>
                <td>ZONE MOBILE</td>
                <td><a class="affichage" href="#" id="inline-zone" data-type="select" data-pk="1" data-value="1"  data-title="Select zone"></a></td>
              </tr>
              <tr>
                <td>Marque Camion</td>
                <td><a class="affichage" href="#" id="inline-marque" data-type="select" data-pk="1" data-value="1"  data-title="Select marque"></a></td>
              </tr>
              <tr>
                <td style="width: 35%">SERIE </td>
                <td><a class="affichage" href="#" id="inline-serie" data-type="text" data-pk="1" data-title="Enter serie">Serie</a></td>
              </tr>
              <tr>
                <td>Model</td>
                <td><a class="affichage" href="#" id="inline-model" data-type="select" data-pk="1" data-value="1"  data-title="Select model"></a></td>
              </tr>
              <tr>
                <td style="width: 35%">Immatriculation </td>
                <td><a class="affichage" href="#" id="inline-immatriculation" data-type="text" data-pk="1" data-title="Enter immatriculation">IT-1212</a></td>
              </tr>
              <tr>
                <td style="width: 35%">N° Châssis </td>
                <td><a class="affichage" href="#" id="inline-chassis" data-type="number" data-pk="1" data-title="Enter chassis">6515165156165165</a></td>
              </tr>
              <tr>
                <td>Types de Baines </td>
                <td><a class="affichage" href="#" id="inline-baines" data-type="select" data-pk="1" data-value="1"  data-title="Select baines"></a></td>
              </tr>
              <tr>
                <td style="width: 35%">N° Baines </td>
                <td><a class="affichage" href="#" id="inline-nbaine" data-type="text" data-pk="1" data-title="Enter nbaine">323534354</a></td>
              </tr>
             <!-- <tr>
                <td>Empty text field, required</td>
                <td><a href="#" id="inline-firstname" data-type="text" data-pk="1"  data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
              </tr>
              
              <tr>
                <td>Select, error while loading</td>
                <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
              </tr>
              <tr>
                <td>Combodate (date)</td>
                <td><a href="#" id="inline-dob" data-type="combodate" data-value="2016-11-16" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
              </tr>
              <tr>
                <td>Combodate (datetime)</td>
                <td><a href="#" id="inline-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
              </tr>
              <tr>
                <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
              </tr>
              <tr>
                <td>Checklist</td>
                <td><a href="#" id="inline-fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
              </tr>-->
            </tbody>
          </table>
        </div>
    </div>
  </div>
 
  <!--Menu bas -->
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
    <!--pour le graph disponibilité -->
  <script src="lib/common-scripts.js"></script>
  <!--pour lles pages dalert -->
  <script src="plugin/alert/sweetalert.min.js"></script>
  <!--------------------------------------debut script modification-------------------------------------------- -->
  <!--pour la date parti modification -->
  <script src="plugin/moment/moment.js"></script>
  <!-- X-script pour  modification -->
  <script src="plugin/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
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

</body>
</html>