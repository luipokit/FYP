<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bedroom Light Settings</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/bedroomform.css" >
		<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="Conditions/lightsetting/css/bedroomtest.css" rel="stylesheet">
		
    </head>
	
	<script type="text/javascript">
	function checkInp()
	{
	  var x=document.forms["myForm"]["lightintensity"].value;
	  var a=document.forms["myForm"]["Motion"].value;
	  if (a!="Y" && a!="X") 
	  {
		alert("Must input Y or X for motion sensor");
		return false;
	  }
	  if (isNaN(x) && x!="X") 
	  {
		alert("Must input numbers or X for light intensity");
		return false;
	  }
	}
	</script>
	
    <body>
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
              <a class="nav-link js-scroll-trigger" href="index.php#services" style="font-weight:bold">About our project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#portfolio" style="font-weight:bold">Guide</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form name="myForm" method="post" action="bedroomlightconnect.php" onsubmit="return checkInp()" class="montform" id="reused_form" >
						<p class="Motion" align="center" style="color:white;font-size:25px;font-weight:bold"> <u>Use of Motion Sensor</u>
                            <p align="center" style="color:white;font-size:20px"> Please type <span class="name"><u>"Y" for Yes or "X" for No</u></span></p>
							<input name="Motion" type="text" class="feedback-input" required placeholder="Y or X" id="Motion"/>
                        </p>
                        
                       <br><p class="Light-Intensity" align="center" style="color:white;font-size:25px;font-weight:bold"><u> Use of Light Sensor</u>
							<p align="center" style="color:white;font-size:20px"> Please enter a <span class="name"><u>POSITIVE NUMBER or "X"</u></span> if you don't need this function</p>
							<input name="lightintensity" type="text" class="feedback-input" required placeholder="Default=350" id="Light-Intensity"/>
                        </p></br>
                        <div class="submit">
                            <button type="submit" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
			
        </div>
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