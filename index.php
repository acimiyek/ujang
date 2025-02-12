<?php
ob_start();
require "./admin/connect.php";
connect();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Oficjalny Serwis Interenetowy KKPK Medyk Konin</title>
<meta name="description" content="Najświeższe informacje o kobiecym klubie piłkarskim z Konina. Aktualności, drużyny, wyniki z meczów ligowych i pucharowych, historia, sukcesy oraz media o nas.">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet"/>
<link rel="stylesheet" href="js/jquery-ui.css">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.cycle2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/jquery.jscroll.js"></script>
<script src="js/jquery-ias.min.js"></script>
<?php require "./js/skrypty.php"; ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- HEADER -->
<div class="container-fluid nav-info-tlo">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-xs-8">
        <ul class=" navbar-nav list-unstyled margines-15" style="width:100%;">
        </ul>
      </div>
      <div class="col-md-6 hidden-xs " style="background:#92279b;  height:50px;  box-shadow:0 0 40px  0px black ; ">
        <div class="col-md-4 padding_zero">
          <div class="mecz-info margines-15">Do następnego meczu zostało:</div>
        </div>
        <div class="col-md-5 padding_zero">
          <div class="lewa margines-10">
            <div id="clock-top"></div>
          </div>
        </div>
        <div class="col-md-3 padding_zero ">
          <div class="herb">
            <div class="gracz-herb"><img src="<?php echo $rek1['sciezka_foto']; ?>" height="30" width="26" alt="<?php echo $rek1['nazwa_druzyna']; ?>"></div>
            <div class="vs">VS</div>
            <div class="gracz-herb"><img src="<?php echo $rek2['sciezka_foto']; ?>" height="40" width="26" alt="<?php echo $rek2['nazwa_druzyna']; ?>"></div>
          </div>
        </div>
      </div>
      <div id="media" class="col-md-1 col-xs-3 margines-15 padding_zero" style="color:white;"> <a href="https://www.facebook.com/pages/KKPK-Medyk-Konin/177777712339912" class="padding-prawy-5"> <i class="fa fa-facebook"></i> </a> <a href="https://twitter.com/medykkonin " class="padding-prawy-5"> <i class="fa fa-twitter"></i> </a> <a href="https://instagram.com/medykkonin/" class="padding-prawy-5"> <i class="fa fa-instagram"></i> </a> </div>
      <div class="col-md-3 hidden-xs kolumna-szukaj">
        <form action="index.php?tresc=wyszukiwarka" method="post">
          <input type="text" name="slowo_kluczowe" placeholder="Wyszukaj" class="pole-szukaj" title="">
          <div style="float: right;">
            <button style="background:none; border:none;"><i class="fa fa-search" style="color:#bcc7ca; "></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid nav-tlo">
  <div class="container">
    <div class="row">
      <div class="col-md-4 padding_zero">
        <div class="col-md-4"> <a href="index.php?tresc=homepage"><img src="./img/logo.png" class="hidden-xs" alt="logo" height="133"></a> </div>
        <div class="col-md-8 margines-40 padding_zero">
          <div class="row">
            <table style="width:100%; border:none; margin:0 auto; border-spacing:0px 2px;">
              <tr>
               <td><img src="./img/gwiazdka.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2017</span></td><td><img src="./img/gwiazdka.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2016</span></td>
                <td><img src="./img/gwiazdka.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2015</span></td>
                <td><img src="./img/gwiazdka.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2014</span></td>
                <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2017</span></td>
					 <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2016</span></td>
              </tr>
              <tr>
               <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2015</span></td>
                <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2014</span></td>
                <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2013</span></td>
                <td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2008</span></td>
