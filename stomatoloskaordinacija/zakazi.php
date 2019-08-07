<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stomatološka Ordinacija Zubić</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
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
                <div class="navbar-header"  style="margin-bottom:55px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png"style="width:150px;height: 100px;" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                        <li><a href="index.php">Pocetna</a></li> 
				    <!--<li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Our Hospital</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">News</a></li> 
                                <li><a href="#">Investors</a></li>
                            </ul> 
                        </li> Ako bude trebalo -->
						<li class="active"><a href="services.php">Usluge</a></li>
                        <li><a href="portfolio.php">Zaposleni</a></li>
                        
                        <li><a href="contact.php">Kontakt</a></li>
                        <li>
                        <?php // pocetak php koda
                            session_start();
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
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Usluge</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
			<div class="row"> 
				<div class="col-md-12">
					<div class="about-logo">
						<h3></h3>
						<p>Centar za savremenu stomatologiju i implantologiju Ordinacija Zubić pruža kvalitetne stomatološke usluge iz domena zubne implantologije, oralne hirurgije, protetike, paradontologije,  ortodoncije, estetske i rekonstruktivne stomatologije, primenom najsavremenijih materijala, koji prate moderne evropske standarde. 
                        Uz savremenu dijagnostiku, dobićete dobar savet kako da na najbolji način rešite svoj zdravstveni ili estetski problem u skladu sa Vašim zahtevima i Vašim mogućnostima.</p>
					</div>  
				</div>
			</div>
						 
						    <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in">
                    <h3>Zubni implanti</h3>
                    <p>Zubni implanti su vrhunac napretka stomatologije. 
                    Zahvaljujući napredovanju tehnologije zubni implanti postaju sve zastupljeniji u stomatološkoj praksi. </p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Oralna Hirurgija</h3>
                    <p>Najbolji način zamene izgubljenih zuba. 
                   Ordinacija Zubić omogućava maksimalni estetski i funkcionalni komfor i najzahtevnijim pacijentima!</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>Parodontologija</h3>
                    <p>Parodontopatija predstavlja uznapredovalo hronično zapaljenje gingive (desni ). 
                    Ona pripada najčešćim oboljenjima uopšte.</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

       
        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>Estetska stomatologija</h3>
                    <p>Postoji nekoliko jednostavnih i isplativih načina da dobijete zdrav i blistavo beli osmeh sa kojim ćete izgledati mlađe i lepše, sebi i drugima.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>Porodična stomatologija</h3>
                    <p>Brinućemo podjednako o vašoj celoj porodici, od klinaca do penzionera. Porodična stomatologija je naš zaštitni znak!</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-html5"></i>
                <div class="info-blocks-in">
                    <h3>Ortopan</h3>
                    <p>Ortopan  ili ortopantomograf predstavlja ( veliki) panoramski snimak obe vilice, a sluzi kao pomocno dijagnosticko sredstvo.</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->
        <?php 
            
            include("klijent_class.php");
            $username = $_SESSION['username'];
            $doktor = $_POST['doktor'];
            $lokacija = $_POST['lokacija'];
            $datum = $_POST['datum'];
            $klijent = new Klijent();
            $klijent->zakaziTermin($username,$doktor,$lokacija,$datum);
            
            
        ?>
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