
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Nziv</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
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
        <p class="pull-left hidden-xs">Medico Healthcare Hospital</p>
        <p class="pull-right"><i class="fa fa-ambulance"></i>Emergency No. (+001) 123-456-789</p>
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
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png"style="width:150px;height: 100px;" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
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
						<li><a href="services.php">Usluge</a></li>
                        <li class="active"><a href="portfolio.php">Zaposleni</a></li>
                        
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
	    <?php 
            include("klijent_class.php"); // pozivanje stranice klijent_class.php,sad mozemo da pozivamo sve funkcije i koje su u njoj definisane 
            $ime = $_POST['fname']; // uzimamo ime iz html forme koja se nalazi na registracija.html
            $prezime = $_POST['lname'];//uzimamo prezime iz html forme koja se nalazi na registracija.html
            $pol = $_POST['pol'];//uzimamo pol iz html koji je kao radio(dugme moze biti M ili Z) kojie se nalazi na registracija.html
            $datum = $_POST['datum'];//uzimamo datum iz html forme iz html forme koja se nalazi  registracija.html
            $email = $_POST['email'];//uzimamo email
            $username = $_POST['username'];//uzimamo username 
            $password = $_POST['password'];//uzimamo passowrd
            $conf_pass= $_POST['conf_password'];//uzimamo potvrdi passowrd
            $klijent = new Klijent();//pravimo novi konstruktor klase Klijient koja se nalazi u klijent_class.php 
            $klijent->registracija($ime,$prezime,$pol,$email,$username,$password,$conf_pass,$datum);//preko konstruktora koji se nalazi u pormenjivoj $klijent mozemo pristupiti svim njenim parametrima
        ?>
	
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