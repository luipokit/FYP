<!DOCTYPE html>
<html lang="en">
	  
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GIB3-Smart Home System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/forautomode.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.ico"/>
	
	<style>
	#portfolio{
	text-align:center;color:#fff;background-image:url(img/automode.jpg);background-repeat:no-repeat; background-size:cover;
	background-attachment:scroll;background-position:center center;
    }
	</style>
	
		<style>
	.switch {
	  position: relative;
	  display: inline-block;
	  width: 60px;
	  height: 34px;
	}

	.switch input {display:none;}

	.slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #ccc;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	.slider:before {
	  position: absolute;
	  content: "";
	  height: 26px;
	  width: 26px;
	  left: 4px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	input:checked + .slider {
	  background-color: #2196F3;
	}

	input:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
	  -webkit-transform: translateX(26px);
	  -ms-transform: translateX(26px);
	  transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
	  border-radius: 34px;
	}

	.slider.round:before {
	  border-radius: 50%;
	}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
	function myFunction() {
			  // Get the checkbox
			  var checkBox = document.getElementById("onoff");
			  // If the checkbox is checked, display the output text
			  if (checkBox.checked == true){
				var a= new XMLHttpRequest();
				a.open("GET", "auto_mode_on.php"); 
				a.onreadystatechange=function(){
					if(a.readyState==4){ 
						if(a.status ==200){
						} else alert ("http error"); 
					}
				}
							a.send();
			  } 
			 else {
				var a= new XMLHttpRequest();
				a.open("GET", "auto_mode_off.php");
				a.onreadystatechange=function(){
					if(a.readyState==4){
						if(a.status ==200){
						} else alert ("http error"); 
					} 
				}
							a.send();
			  }
			}
	</script>
  </head>
  
  <body id="page-top">

      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">GIB3-Smart Home System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#services">About our project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Guide</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
	
	<!-- Portfolio Grid -->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <br><h2 style="display:inline;font-size:55px;font-style:italic;font-weight:bold;text-shadow:2px 2px white;
					   background: linear-gradient(to left, #00ccff 0%, #99c2ff 100%); -webkit-background-clip: 
					   text;-webkit-text-fill-color: transparent;line-height:22px;margin-bottom:25px;
					   font-family:'Droid Serif','Helvetica Neue',Helvetica,Arial,sans-serif">Auto Mode</h2></br>
            <br><h3 style="font-size:25px;vertical-align:middle">
				<label class="switch" style="vertical-align:middle;">
				<input type="checkbox" id="onoff" onclick="myFunction()">
				<span class="slider round"></span> 
				</label> Switch to turn the mode On/Off</h3></br>
			<h4 style="font-size:20px;font-style:italic;color:#0066cc;font-weight:bold; border-color:white; 
					   text-shadow:0px 0px 3.5px white; line-height:22px;margin-bottom:25px;
					   font-family:'Droid Serif','Helvetica Neue',Helvetica,Arial,sans-serif">Set conditions so that devices turn ON/OFF automatically and accordingly.</h4></br>
          </div>
        </div>
		
		<div class="col-md-12 col-sm-6 portfolio-item">
		  <div class="btn-group">
		  <button class="btn btn-secondary btn-lg dropdown-toggle" 
		  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color:none;background:linear-gradient(to bottom, #3333cc 0%, #6699ff 100%);width: 250px	
		  ">Select a device	
		  </button>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="livingroomlightsettingtest.php" style="border-color:black">Living Room Lights</a>
			<a class="dropdown-item" href="bedroomlightsettingtest.php" style="border-color:black">Bedroom Lights</a>
			<a class="dropdown-item" href="toiletlightsettingtest.php" style="border-color:black">Toilet Lights</a>
			<a class="dropdown-item" href="fansettingtest.php" style="border-color:black">Living Room Fan</a>
			</div>
		</div>
        </div>
		
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
		<div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>
        <div class="col-md-12 col-sm-6 portfolio-item"></div>

      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>

		