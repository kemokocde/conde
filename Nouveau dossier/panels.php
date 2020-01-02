<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<script src="vuedsm.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="vuedsm.css">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

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
 .scrollbarch-primary::-webkit-scrollbar {
width: 12px;
height: 5px;
background-color: transparent; }

.scrollbarch-primary::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #4285F4; }
.point{
  min-width: 85px;
 }

  
}
    </style>
    <script type="text/javascript">
      !function(e){
  "use strict";
  var t={};
  e(document).ready(function(){
    return e("#area-chartist-chart").length&&t.area(),
    e("#bar-chartist-chart").length&&t.bar(),
    e("#pie-bar-chartist-chart").length&&t.pie(),
e("#scatter-chartist-chart").length&&t.scatter(),
e("#smil-animation-chartist-chart").length&&t.smilAnimation(),
e("#smil-animation-index-chartist-chart").length&&t.smilAnimationIndex(),
e("#stacked-bar-chartist-chart").length&&t.stackedBar(),
e("#svg-animation-chartist-chart").length&&t.svgAnimation(),!1}),
  t={pie:function(){var e={series:[3,5,8,2]},t=function(e,t){return e+t};return new Chartist.Pie("#pie-bar-chartist-chart",e,{labelInterpolationFnc:function(r){return Math.round(r/e.series.reduce(t)*100)+"%"}}),!1}
  }}(jQuery);
     $(document).ready(function () { 

    
});
    

</script>
</head>
<body>
	<div class="main-panel">
		<div class="content">
			<div class="page-inner">
				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Nav Pills (Horizontal Tabs)</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content mt-2 mb-3" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <!--en cour de chargement-->
                  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 " style="height: 280px; margin: 0;padding: 0; background-color: rgb(32,41,64); border-radius: 20px 20px 0px 0px;">

                    <div  class="col-xs-12 " style="border-bottom: ridge white 2px;"><div class="titreencourdc">En cours de chargement</div></div>

                    <div class="col-xs-12  encourdc scrollbar scrollbar-primary" style="">
                      <div class="encourdc1" style="top: 30px;">
                                             <?php for ($i=0; $i <$j ; $i++) { ?>
                        <div class="col-sm-2 encourdc2" style="">
                          <h3>chargeuge <?php echo $i+1; ?></h3>
                          <div>Camion x<samp> <br/>depuis : 00:00:00</samp></div>
                          <div class="pull-left">
                            <input type='button' class='btn  btn-success ' name='terminer' value='terminer' />
                            <input type='button' class='btn   btn-danger ' name='anuler' value='anuler' />
                          </div>
                        </div>
                                        <?php } ?>
                        <div class="col-sm-2 encourdc2" style="">
                          <h3>chargeuge <?php echo $i+1; ?></h3>
                          <div>
                            <div>Libre <samp> <br/>depuis : 00:00:00</samp>
                            </div>
                            <input name="name" type="text" class="form-control" style="max-width: 160px; ">
                          </div>
                          <div class="pull-left">
                            <input type='button' class='btn  btn-success ' name='Ajouter' value='Ajouter' />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>






                    <!--Graphe % chargement part type sur le point-->
                 <div class="container col-xs-2 col-sm-3 col-md-3 col-lg-2 graph" style="padding: 0;height: 200px;">
                  <h4 class="text-center" style="margin :0;padding: 0;">Evolution</h4>
                  <div style="">
                  <div id="pie-bar-chartist-chart" class="chartist-chart-pie" style="margin :0;padding: 0;">
                  </div>
                  <div class="text-center" style="background-color: rgb(32,41,64);clear: both;">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="color: #d70206;"><i class="glyphicon glyphicon-certificate"></i>Series A</div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="color: #f05b4f;"><i class="glyphicon glyphicon-certificate"></i>Series B</div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="color: #f4c63d;"><i class="glyphicon glyphicon-certificate"></i>Series C</div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="color: #d17905;"><i class="glyphicon glyphicon-certificate"></i>Series C</div>
                    </div>
                  </div>
                 </div>





                  <!--En attente -->
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 attente1" style="background-color:rgb(32,41,64);margin: 0;padding: 0; border-radius: 20px 20px 0px 0px; ">
                    <div class=" " style="position: relative; border-bottom: ridge white 2px; "><div class="titreattente" style="" >Attente</div> </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 scrollbary scrollbar-primary attente" style="margin: 0;padding: 0; ">
                      <?php for ($k=0; $k <10 ; $k++) { ?>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="padding: 10px;">
                        <div class="col-xs-4 col-sm-4 col-md-5 col-lg-6 margattente" style="margin: 0;padding: 0;">camion xxx
                          <samp style="color: red;"><br/>Temps: 00:00:00</samp>
                            <input type="radio" name="job" value="Design">
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6 margattente pull-right" style="margin: 0;padding: 0;">
                          <input type='button' class='btn  btn-success pull-right' style="margin-left: 2.5px;"  name='charger' value='charger' />
                          <input type='button' class='btn   btn-danger pull-right' style="margin-right: 2.5px; " name='rediriger' value='rediriger' />
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>

                  <!--Information complet activité point -->
                  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 infopch1" style="background-color: rgb(32,41,64); margin: 0;padding: 0; border-radius: 20px 20px 0px 0px;">
                    <div class="" style="border-bottom: ridge white 2px;"><div class="titreinfopch" style="" > Information sur le point</div></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infopch" style="color: #ffffff; ">
                      <div style="position: relative;left: 10px; width: 80%; ">
                        <p><div style="font-size: 23px;"> En attente</div>
                          Total : 6<br/>
                          Camion 2 Bainne : 1<br/>
                          Camion 12 roue : 4<br/>
                          Camion R-50 : 1
                        </p>
                      </div>
                      <div style="position: relative;left: 10px;width: 80%;">
                        <p><div style="font-size: 23px;"> Charger</div>
                          Total : 52<br/>
                          Camion 2 Bainne : 14<br/>
                          Camion 12 roue : 32<br/>
                          Camion R-50 : 16
                        </p>
                      </div>
                    </div>
                  </div>                
         
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
										</p>
									</div>
									<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
										<p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

										<p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="plugin/chartist.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	
</body>
</html>