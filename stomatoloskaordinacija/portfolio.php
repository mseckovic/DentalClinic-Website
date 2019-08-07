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
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/style1.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 
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
                <div class="navbar-header" style="margin-bottom:55px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png"style="width:150px;height: 100px;"alt="logo"/></a>
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
				<h2 class="pageTitle">Zaposleni</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
        <div class="row"> 
            <div class="col-md-12">
				<div class="about-logo">
				    <h3>Upoznajte naš stručni tim</h3>
				        <p>Pratimo nove tokove u stomatologiji i raspolažemo sa proverenim i najkvalitetnijim stomatološkim materijalima. Uspešnu i brzu sanaciju uz pomoć savremene dijagnostike sprovodi uigran tim u saradnji sa eminentnim stručnjacima za pojedine oblasti kao što su ortodoncija, implantologija, hirurgija…</p>
                        <p>Stomatološke intervencije su bezbolne, vrše se u lokalnoj anesteziji. Na lični zahtev pacijenta, a uz asistenciju anesteziologa, intervencije je moguće raditi u sedaciji – polusvesnom stanju.</p>
				</div>  
            </div>
        </div> 				
	</div>
	</section>	
    <!-- Start Gallery 1-2 -->
    <section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">NAŠ TIM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Maša Gajević</h4>
                                    <p class="card-text">Diplomirala na Stomatološkom fakultetu u Beogradu 2007. godine.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Maša Gajević</h4>
                                    <p class="card-text">Nakon osnovnih studija 2012 upisala specijalističke studije iz stomatološke protetike.
Član je Srpskog lekarskog društva i Stomatološke komore Srbije
Svoje znanje u vidu kontinuirane edukacije usavršavala je u vodećim svetskim i domaćim edukativnim centrima ..</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/?lang=en">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/en/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                     <h4 class="card-title">Nikola Nikolić</h4>
                                    <p class="card-text">Diplomiralo na Stomatološkom fakultetu u Beogradu. 2009.godine</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Nikola Nikolić</h4>
                                    <p class="card-text">Svojim angažovanjem, savesnim ponašanjem i brigom o pacijentima doprineo je da veliki broj pacijenata pokloni poverenje upravo našoj stomatološkoj ordinaciji.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/?lang=en">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/en/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                   <h4 class="card-title">Ana Rančić</h4>
                                    <p class="card-text">Zubotehničku školu smer stomatološka sestra tehničar diplomirala je u Beogradu.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                     <h4 class="card-title">Ana Rancic</h4>
                                    <p class="card-text">Njeno znanje pretočeno sada već u dugogodišnje iskustvo i praksu nam je neprocenjivo pri savladavanju svakodnevnih izazova. Koliko je nama velika pomoć i podrška toliko svakako i pacijentima koji se uz nju osećaju sigurnije i hrabrije.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/?lang=en">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/en/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            
           

        </div>
    </div>
</section>
    <!--// End Gallery 1-2 -->  
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
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
 
</body>
</html>