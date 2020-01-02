<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

  <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jav.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="vuedsm.js"></script>
<link rel="stylesheet" type="text/css" href="vuedsm.css">
<link rel="stylesheet" type="text/css" href="prgbar.css">

<?php 
 $j = 2;
 $nbpoint = 5;
  ?>

<title>kemoko</title>
  <style>
      @media (min-width:200px) {
 .encourdc1{
  min-width: <?php  echo($j*225)+225;?>px;
 }

  
}
@media (min-width:300px) and (max-width: 900px) {
 .pointch1{
  min-width: <?php  echo($nbpoint*85);?>px;
 }
 .pointch{
  overflow-x: scroll; 
 }
 .point{
  min-width: 85px;
 }

  
}
    </style>
    <script type="text/javascript">
      
     $(document).ready(function () { 

    
});
    

</script>
  </head>
  <body style="background-color: rgb(8,8,8); min-width: 290px;">
    <!--entete -->
      <header >
      <?php include('menu1.php'); ?>
    </header>
         <div >

                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard" style="background-color: rgb(8,8,8);">
                        <form action="" method="">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                <div class="wizard-navigation pointch" style="" >
                  <ul class="pointch1" >
                    <?php for ($l=1; $l <= $nbpoint ; $l++) { 
                     
                    
                    ?>
                        <li class="point" style="" ><a href="#point<?php echo$l; ?>" data-toggle="tab">WWWW<?php echo$l; ?></a></li>
                        
                        <?php 
                        }
                        ?>
                                   
                    </ul>
                </div>

                            <div class="tab-content">






                                


                                <div class="tab-pane coteneur " style="" id="point1" >
                                  <div class="row coteneur " style="color: #ffffff; margin: 0;padding: 0;min-width: 270px;">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> </h4>
                                    </div>
                                    <div style="">
                                      <p  class="titre" style="max-width: 290px;">En cours de chargement</p>
                                    <div class="col-xs-10 encourdc" >
                                      <div class="encourdc1" style="top: 30px button: 30px;">
                                             
                                             <?php for ($i=0; $i <$j ; $i++) { 
                                               # code...
                                             ?>
                                        <div class="col-sm-2 encourdc2" style="width: 220px; margin-right: 0; margin-left: 0;padding-left: 0; padding-right: 0;   bottom: 10px;  ">
                                          <h3>chargeuge <?php echo $i+1; ?></h3>
                                          <div>Camion x<samp> <br/>depuis : 00:00:00</samp></div>
                                           <div class="pull-left">
                                               <input type='button' class='btn  btn-success ' name='terminer' value='terminer' />
                                               <input type='button' class='btn   btn-danger ' name='anuler' value='anuler' />
                                            </div>
                                          
                                        </div>
                                        <?php } ?>

                                        <div class="col-sm-2 encourdc2" style="width: 220px; margin-right: 0; margin-left: 0;padding-left: 0; padding-right: 0; bottom: 10px;  ">
                                          <h3>chargeuge <?php echo $i+1; ?></h3>
                                          <div><div>Libre <samp> <br/>depuis : 00:00:00</samp></div>
                                                  <input name="name" type="text" class="form-control" style="max-width: 160px; "></div>
                                           <div class="pull-left">
                                               <input type='button' class='btn  btn-success ' name='Ajouter' value='Ajouter' />
                                               
                                            </div>
                                          
                                        </div>


                                      </div>
                                     </div>
                                     </div>
                                       <div class="container col-xs-2 objectifc" style="top: 30px button: 30px;  ">
                                        <h5 class="objectif">Objectif</h5>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="progress blue progressb">
                                                    <span class="progress-left">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <div class="progress-value">90%</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 attente1" style="margin: 0;padding: 0;">
                                        <div class="titreattente " style="font-size: 10px; background-color: rgb(46,46,46);  margin: 0;padding: 0; ">
                                          <p class="titre" style=" max-width: 100px; "> Attente </p>
                                        </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 attente" style="background-color: rgb(46,46,46); margin: 0;padding: 0;">
                                        
                                        <?php for ($k=0; $k <10 ; $k++) { 
                                          
                                         ?>
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="padding: 10px;">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6 margattente" style="">camion xxx

                                      <samp style="color: red;"><br/>Temps: 00:00:00</samp>
                                      
                                                    <input type="radio" name="job" value="Design">
                                                    
                                                   
                                    </div>
                                     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6 margattente pull-right" style="">
                                               <input type='button' class='btn  btn-success pull-right' style="margin-left: 2.5px;"  name='charger' value='charger' />
                                               <input type='button' class='btn   btn-danger pull-right' style="margin-right: 2.5px; " name='rediriger' value='rediriger' />
                                            </div>
                                  </div>
                                  <?php } ?>

                                </div>
                                </div>

                                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 infopch1" style=" margin: 0;padding: 0;">
                                      <div class="titreinfopch" style=" background-color: rgb(46,46,46);  margin: 0;padding: 0;">
                                      <p class="titre" style=" max-width: 280px;">Information sur le point</p>
                                      </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infopch" style=" background-color: rgb(46,46,46); color: #ffffff; ">
                                      <div style="position: relative;left: 10px;">
                                      <p><div style="font-size: 23px;"> En attente</div>
                                          Total : 6<br/>
                                          Camion 2 Bainne : 1<br/>
                                          Camion 12 roue : 4<br/>
                                          Camion R-50 : 1</p>
                                      </div>
                                      <div style="position: relative;left: 10px;">
                                      <p><div style="font-size: 23px;"> Charger</div>
                                          Total : 52<br/>
                                          Camion 2 Bainne : 14<br/>
                                          Camion 12 roue : 32<br/>
                                          Camion R-50 : 16</p>
                                      </div>
                                      
                                </div>
                                </div>
                                 <div class="container col-xs-2 objectifcphone" style="top: 30px button: 30px; display: none;">
                                        <h5 class="objectif">Objectif</h5>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="progress blue progressb">
                                                    <span class="progress-left">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <div class="progress-value">90%</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                              
                                </div>
                               


                              </div>








                                <div class="tab-pane" id="point2">
                                    <h4 class="info-text">What type of room would you want? </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
                                                    <input type="radio" name="job" value="Design">
                                                    <div class="icon">
                                                        <i class="material-icons">weekend</i>
                                                    </div>
                                                    <h6>Single</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                                    <input type="radio" name="job" value="Code">
                                                    <div class="icon">
                                                        <i class="material-icons">home</i>
                                                    </div>
                                                    <h6>Family</h6>
                                                </div>
                                            </div>
                        <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
                                                    <input type="radio" name="job" value="Code">
                                                    <div class="icon">
                                                        <i class="material-icons">business</i>
                                                    </div>
                                                    <h6>Business</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                                <div class="tab-pane" id="point3">
                                    <div class="row">
                                        <h4 class="info-text"> Drop us a small description.</h4>
                                        <div class="col-sm-6 col-sm-offset-1">
                                          <div class="form-group">
                                                <label>Room description</label>
                                                <textarea class="form-control" placeholder="" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                                <label class="control-label">Example</label>
                                                <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>





                            
                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
       


     


 
</body>
</html>