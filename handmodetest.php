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
    <link href="css/newtest.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.ico"/>
	
	<style>
	#portfolio{
	text-align:center;color:#fff;background-image:url(img/handmode.jpg);background-repeat:no-repeat; background-size:cover;
	background-attachment:scroll;background-position:center center;
    }
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
						$('#normal1').click(function(){
							var a= new XMLHttpRequest();
							$('#normal1').css('display','none');
							$('#On1').css('display','block');
							$('#Off1').css('display','none');
							$('#normal1').removeClass('on');
							$('#On1').addClass('on');
							$('#Off1').removeClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "livingroomlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
				
				$(document).ready(function() {
						$('#On1').click(function(){
							var a= new XMLHttpRequest();
							$('#On1').css('display','none');
							$('#Off1').css('display','block');
							$('#normal').css('display','none');
							$('#On1').removeClass('on');
							$('#normal1').removeClass('on');
							$('#Off1').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "livingroomlightsoff.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#Off1').click(function(){
							var a= new XMLHttpRequest();
							$('#Off1').css('display','none');
							$('#On1').css('display','block');
							$('#normal').css('display','none');
							$('#normal1').removeClass('on');
							$('#Off1').removeClass('on');
							$('#On1').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "livingroomlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});	
					
			    $(document).ready(function() {
						$('#normal2').click(function(){
							var a= new XMLHttpRequest();
							$('#normal2').css('display','none');
							$('#On2').css('display','block');
							$('#Off2').css('display','none');
							$('#normal2').removeClass('on');
							$('#On2').addClass('on');
							$('#Off2').removeClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "bedroomlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#On2').click(function(){
							var a= new XMLHttpRequest();
							$('#On2').css('display','none');
							$('#Off2').css('display','block');
							$('#normal2').css('display','none');
							$('#On2').removeClass('on');
							$('#normal2').removeClass('on');
							$('#Off2').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "bedroomlightsoff.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#Off2').click(function(){
							var a= new XMLHttpRequest();
							$('#Off2').css('display','none');
							$('#On2').css('display','block');
							$('#normal2').css('display','none');
							$('#normal2').removeClass('on');
							$('#Off2').removeClass('on');
							$('#On2').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "bedroomlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
				
				$(document).ready(function() {
						$('#normal3').click(function(){
							var a= new XMLHttpRequest();
							$('#normal3').css('display','none');
							$('#On3').css('display','block');
							$('#Off3').css('display','none');
							$('#normal3').removeClass('on');
							$('#On3').addClass('on');
							$('#Off3').removeClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "toiletlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#On3').click(function(){
							var a= new XMLHttpRequest();
							$('#On3').css('display','none');
							$('#Off3').css('display','block');
							$('#normal3').css('display','none');
							$('#On3').removeClass('on');
							$('#normal3').removeClass('on');
							$('#Off3').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "toiletlightsoff.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#Off3').click(function(){
							var a= new XMLHttpRequest();
							$('#Off3').css('display','none');
							$('#On3').css('display','block');
							$('#normal3').css('display','none');
							$('#normal3').removeClass('on');
							$('#Off3').removeClass('on');
							$('#On3').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "toiletlightson.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
				
				$(document).ready(function() {
						$('#normal4').click(function(){
							var a= new XMLHttpRequest();
							$('#normal4').css('display','none');
							$('#On4').css('display','block');
							$('#Off4').css('display','none');
							$('#normal4').removeClass('on');
							$('#On4').addClass('on');
							$('#Off4').removeClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "fanon.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#On4').click(function(){
							var a= new XMLHttpRequest();
							$('#On4').css('display','none');
							$('#Off4').css('display','block');
							$('#normal4').css('display','none');
							$('#On4').removeClass('on');
							$('#normal4').removeClass('on');
							$('#Off4').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "fanoff.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#Off4').click(function(){
							var a= new XMLHttpRequest();
							$('#Off4').css('display','none');
							$('#On4').css('display','block');
							$('#normal4').css('display','none');
							$('#normal4').removeClass('on');
							$('#Off4').removeClass('on');
							$('#On4').addClass('on');
							
							$('#Off5').css('display','none');
							$('#Off5').removeClass('on');
							$('#On5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').css('display','block');
							$('#normal5').addClass('on');
							a.open("GET", "fanon.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
				
				$(document).ready(function() {
						$('#normal5').click(function(){
							var a= new XMLHttpRequest();
							$('#normal5').css('display','none');
							$('#On5').css('display','block');
							$('#Off5').css('display','none');
							$('#normal5').removeClass('on');
							$('#On5').addClass('on');
							$('#Off5').removeClass('on');
							
							$('#normal1').css('display','none');
							$('#On1').css('display','block');
							$('#Off1').css('display','none');
							$('#normal1').removeClass('on');
							$('#On1').addClass('on');
							$('#Off1').removeClass('on');
							
							$('#normal2').css('display','none');
							$('#On2').css('display','block');
							$('#Off2').css('display','none');
							$('#normal2').removeClass('on');
							$('#On2').addClass('on');
							$('#Off2').removeClass('on');
							
							$('#normal3').css('display','none');
							$('#On3').css('display','block');
							$('#Off3').css('display','none');
							$('#normal3').removeClass('on');
							$('#On3').addClass('on');
							$('#Off3').removeClass('on');
							
							$('#normal4').css('display','none');
							$('#On4').css('display','block');
							$('#Off4').css('display','none');
							$('#normal4').removeClass('on');
							$('#On4').addClass('on');
							$('#Off4').removeClass('on');
							
							a.open("GET", "allon.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#On5').click(function(){
							var a= new XMLHttpRequest();
							$('#On5').css('display','none');
							$('#Off5').css('display','block');
							$('#normal5').css('display','none');
							$('#On5').removeClass('on');
							$('#normal5').removeClass('on');
							$('#Off5').addClass('on');
							
							$('#On1').css('display','none');
							$('#Off1').css('display','block');
							$('#normal1').css('display','none');
							$('#On1').removeClass('on');
							$('#normal1').removeClass('on');
							$('#Off1').addClass('on');
							
							$('#On2').css('display','none');
							$('#Off2').css('display','block');
							$('#normal2').css('display','none');
							$('#On2').removeClass('on');
							$('#normal2').removeClass('on');
							$('#Off2').addClass('on');
							
							$('#On3').css('display','none');
							$('#Off3').css('display','block');
							$('#normal3').css('display','none');
							$('#On3').removeClass('on');
							$('#normal3').removeClass('on');
							$('#Off3').addClass('on');
							
							$('#On4').css('display','none');
							$('#Off4').css('display','block');
							$('#normal4').css('display','none');
							$('#On4').removeClass('on');
							$('#normal4').removeClass('on');
							$('#Off4').addClass('on');
							
							a.open("GET", "alloff.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
					
				$(document).ready(function() {
						$('#Off5').click(function(){
							var a= new XMLHttpRequest();
							$('#Off5').css('display','none');
							$('#On5').css('display','block');
							$('#normal5').css('display','none');
							$('#normal5').removeClass('on');
							$('#Off5').removeClass('on');
							$('#On5').addClass('on');
							
							$('#normal1').css('display','none');
							$('#On1').css('display','block');
							$('#Off1').css('display','none');
							$('#normal1').removeClass('on');
							$('#On1').addClass('on');
							$('#Off1').removeClass('on');
							
							$('#normal2').css('display','none');
							$('#On2').css('display','block');
							$('#Off2').css('display','none');
							$('#normal2').removeClass('on');
							$('#On2').addClass('on');
							$('#Off2').removeClass('on');
							
							$('#normal3').css('display','none');
							$('#On3').css('display','block');
							$('#Off3').css('display','none');
							$('#normal3').removeClass('on');
							$('#On3').addClass('on');
							$('#Off3').removeClass('on');
							
							$('#normal4').css('display','none');
							$('#On4').css('display','block');
							$('#Off4').css('display','none');
							$('#normal4').removeClass('on');
							$('#On4').addClass('on');
							$('#Off4').removeClass('on');
							
							a.open("GET", "allon.php"); 
							a.onreadystatechange=function(){
								if(a.readyState==4){ 
									if(a.status ==200){
									} else alert ("http error"); 
								}
							}
							a.send();
						});
					});
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
					   background: linear-gradient(to left, #ff9999 0%, #ff0066  100%); -webkit-background-clip: 
					   text;-webkit-text-fill-color: transparent;line-height:22px;margin-bottom:25px;
					   font-family:'Droid Serif','Helvetica Neue',Helvetica,Arial,sans-serif">Hand Mode</h2></br>
            <br><h3 style="font-size:20px;font-style:italic;color:#ff0066;font-weight:bold; border-color:white; 
					   text-shadow:0px 0px 5px white; line-height:22px;margin-bottom:25px;
					   font-family:'Droid Serif','Helvetica Neue',Helvetica,Arial,sans-serif">This is the manual control panel of our system.</h3></br>
          </div>
        </div>
		
          <div class="col-md-15 col-sm-6 portfolio-item">
		  <a class="portfolio-link">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img id="normal1" class="img-fluid" src="img/testing.jpg" alt="" style="opacity:0.7">
              <img id="On1" class="img-fluid" src="img/testingon.jpg" alt="" style="display:none;opacity:0.7">
              <img id="Off1" class="img-fluid" src="img/testingoff.jpg" alt="" style="display:none;opacity:0.7">
            </a>            
          </div>
		  
          <div class="col-md-15 col-sm-6 portfolio-item">
		  <a class="portfolio-link">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img id="normal2" class="img-fluid" src="img/testing2.jpg" alt="" style="opacity:0.7">
              <img id="On2" class="img-fluid" src="img/testing2on.jpg" alt="" style="display:none;opacity:0.7">
              <img id="Off2" class="img-fluid" src="img/testing2off.jpg" alt="" style="display:none;opacity:0.7">
            </a>
          </div>
		  
          <div class="col-md-15 col-sm-6 portfolio-item">
          <a class="portfolio-link">
				<div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img id="normal3" class="img-fluid" src="img/testing3.jpg" alt="" style="opacity:0.7">
              <img id="On3" class="img-fluid" src="img/testing3on.jpg" alt="" style="display:none;opacity:0.7">
              <img id="Off3" class="img-fluid" src="img/testing3off.jpg" alt="" style="display:none;opacity:0.7">
            </a>
          </div>
		  
		  <div class="col-md-15 col-sm-6 portfolio-item">
          <a class="portfolio-link">
				<div class="portfolio-hover">               
              </div>
              <img id="normal4" class="img-fluid" src="img/testing4.jpg" alt="" style="opacity:0.7">
              <img id="On4" class="img-fluid" src="img/testing4on.jpg" alt="" style="display:none;opacity:0.7">
              <img id="Off4" class="img-fluid" src="img/testing4off.jpg" alt="" style="display:none;opacity:0.7">
            </a>
          </div>
		  
       
		  
		  <div class="col-md-15 col-sm-6 portfolio-item">
          <a class="portfolio-link">		  
			  <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img id="normal5" class="img-fluid" src="img/testing5.jpg" alt="" style="opacity:0.7">
              <img id="On5" class="img-fluid" src="img/testing5on.jpg" alt="" style="display:none;opacity:0.7">
              <img id="Off5" class="img-fluid" src="img/testing5off.jpg" alt="" style="display:none;opacity:0.7">
            </a>
          </div>
		  
	<br> <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          </div>
	
	<div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
			  </div>
	</br>
			    
	<br> <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          </div>
		  
		  <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
			  </div>
	</br>
			    
				
	<br> <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          </div>
		  
		  <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          </div>
	</br>
		  
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
