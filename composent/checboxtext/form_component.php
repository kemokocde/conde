<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/stylee.css" rel="stylesheet">
</head>

<body>

              
              <div class="row mt">
                <div class="col-sm-6 text-center" >
                  <input class="inp" type="checkbox" checked="" data-toggle="switch" />
                </div>
                <div class="col-sm-6 text-center">
                  <input type="checkbox" data-toggle="switch" />
                </div>
              </div>
            


  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
 
<script type="text/javascript">    
  $(document).ready(function () {
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

</body>

</html>
