<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Serwis narciaski WEB-SKI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


        

    </head>
	
	
	
<header>
<div class="container no-gutters"> 
      <!-- Example row of columns -->
      <div class="row no-gutters">
	 <div class="col-md-12 logo">
		<img src="img/logo.png" alt="Obrazek_noclegi">	
		
	 </div>
	 </div>
  </div>
	
	 <!--komentarz>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


         <!--menu glowne-->
         <div id="navbar">
<div class="bg-dark container-fluid menu"> 
    <div class="container" style="padding-left: 0px;padding-right: 0px;font-size: 12px;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav" >
      <li><a href="http://localhost/sklep_narciarski/public_html/index.php">Strona Główna</a></li>

<!--Dropp menu-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Cennik
        </a>
        <div class="dropdown-menu dropstyle">
          <a class="dropdown-item dropstyle"  href="http://localhost/sklep_narciarski/public_html/cennikWypozyczen.php">Cennik wypożyczeń</a>
          <a class="dropdown-item dropstyle" href="http://localhost/sklep_narciarski/public_html/cennikSprzetu.php">Cennik serwisu sprzętu</a>
          <a class="dropdown-item dropstyle" href="http://localhost/sklep_narciarski/public_html/cennikLekcji.php">Cennik lekcji z instruktorem</a>
        </div>
      </li>
<!--Dropp end-->

      <li><a href="http://localhost/sklep_narciarski/public_html/kontakt.php">Kontakt</a></li>
      <li class="active"><a href="http://localhost/sklep_narciarski/public_html/sklep.php">Sklep</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/trasy.php">Trasy</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/instruktorzy.php">Instruktorzy</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/noclegi.php">Noclegi</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/restauracje.php">Restauracje</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/kameraonline.php">Kamera Online</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/sklep_narciarski/public_html/rejestracja.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="http://localhost/sklep_narciarski/public_html/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
</div>
</div>

         <!--koniec menu glownego-->
