<?php
session_start();
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
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
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
                <div class="navbar-header" style="margin-bottom:55px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:150px;height: 100px;" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Pocetna</a></li> 
				    <!--<li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Our Hospital</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">News</a></li> 
                                <li><a href="#">Investors</a></li>
                            </ul> 
                        </li> Ako bude trebalo -->
						<li><a href="services.php">Usluge</a></li>
                        <li><a href="portfolio.php">Osoblje</a></li>
                       
                        <li><a href="contact.php">Kontakt</a></li>
                        <li>
                        <?php // pocetak php koda
                            
                            if(isset($_SESSION['username'])){
                                    echo "<p style='margin-top:10px;'>Username:".$_SESSION['username']." &nbsp "."<a href='logout.php'>Logout</a></p>";  
                            //LINK KA STRANICI LOGOUT GDE SE KORINIK MOZE IZLOGOVATI AKO ZELI   
                            }else{//AKO KORISNIK NIJE LOGOVAN ODNOSNO REGISTROVAN
                                echo "<a href='registracija.html'>Registacija</a>";//Preko linka koji vodi na stranicu registracija.html gde korisnik unosi dodatke u formu za egistraciju 
                            }
                        //kraj php koda    
                        ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.jpg" alt="slider1" />
                <div class="flex-caption">
                    <h3>Najjeftinije samo kod nas!</h3> 
					<p>Veoma povoljne cene,samo za vas!</p> 
					 
                </div>
              </li>
              <li>
                <img src="img/slides/2.jpg" alt="slider2" />
                <div class="flex-caption">
                    <h3>Najbolji uslovi samo kod nas!</h3> 
					<p>Brinemo se za Vašu udobnost!</p> 
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section> 
	<section id="call-to-action-2" style="margin-bottom:-150px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-9">
					<h3>Dobrodošli u Stomatološku Ordinaciju Zubić</h3>
					<p>Jedni smo od osnivača moderne implantologije, trudimo se da se razlikujemo i izdvojimo po kvalitetu i dobrom glasu koji nas je uvek pratio kada se priča o ozbiljnoj stomatologiji. 
						Za nas nema nerešivih slučajeva, polovičnih rešenja, nema kompromisa, naši pacijenti su maksimalno zašticeni, naša statistika uspeha je viša od svetske, naši radovi su visoko kvalitetni i visoko estetski, NAŠ OSMEH SE PREPOZNAJE, NAŠ OSMEH SE PAMTI! Jer, SAVRŠENSTVO JE NAŠ STANDARD!</p>
				</div>
			</div>
		</div>
	</section>
	
	<!--<section id="content">
	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Specialties</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br/>
			</div>
		</div>
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix"> 
		<div class="col-md-3 text-center">
		<span class="icons c1"><i class="fa fa-ambulance"></i></span> <div class="box-area">
		<h3>General Check Up</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c2"><i class="fa fa-users"></i></span> <div class="box-area">
		<h3>Dentistry</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
		<h3>Dermatology</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
		<h3>Dietetics &  Nutrition</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
		</div></div>
		</div></div>
		</div> 
	 

	</div>
	</section>-->
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 style="font-weight:bold;">O NAMA</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>U Ordinaciji Zubić lekari su uvek raspoloženi da prime pacijenta koji je uplašen ili nervozan zbog predstojećeg tretmana. 
							Najveći broj briga može biti prevaziđeno razgovorom o strahovima sa stomatologom.</p>

						<ul>
							<li>mi slušamo da bi mogli do kaja da razumemo Vaš problem</li>
							<li>mi objašnjavamo tretman veoma pažljivo</li>
							<li>mi odgovaramo na sva Vaša pitanja</li>
							<li>mi biramo opciju tretmana koji je mogući kod Vas</li>
							<li>mi Vam dozoljavamo da izaberete mogućnosti koje su Vama dostupne</li>
						</ul>
						<a href="#" class="btn btn-primary">Saznaj više</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>	  
	
	<div class="about home-about">
				<div class="container">
						
						<div class="row">
							<div class="col-md-4"  style="margin-left:230px;">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Zasto mi?</span></h3>
								</div>
								<p>
								Kada Vam nudimo tretman, mi uzimamo u obzir Vaše želje. 
								Objašnjavamo Vam koje Vam mogućnosti stoje na raspolaganju, njihovu cenu, tako da možete napraviti izbor. 
								Uvek ćete znati šta radimo. 
								U svakom trenutku, ako imate neko pitanje ili niste sigurni šta se događa, molimo Vas da pitate nekog od članova našeg tima koji će biti srećni da Vam sve objasne.
								</p>
							</div>
							
							
							<div class="col-md-4" style="margin-left:50px;">
								<div class="info-box">
								  <h3><span class="fa fa-clock-o"></span> Radno vreme: </h3>
								  <hr>
								  <h4>Termini:</h4>
								  <dl>
									<dt>Ponedeljak - Petak:</dt>
									<dd>08:00 - 21:00</dd>
								  </dl>
								  <dl>
									<dt>Subota - Nedelja:</dt>
									<dd>08:00 - 17:00</dd>
								  </dl> 
								  <hr>
								  <h4>Hitna služba:</h4>
								  <dl>
									<dt>Ponedeljak - Petak:</dt>
									<dd>07:00-23:00</dd>
								  </dl>
								</div>
							</div>
							
						</div>
						
						 						
						 
						<br>
					 
					  </div>
						
					</div>
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
						<li><a href="services.php">Usluge</a></li>
						<li><a href="portfolio.php">Osoblje</a></li>
						<li><a href="contact.php">Kontakt</a></li>
						<li><a href="registracija.html">Registracija</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Naše obećanje Vama</h5>
					<ul class="link-list">
						<li>Higijena - Kontrola higijene je osnov za sigurnost naših pacijenata. U tom cilju, da bi Vas zaštitili, mi primenjujemo striktne procese sterilizacije. </li>
						<li>Iskrenost – Zahvaljujemo Vam na poverenju što stalno koristite usluge naše ordinacije. </li>
						<li>Uvažavanje – Mi znamo da je Vaše vreme vredno i Vi možete očekivati od nas da ćemo biti brzi. </li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Saveti za higijenu</h5>
					<ul class="link-list">
						<li>Zubni konac - je prvo sredstvo za higijenu međuzubnog prostora, a oni koji sadrže topljivi pirofosfat od 21% do 37% bolje sprečavaju nastanak zubnog kamenca u poređenju sa običnim.</li>
						<li>Rastvori za ispiranje usta - pogodni su i za suzbijanje parodontnih bolesti. Utiču na smanjenje gingivitisa. </li>
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
						<li><a href="https://www.facebook.com/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.pinterest.com/" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="https://plus.google.com/" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
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
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>