<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/gmine.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>kemoko</title>
</head>
<body style="background-color: rgb(27,33,54);min-width: 390px; ">
  <!--Menu -->
  <header >
    <?php include('menu1.php'); ?>
  </header>
  <div class="container-fluid containerp" style=" ">
    <div class="col-md-12 containerp2" style="">
      <div class="row card-header" style="height: 60px;border-bottom: ridge 1px; padding-right: 20px;padding-top: 15px;">
        <div class="card-title" style="font-size: 20px;text-align: right;"><p class="heure"></p></div>
      </div>
      <div class="row" style="">
        <div style="font-size: 40px">C12</div>
        <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
          <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
            <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
              <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 1</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-success poste3 pull-right" style="font-size: 20px;padding: 0;">En cour</div>
            </div>
            <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
              <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-success poste3 pull-right" style="font-size: 20px;padding: 0;"> Ouvert</div>
            </div>
          </div>
          <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
            <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
            </div>
            <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
            </div>
          </div>
        </div>
         <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
          <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
            <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
              <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 2</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-warning poste3 pull-right" style="font-size: 20px;padding: 0;">En attente</div>
            </div>
            <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
              <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-success poste3 pull-right" style="font-size: 20px;padding: 0;"> Ouvert</div>
            </div>
          </div>
          <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
            <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
            </div>
            <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="">
          <div style="font-size: 40px">V3</div>
          <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 1</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-success poste3 pull-right" style="font-size: 20px;padding: 0;">En cour</div>
              </div>
              <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-warning poste3 pull-right" style="font-size: 20px;padding: 0;"> Fermer</div>
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
           <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 2</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-warning poste3 pull-right" style="font-size: 20px;padding: 0;">En attente</div>
              </div>
              <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-warning poste3 pull-right" style="font-size: 20px;padding: 0;"> fermer</div>
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
      </div>

       <div class="row" style="">
          <div style="font-size: 40px">B2</div>
          <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 1</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-danger poste3 pull-right" style="font-size: 20px;padding: 0;">Arrêt </div>
              </div>
              <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-danger poste3 pull-right" style="font-size: 20px;padding: 0;">Arrêt</div>
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
           <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="row col-sm-12 col-md-12 col-lg-12  poste1" style="">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">poste 2</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-danger poste3 pull-right" style="font-size: 20px;padding: 0;">Arrêt</div>
              </div>
              <div class="row col-sm-12 col-md-12 col-lg-12 poste1">
                <div class="col-sm-6 col-md-6 col-lg-6 poste2 pull-left" style="font-size: 20px;">Etat:</div><div class="col-sm-6 col-md-6 col-lg-6 poste2 text-danger poste3 pull-right" style="font-size: 20px;padding: 0;">Arrêt</div>
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
      </div>

      <div class="row" style="">
          <div style="font-size: 40px">C7</div>
          <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="col-sm-12 col-md-12 col-lg-12  poste1 pull-left" style="font-size: 20px;">poste 1
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 poste1 pull-left" style="font-size: 25px;">
               Non configurée
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
           <div class="row col-sm-6 col-md-6 col-lg-6 conteneurposte " style="">
            <div class="row col-sm-12 col-md-8 col-lg-7 poste pull-left" style="">
              <div class="col-sm-12 col-md-12 col-lg-12  poste1 pull-left" style="font-size: 20px;">poste 2
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 poste1 pull-left" style="font-size: 25px;">
               Non configurée
              </div>
            </div>
            <div class="row modifpost col-sm-12 col-md-4 col-lg-4" style="margin-left: 2px;">
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12" style="font-size: 15px; "><a  href="configpoint.php"> Configuré</a>
              </div>
              <div class="modifpost1 col-sm-6 col-md-12 col-lg-12 confi" style="font-size: 15px; "><a  href="p_detail.php"> Plus de detaille</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

   <!--bar du chargement -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="plugin/jtimer.min.js"></script>
<script src="js/temp.js"></script>

  <script src="plugin/nprogress.js"></script>
  <script src="js/cm.js"></script>
</body>
</html>