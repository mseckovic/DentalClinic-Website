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
                  <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:150px;height: 100px;" alt="logo"/></a>
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
                        <li><a href="portfolio.php">Zaposleni</a></li>
                        
                        <li class="active"><a href="contact.php">Kontakt</a></li>
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
				<h2 class="pageTitle">Kontakt</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Do Zubića lako</h3>
									<p>Stomatološka ordinacija Zubić osnovana u Beogradu 2008.godine. Vlasnik Dr Aleksandar Tornjanski je član Komore privatnih doktora stomatologije od 1990. godine kao i član Akademije za estetsku stomatologiju, tako da je estetska stomatologija imperativ ordinacije. </p>
                                    	<p>Dugo godina uloženog truda, rada pre svega ljubavi u ovom poslu,uz spomoć našeg stručnog tima i vernih pacijenata otvorene su ordinacije na još dve lokacije u Nišu i Novom Sadu.Opremljene su po najvišim svetskim standardima. Predstavljamo spoj iskustva, mladosti i porodične tradicije.</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p>Rezervišite Vaš pregled online ili se vidimo na dataj adresi !</p>
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       <h3>Kontaktirajte nas</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.246203401782!2d20.500994915535202!3d44.796170879098625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7081e51de1d9%3A0x423b2da197c3a606!2z0JHRgNGB0ZjQsNGH0LrQsCAyMCwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1528734913978" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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