<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">
<head>
<meta http-equiv="Content-Type" charset="utf-8"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="camion.css">
<script src="js/jav.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>kemoko</title>
</head>
<body >
   <header >
      <?php include('menu1.php'); ?>
        <div class="container" style=" ">
            <div class="row" style=" ">
                <div class="col-md-12">
                   
            </div>
        </div>
      </div>
    </header>

<?php
$nbcamion= 100; ?>














    
    <nav class=" navbar-inverse sidebar" style="position: fixed;">
    <div class="container-fluid" style="position: relative;">
        
        <div >
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate btn-group" role="menu">
                        <?php for ($i=1; $i < $nbcamion ; $i++) { 
                          ?>
                        <li><a href="#">unite<?php echo $i; ?></a></li>
                        <?php 
                           
                        }?>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
               <!-- <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>

    </div>
<div style="position: absolute; bottom: 50; color: red;">nklnlk</div>
</nav>
<!--<div class="container corps" style="position: relative; left: 140px; top: 55px;">
    <div class="row">
    kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde 
    </div>
</div>-->

<div  class=" navbar-fixed-bottom navbar-inverse pied" style="height: 25px;">
      <div class="container">
        
        <div class="">
          
            <ul class="nav ">
              <li class="col-xs-3"><a href="#Home">Home</a></li>
              <li class="col-xs-3"><a href="#users">Users</a></li>
              <li class="col-xs-3"><a href="http://placesforlove.com">Places</a></li>
            </ul>
          
        </div>
      </div>
    </div>
   
</body>
</html>