<td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2006</span></td>
<td><img src="./img/puchar.png" alt="gwiazdka" class="mistrzostwo-gwiazdka"/> <span class="mistrzostwo-data">2005</span></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
            <div class="col-md-8 padding_zero" >
        <!--WERSJA MOBILE-->
        <div class="container-fluid visible-xs-block ">
          <nav class="navbar navbar-default" role="navigation" style="min-height:50px; border:none; margin-top:20px;">
            <div class="navbar-header" style="background:#7329a5;">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Rozwiń nawigację</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" style="margin:0px; padding:2px 0px 0px 10px;" href="index.php?tresc=homepage"> <img src="./img/logo.png" height="45" alt="logo"></a> </div>
            <div class="collapse navbar-collapse " style="margin-top:20px;" id="bs-example-navbar-collapse-1">
              <ul id="nav-mobile" class="nav navbar-nav margines-zero">
                <li><a href="index.php?tresc=homepage"><i class="fa fa-home"></i> </a></li>
                <li><a href="index.php?tresc=druzyny2">Drużyny</a></li>
                <li><a href="index.php?tresc=klub">Klub</a></li>
                <li><a href="index.php?tresc=rozgrywki2">Rozgrywki</a></li>
                <li><a href="index.php?tresc=akademia">Akademia</a></li>
                <li><a href="index.php?tresc=partnerzy">Partnerzy</a></li>
                <li><a href="index.php?tresc=dla_kibicow">Dla kibiców</a></li>
                <li><a href="index.php?tresc=dla_mediow">Media</a></li>
                <li><a href="index.php?tresc=kontakt" style="margin:0px;">Kontakt</a></li>
              </ul>
            </div>
          </nav>
          <div class="row">
            <div class="col-xs-12 tlo_menu_mobile"></div>
          </div>
        </div>
        <!--KONIEC - WERSJA MOBILE-->
        <div id="nav-reset" class="hidden-xs margines-20 " style="min-height: 70px;">
          <ul class="nav navbar-nav margines-20">
            <li><a href="index.php?tresc=homepage"><i class="fa fa-home"></i> </a></li>
            <li><a href="index.php?tresc=druzyny2">Drużyny</a></li>
            <li><a href="index.php?tresc=klub">Klub</a></li>
            <li><a href="index.php?tresc=rozgrywki2">Rozgrywki</a></li>
            <li><a href="index.php?tresc=akademia">Akademia</a></li>
            <li><a href="index.php?tresc=partnerzy">Partnerzy</a></li>
            <li><a href="index.php?tresc=dla_kibicow">Dla kibiców</a></li>
            <li><a href="index.php?tresc=dla_mediow">Media</a></li>
            <li><a href="index.php?tresc=kontakt" style="margin:0px;">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT -->