</header>
	
	  
	

	
<body>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row no-gutters">
		
      <div class="col-md-12 instruktor">		
		
        <div class="col-md-3">
       
            <form action="sklep.php" method="get">
              <button class="kategorie" style="background-color:white; border: solid grey 1px; width:100%;display: inline-block;padding: 10px 0px;"  name="Obuwie" type="submit" value="Obuwie">Obuwie</button>
              <button class="kategorie" style="background-color:white; border: solid grey 1px;border-top: solid grey 0px; width:100%;display: inline-block;padding: 10px 0px" name="Narty" type="submit" value="Narty">Narty</button>
              <button class="kategorie" style="background-color:white; border: solid grey 1px;border-top: solid grey 0px; width:100%;display: inline-block;padding: 10px 0px" name="Czapki" type="submit" value="Czapki">Czapki</button>
              <button class="kategorie" style="background-color:white; border: solid grey 1px;border-top: solid grey 0px; width:100%;display: inline-block;padding: 10px 0px" name="Spodnie" type="submit" value="Spodnie">Spodnie</button>
              <button class="kategorie" style="background-color:white; border: solid grey 1px;border-top: solid grey 0px; width:100%;display: inline-block;padding: 10px 0px" name="Kurtki" type="submit" value="Kurtki">Kurtki</button>
              <button class="kategorie" style="background-color:white; border: solid grey 1px;border-top: solid grey 0px; width:100%;display: inline-block;padding: 10px 0px" name="Karnety" type="submit" value="Karnety">Karnety</button>
            </form>
            
		    </div>
        
		    <div class="col-md-9">
        
          <div class="row no-gutters">
		
            <div class="col-md-12">	

              <!-- koszyk 
              <div class="col-md-12">
                <figure>
                  <img src="img/sklep/koszyk.jpg" alt="koszyk" style="position:absolute;top:10px; right:50px; height:100px; width:100px;":>							
                </figure>
              </div>
              koszyk  --> 	
    
              <div class="col-md-4">
                <div style="max-height:382px;">
                <div style="margin-top:25%;">
                <figure>
                  <img src="img\img_b\buty-narciarskie-srace-60t-l-race-bacid-greeblack-l40896300-salomon.jpg" alt="buty meskie">							
                </figure>
                </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="col-md-12">	
                  <p><h3 class="nocleg">Buty narciarskie Tecnica 3100 Mach1 130 LV M</h1></p>
                </div>	
                <div class="col-md-12 instruktor-opis">                
                  <p> Mach1 LV 130 to ulepszone męskie buty narciarskie. 
                  Polecane są ambitnym zawodnikom, do szybkiej jazdy. Buty o twardym flexie przy jednocześnie 
                  bardzo wysokiej stabilności, łatwej kontroli przy osiąganiu większych prędkości. Aby zapewnić 
                  wygodne użytkowanie podczas całodniowego przebywania na stoku, producent zastosował wiele 
                  wspomagających technologii. Ruchoma cholewka sprawia, że użytkowanie jest komfortowe zarówno podczas jazdy,
                  jak i chodzenia. Wewnętrzna anatomiczna wkładka zmniejsza odczucie skrępowanych nóg, dając jednocześnie 
                  możliwość większej swobody. To idealnie dopasowujące się do stopy buty, które bardzo pozytywnie zaskoczą 
                  Cię na stoku i doskonale sprawdzą się w każdej sytuacji. Dodatkowym udogodnieniem jest łatwy system zakładania i zdejmowania. 
                  </p>
                               
                </div>
              </div>
              
            </div>
            <div class="col-md-9"></div>
							  <div class="col-md-3">
							    <button class="nocleg" onclick="">Dodaj do koszyka</button></p>
							  </div>
            </div>

            <!--kolejny prod -->

                <div class="col-md-12 " >		
                  <div class="row no-gutters">  
                    <div class="col-md-12 " >		
	
                    <div class="col-md-4">
                <div style="max-height:382px;">
                <div style="margin-top:25%;">
                <figure>
                          <img src="img\img_n\set-narciarski-rossignol-01li-react-r4-sport-m.jpg" alt="narty meskie">							
                          </figure>
                </div>
                </div>
              </div>

                      <div class="col-md-8">
                        <div class="col-md-12">	
                          <p><h3 class="nocleg">Set narciarski Atomic 2390 Redster X9 S M</h1></p>
                        </div>	
                        <div class="col-md-12 instruktor-opis">                
                          <p> Narty Atomic Redster X9 S są idealne, jeśli chcesz trochę ścigać się w zawodach, 
                          a przez resztę czasu szybko jeździć na stoku. Jedną z ich kluczowych cech jest innowacja 
                          klasy Pucharze Świata - Servotec, która sprawia, że narty są bardziej zwrotne na zakrętach 
                          i stabilniejsze na prostych. Dodatkowo posiadają geometrię Multi Radius Sidecut, będącą taliowaniem, 
                          które jest kompromisem między slalomem gigantem a slalomem. Rozwiązanie równie dobre zarówno na krótkie, 
                          jak i długie skręty. Wszystko, czego potrzebujesz, aby szaleć na stoku przez cały sezon! 
                          Wiązanie Atomic X 12 TL RS to idealna propozycja dla osób, które oczekują profesjonalnych osiągów 
                          i możliwości dopasowania bez użycia narzędzi. Model X 12 TL RS ze ski stoperami 75 mm i technologią 
                          Full Flex zapewnia idealne przenoszenie siły i wyjątkową kontrolę nad nartami, a przede – niesamowite 
                          prędkości i łatwe dopasowanie bez konieczności używania narzędzi. WAGA: 3256 G / dla długości 175 cm. 
                          </p>
                                      
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-md-12" >		
                  <div class="col-md-9"></div>
                  <div class="col-md-3">
                    <button class="nocleg" onclick="">Dodaj do koszyka</button></p>
                  </div>
                </div>
          </div>
        </div>
      </div>
  </div>
</body>

<footer>

    <div class="container-fluid">
      <!-- Example row of columns -->
     <div class="row no-gutters">
	    
		<div class="col-md-12 stopka">
		
		<div class="col-md-4">
		 <p>Dane Kontaktowe:</p>
		 <p>Sklep Narciarski Web-Ski</p>
         <p>43-233 Zakopane</p>
		 <p>ul.Strzegoma 32</p>
		 
		 </div>
		 
		 
	    <div class="col-md-4">
		<p>Partnerzy:</p>
		<p>Skok Narciarski Czarna Dolina</p>
	  
	    </div>
		
		
		
		<div class="col-md-4">

	  
	    </div>
		
		<div class="col-md-12 text-right">
				<p>Copyright © 2020 Web-Ski</p>
		</div>
		</div>
		
	  </div>
	</div>
	  
	  
	  
	  
	  
	  
</footer>
     <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
   
        <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>
</html>