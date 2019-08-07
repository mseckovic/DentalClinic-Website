<?php // pocetak php koda
session_start(); // pocetak rada sesije 
//kraj php koda
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stomatološka Ordinacija Zubić</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements za internet explorer ako treba samo skunuti komentare-->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Stomatološka Ordinacija Zubić</p>
        <p class="pull-right"><i class="fa fa-ambulance"></i>Kontaktirajte nas!</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:150px;height: 100px;" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li> 
						<!-- <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">Our Hospital</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">News</a></li> 
                            <li><a href="#">Investors</a></li>
                        </ul>
                    </li> ako treba padajuci meni skinuti komentare -->
						<li><a href="services.php">Usluge</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li class="active"><a href="pricing.php">Zakazi termin</a></li>
                        <li><a href="contact.php">Kontakt</a></li>
                        <li>
                            <?php
                                if(isset($_SESSION['username'])){ // PROVERA DA LI POSTOJI USERNAME,DA LI JE KORISNIK REGISTROVAN ILI LOGOVAN NA SAT
                                    echo "Username: ".$_SESSION['username']." ". "<a href='logout.php'>Logout</a> ";//STAMPA USERNAME I PODATAK IZ SESIJE  //I LINK KA STRANICI LOGOUT GDE SE KORINIK MOZE IZLOGOVATI AKO ZELI   
                                }else{//AKO KORISNIK NIJE LOGOVAN ODNOSNO REGISTROVAN
                                    header("Location:login.html");//SALJE DA NA STANICU LOGIN.HTML GDE MORA DA POPUNI FORMU ZA LOGOVANJE 
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
	
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Zakazi termin</h2>
				<form action="zakazi.php" method="POST"> <!--FORMA ZA ZAKAZIVANJE PREGLEDA KOJA SALJE PODATKE  NA STRANICU ZAKAZI PREGLEDA-->
				    <label></label>
				</form>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">	 
		<div class="row"> 
							
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12"> 
			</div>
			
			
			
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Kontaktirajte nas!</h5>
					<address>
					<strong>Stomatološka ordinacija Zubić</strong><br>
						Brsjačka 20,Beograd<br>
					</address>
					<p>
						<i class="icon-phone"></i> 060 123-456 <br>
						<i class="icon-envelope-alt"></i> kontakt@zubic.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Linkovi</h5>
					<ul class="link-list">
						<li><a href="#">Usluge</a></li>
						<li><a href="#">Cenovnik</a></li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="#">Registracija</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Naše obećanje Vama</h5>
					<ul class="link-list">
						<li><a href="#">Higijena - Kontrola higijene je osnov za sigurnost naših pacijenata. U tom cilju, da bi Vas zaštitili, mi primenjujemo striktne procese sterilizacije. </a></li>
						<li><a href="#">Iskrenost – Zahvaljujemo Vam na poverenju što stalno koristite usluge naše ordinacije. </a></li>
						<li><a href="#">Uvažavanje – Mi znamo da je Vaše vreme vredno i Vi možete očekivati od nas da ćemo biti brzi. </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Saveti za higijenu</h5>
					<ul class="link-list">
						<li><a href="#">Zubni konac - je prvo sredstvo za higijenu međuzubnog prostora, a oni koji sadrže topljivi pirofosfat od 21% do 37% bolje sprečavaju nastanak zubnog kamenca u poređenju sa običnim.</a></li>
						<li><a href="#">Rastvori za ispiranje usta - pogodni su i za suzbijanje parodontnih bolesti. Utiču na smanjenje gingivitisa. </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Stomatološka ordinacija Zubić </span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>