<div class="container-fluid tlo-1 padding_zero">



   <?php
    if (!isset($_GET['tresc']) or $_GET['tresc'] == null) {
        $stronka = "homepage";
    }else{$stronka=$_GET['tresc'];}
    include("$stronka.php");
    ?>








 <!-- BOX REKLAMY -->
  <div class="container tlo-glowne padding-50">
    <div class="row ">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12"><span class="media-tytul">Dołącz do nas na Facebooku</span>
            <div class="prasa-kreska"></div>
          </div>
        </div>
        <div class="row margines-10">
          <div class="col-md-12" >
            <div class="fb-like-box" data-width="1000" data-href="https://www.facebook.com/pages/KKPK-Medyk-Konin/177777712339912" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12"><span class="media-tytul">Tweetuj z nami</span>
            <div class="prasa-kreska"></div>
          </div>
        </div>
        <div class="row margines-10">
          <div class="col-md-12"><a class="twitter-timeline" data-theme="light" href="https://twitter.com/medykkonin" data-widget-id="580671983937056769">Tweety użytkownika @medykkonin </a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row box-reklama hidden ">
          <div class="col-md-3">box</div>
          <div class="col-md-3">box</div>
          <div class="col-md-3">box</div>
          <div class="col-md-3">box</div>
        </div>
        <div class="row box-patroni margines-25">
          <div class="col-md-3 col-xs-6 text-center">
            <div class="row">
              <div class="col-md-12"><span class="nazwa-sponsor">Partner generalny</span></div>
            </div>
            <div class="row margines-50">
              <div class="col-md-12">  <?php
                $tresc_zapytania = ("SELECT * FROM partnerzy WHERE podtytul='Partner generalny'");
                $zapytanie = mysql_query($tresc_zapytania);
                while ($rek = mysql_fetch_array($zapytanie)) {
                  echo '
              <a href="'; echo $rek['link']; echo '"><img src="'; echo $rek['sciezka_foto']; echo '" alt="'; echo $rek['tytul']; echo '" height="70" width="100"/></a>
';
                }
                ?> </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-6 text-center">
            <div class="row">
              <div class="col-md-12"><span class="nazwa-sponsor">Sponsor tyturalny</span></div>
            </div>
            <div class="row margines-50">
              <div class="col-md-12"> <div class="cycle-slideshow">
                  <?php
                $tresc_zapytania = ("SELECT * FROM partnerzy WHERE podtytul='Partner tytularny'");
                $zapytanie = mysql_query($tresc_zapytania);
                while ($rek = mysql_fetch_array($zapytanie)) {
                  echo '
              <a href="'; echo $rek['link']; echo '"><img src="'; echo $rek['sciezka_foto']; echo '" alt="'; echo $rek['tytul']; echo '" height="70" width="100"/></a>
';
                }
                ?>
                </div> </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-6 text-center">
            <div class="row">
              <div class="col-md-12"><span class="nazwa-sponsor">Sponsorzy główni</span></div>
            </div>
            <div class="row margines-50">
              <div class="col-md-12"  >
                <div class="cycle-slideshow">
                  <?php
                $tresc_zapytania = ("SELECT * FROM partnerzy WHERE podtytul='Sponsor główny'");
                $zapytanie = mysql_query($tresc_zapytania);
                while ($rek = mysql_fetch_array($zapytanie)) {
                  echo '
              <a href="'; echo $rek['link']; echo '"><img src="'; echo $rek['sciezka_foto']; echo '" alt="'; echo $rek['tytul']; echo '" height="70" width="100"/></a>
';
                }
                ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-6 text-center">
            <div class="row">
              <div class="col-md-12"><span class="nazwa-sponsor">Sponsorzy techniczni</span></div>
            </div>
            <div class="row margines-50">
              <div class="col-md-12" >

               <div class="cycle-slideshow">
                  <?php
                $tresc_zapytania = ("SELECT * FROM partnerzy WHERE podtytul='Sponsor techniczny'");
                $zapytanie = mysql_query($tresc_zapytania);
                while ($rek = mysql_fetch_array($zapytanie)) {
                  echo '
              <a href="'; echo $rek['link']; echo '"><img src="'; echo $rek['sciezka_foto']; echo '" alt="'; echo $rek['tytul']; echo '" height="70" width="100"/></a>
';
                }
                ?>
                </div>




               </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 text-center">
            <div class="row">
              <div class="col-md-12"><span class="nazwa-sponsor">Patroni medialni</span></div>
            </div>
            <div class="row margines-50">
              <div class="col-md-8 col-md-offset-2"  >
                <div class="cycle-slideshow">
                  <?php
                $tresc_zapytania = ("SELECT * FROM partnerzy WHERE podtytul='Patron medialny'");
                $zapytanie = mysql_query($tresc_zapytania);
                while ($rek = mysql_fetch_array($zapytanie)) {
                  echo '
              <a href="'; echo $rek['link']; echo '"><img src="'; echo $rek['sciezka_foto']; echo '" alt="'; echo $rek['tytul']; echo '" height="70" width="120"/></a>
';
                }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row margines-25">
      <div class="col-md-12"></div>
    </div>
  </div>
  <!-- KONIEC BOX REKLAMY -->
</div>
<div class="container-fluid stopka-autor">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">Copyright© KKPK Medyk POLOmarket Konin 2015. Wszelkie prawa zastrzeżone.</div>
      <div class="col-md-6 text-right"> <a href="http://www.sportsuccess.pl"><img src="./img/sport-success.png" width="150" alt="sport success"></a> </div>
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
