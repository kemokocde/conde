<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/configpoint.css">
  <link rel="stylesheet" type="text/css" href="plugin/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/date/DatePickerX.css">

  <title>kemoko</title>
</head>
<body style="background-color: rgb(27,33,54);min-width: 320px; ">
  <!--Menu -->
  <header >
    <?php include('menu1.php'); ?>
  </header>
  <div class="container-fluid containerp" style=" ">
    <div class="col-md-12 containerp2" style="">
      <div class=" containerp3" style="">
        <div class="row card-header" style="height: 60px;border-bottom: ridge 1px; padding-left: 20px;padding-top: 15px;">
          <div class="card-title" style="font-size: 20px">Configuration point de chargement</div>
        </div>
        <div class="card-body" style="margin-top: 15px">
          <div class="row">
            <div style="font-size: 40px">C12</div>
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="col-sm-6 col-md-6 col-lg-6 form-group form-group-default">
                <label>Poste</label>
                <select style="background-color: rgb(27,33,54);" class="form-control text-muted" id="formGroupDefaultSelect">
                  <option>Poste 1</option>
                  <option>Poste 2</option>
                </select>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 form-group has-primary real">
                <label for="Idcmid">Date *</label>
                  <input type="text" name="realDPX" placeholder="Date" class="form-control" style="background-color: rgb(27,33,54);">
              </div>

              <div class="col-sm-6 col-md-6 col-lg-6 ">
                   <label for="">Etat</label>
                  <div class="form-group has-primary fff">
                  <input type="checkbox"  data-toggle="switch" id="check" />
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 form-group form-group-default">
                <label for="marquecmid">Agent *</label>
                  <select class="form-control select2_1" multiple="multiple" style="background-color: rgb(27,33,54);color: black;">
                    <optgroup id="3254" label="fode camara">
                      <option  id="je" value="AK" > 3254</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="HI">2547</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="CA">4125</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="NV">1452</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="OR">3154</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="WA">1254</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="AZ">2546</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="CO">2148</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="ID">2654</option>
                      </optgroup>
                    <optgroup label="">
                      <option value="MT">1254</option>
                    </optgroup>
                  </select>
              </div>
              
              <div class="col-sm-6 col-md-6 col-lg-6 form-group has-primary">
                <label for="marquecmid">Nombre de chargeuge </label>
                <input style="background-color: rgb(27,33,54);" type="number" id="marquecmid" placeholder="0" class="form-control text-muted"  min="0">
              </div>
              
              <!-- <div class="col-sm-6 col-md-6 col-lg-6 form-group form-group-default">
                <label>N° Châssis </label>
                <input style="background-color: rgb(27,33,54);" id="Name" type="text" class="form-control" placeholder="EX:2019xxxxxxxxxxxxx">
              </div> -->
             <!--  <div class="form-group form-group-default">
                <label>Model *</label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="formGroupDefaultSelect">
                  <option>6x4</option>
                  <option>8x4</option>
                </select>
              </div> -->
              
              <!--<div class="form-group has-error">
                <label for="errorInput">Error Input</label>
                <input style="background-color: rgb(27,33,54);" type="text" id="errorInput" value="" class="form-control">
                <small id="emailHelp" class="form-text text-muted">Please provide a valid informations.</small>
              </div> 

              <div class="form-group">
                <label for="disableinput">Disable Input</label>
                <input style="background-color: rgb(27,33,54);" type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled>
              </div>
                <div class="form-group form-group-default">
                <label>Select</label>
                <select style="background-color: rgb(27,33,54);" class="form-control" id="formGroupDefaultSelect">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <label class="mt-3 mb-3"><b>Form Floating Label</b></label>
              <div class="form-group form-floating-label">
                <input style="background-color: rgb(27,33,54);" id="inputFloatingLabel" type="text" class="form-control input-border-bottom"  required>
                <label for="inputFloatingLabel" class="placeholder">Input</label>
              </div>-->
            </div>
          </div>
        </div>
       <div class="card-action">
          <button class="valid btn btn-success">Valider</button>
          <button class="btn btn-danger">Annuler</button>
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
   <!--bar du chargement -->
   <script >    
  $(document).ready(function () {

    $(".fff").click(function(event){
      if ($(".switch-animate").hasClass('switch-on')) {
        $(".switch-animate").removeClass('switch-on').addClass('switch-off');
      }
      else if ($(".switch-animate").hasClass('switch-off')) {
        $(".switch-animate").removeClass('switch-off').addClass('switch-on');
      }
    });
  });
</script>
    <script src="js/configpoint.js"></script>
    <script src="plugin/jquery.tagsinput.js"></script>
   <script src="plugin/js/select2.min.js"></script>
   <script src="scripts/js/form.demo.min.js"></script>
   <script src="js/date/DatePickerX.min.js"></script>  
  <script src="plugin/nprogress.js"></script>
  <script src="js/cm.js"></script>

  
  
</body>
</html>