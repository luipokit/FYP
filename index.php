<!DOCTYPE html>
<html lang="en">
<?php

                $temp = exec('sudo python /Adafruit_Python_DHT/examples/datetime.py');
                echo "$temp";
                echo "\r\n";
                $temp1 = exec('sudo python /Adafruit_Python_DHT/examples/temperature.py');
                echo "$temp1";
                echo "\r\n";
                $temp2 = exec('sudo python /Adafruit_Python_DHT/examples/humidity.py');
                echo "$temp2";
?>  
				  
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
    <link href="css/agency.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.ico"/>

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
	
	
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our System!</div>
          <div class="intro-heading text-uppercase" style="stroke:black">Please select a mode to proceed.</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger1" href="handmodetest.php">Hand Mode</a>
		  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger2" href="automodetest.php">Auto Mode</a>
        </div>
      </div>
    </header>
<!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Our Project</h2>
            <h3 class="section-subheading text-muted">The Internet of Things (IoT) is the network of physical devices, home appliances and other items embedded with softwares, 
													  <br>sensors and connectivity which enables these objects to connect and exchange data. Our system is one of the implementations.</br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Environmental Protectection</h4>
            <p class="text-muted">We hope to reduce energy consumption through monitoring <br>our home devices whenever and whereever we are.</br></p>
          </div>
		  
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-female fa-stack-1x fa-inverse"></i>
			</span>
			<h4 class="service-heading">Home Assistant</h4>
            <p class="text-muted">We hope the system can help act as a home assistant,<br> controlling devices according to houseowner's special needs.</br></p>
          </div>
            </span>
            
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">More Comfortable Life</h4>
            <p class="text-muted">We hope to make people's lives more comfortable,<br> like enjoying air-condtioner immediately after a day of work.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Guide</h2>
            <h3 class="section-subheading text-muted">Here shows you the operations of this website.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/homepage.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Modes</h4>
              <p class="text-muted"><br>Hand Mode and Auto Mode provided,<br>choose the one that suits you.</br></br></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/newhandmode.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Hand Mode</h4>
              <p class="text-muted"><br>Here is the control panel of devices,<br> simply click the buttons to control them</br></br></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/newautomode.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Auto Mode</h4>
              <p class="text-muted"><br>Set conditions so that devices turn on/off automatically. You may turn this function off by clicking "Off".</br> </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/newautomode2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Auto Mode - Continue</h4>
              <p class="text-muted"><br>You may set conditions for devices separately. Choose one of the four devices to proceed.</br></br></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/fansettingpage.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Setting Conditions</h4>
              <p class="text-muted"><br>Here is the setting page of devices,<br> set conditions according as you like, then click submit.</br></br> </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/done.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Done</h4>
              <p class="text-muted"><br>The introduction on our system is finished. You are ready to go. <br>Hope you enjoy using our system!</br></br></p>
            </div>
          </div>
        </div>
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
