<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
  <head>
<title>kemoko</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
  </head>
  <body style="">

        <nav class="navbar navbar-fixed-top" style="background-color: rgb(32,41,64); z-index:9000; border-bottom: 1px solid white;" >
            <div class="container-fluid " >
                <!--menu pour telephone -->
                <div class="navbar-header" style="border-bottom: 1px solid white;">
                    <button class="navbar-toggle collapsed pull-left btnmenu" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <!--menu de navigation -->
                <div class="collapse navbar-collapse " id="navcol-1"  >
                    <ul class="nav navbar-nav" >

                      <li ><a class="men1"  href="index.php">ACtivité</a></li>

                      <li class="dropdown ">

                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">Vue d'ensemble <span class="caret"></span></a>

                        <ul class="dropdown-menu" >
                          <li class="dropdown">
                            <a href="vudes.php" class="dropdown-toggle " data-toggle="dropdown">Malapoya <span class="caret"></span></a>

                            <ul class="dropdown pul" >
                              <li><a href="vuedsm.php">Activité</a></li>
                              <li><a href="gmine.php">Gestion Mine</a></li>
                              <li><a href="#">Gestion des données</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Kaboy6</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion <span class="caret"></span></a>
                        <ul class="dropdown-menu" >
                          <li><a href="camion.php">Camion</a></li>
                          <li><a href="#">Flotte</a></li>
                          <li><a href="#">Point de chargement</a></li>
                        </ul>
                      </li>
                        <li ><a class="men1"  href="ajouter_vos_bien.php">Rapport</a></li>
                        <li ><a style="" href="#">Getions utilisteur</a></li>
                        <li ><a style="" href="#">Mon compte</a></li>
                    </ul>
                </div>
            </div>

<!--menu de recheche  <img class="logo" src="images.png" style=" width: 80px; height: 50px;">
            <div class="" style="float: right; position: relative;top: 7px;">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="recheche" data-toggle="collapse-side1" data-target=".side-collapse1" data-target-2=".side-collapse-container1" type="button" class="navbar-toggle pull-right">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
        </div>-->

<!--menu de recheche pour phone 
        <div class="navbar-inverse side-collapse1 in" style="">
    <div class="container-fluide" style="">
      <span class="glyphicon glyphicon-chevron-left" data-toggle="collapse-side1" style="color: rgb(255,255,255); float: left; position: relative;top: 4px;left: 15px;"></span>
            <form action="" class="search-form ccc" style="position: relative;top: -7px;">
                <div class="form-group has-feedback vvv">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="recheche">
                  <span class=" form-control-feedback"></span>
              </div>
            </form>
        </div>-->
        <!--affichage  de resulta de recheche 
      <div class="container"  style="background-color: rgb(255,255,255);position: relative;top: 40px; bottom: 0; height:  100%;">
        <div class="row">
        <h1>Resultat</h1>
        <p>de recherche</p>
        <p></p>
        </div>
      </div>
      </div>-->
      </nav>
 <script type="text/javascript">
  var type1 =parseInt(<?php echo $type; ?>);
  $(document).ready(function () {
  /* $('.dd1').click(function (event) {
      if ($(".dd1").hasClass('open')) {
                $(".dd1").removeClass('open');             
              }
        else {
                $(".dd1").addClass('open');
              }
    });
    $('.dd2').click(function (event) {
           $(".dd1").addClass('open');
              
    });*/
});
 </script>
</body>
</html>














