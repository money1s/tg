<?php
// Сохраняем Facebook Pixel в Cookie
setcookie("fb_pixel", $_GET['fb_pixel'], time()+600); // срок действия 10 минут
?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $_COOKIE["fb_pixel"]; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $_COOKIE["fb_pixel"]; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 3.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-CL">
	
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>
   DMOOV | THE FITNESS CLUB</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="wp-content/themes/dmoov/css/bootstrap.min.css" type="text/css" media="all">
<link href="wp-content/themes/dmoov/css/font-awesome.min.css" rel="stylesheet">

<!-- Owl Carousel Assets -->
<link href="wp-content/themes/dmoov/css/owl.carousel.css" rel="stylesheet">
<link href="wp-content/themes/dmoov/css/owl.theme.css" rel="stylesheet">

<!-- custom scrollbar stylesheet -->
<link rel="stylesheet" href="wp-content/themes/dmoov/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="wp-content/themes/dmoov/css/style-scroll.css"> 
<link rel="stylesheet" href="wp-content/themes/dmoov/css/animate.css">
<link rel="stylesheet" href="wp-content/themes/dmoov/css/flexslider.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="wp-content/themes/dmoov/css/jquery.spzoom.css">
<link rel="stylesheet" href="wp-content/themes/dmoov/css/normalize.css" type="text/css" media="all">
<link rel="stylesheet" href="wp-content/themes/dmoov/css/estilos.css" type="text/css" media="all">

<meta name="google-site-verification" content="_rWBZ2eyknZDsLQba7ZkkLjmoj1c2T9T5IU8G3OlRCo" />


	
	<meta name="description" content="THE FITNESS CLUB" />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="index.html" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="DMOOV | THE FITNESS CLUB" />
	<meta property="og:description" content="THE FITNESS CLUB" />
	<meta property="og:url" content="https://www.dmoov.com/" />
	<meta property="og:site_name" content="DMOOV" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.dmoov.com/#organization","name":"Dmoov","url":"https://www.dmoov.com/","sameAs":[],"logo":{"@type":"ImageObject","@id":"https://www.dmoov.com/#logo","inLanguage":"es-CL","url":"https://www.dmoov.com/wp-content/uploads/2020/04/logo-wp-01.jpg","width":800,"height":800,"caption":"Dmoov"},"image":{"@id":"https://www.dmoov.com/#logo"}},{"@type":"WebSite","@id":"https://www.dmoov.com/#website","url":"https://www.dmoov.com/","name":"DMOOV","description":"THE FITNESS CLUB","publisher":{"@id":"https://www.dmoov.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://www.dmoov.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"es-CL"},{"@type":"CollectionPage","@id":"https://www.dmoov.com/#webpage","url":"https://www.dmoov.com/","name":"DMOOV | THE FITNESS CLUB","isPartOf":{"@id":"https://www.dmoov.com/#website"},"about":{"@id":"https://www.dmoov.com/#organization"},"description":"THE FITNESS CLUB","inLanguage":"es-CL","potentialAction":[{"@type":"ReadAction","target":["https://www.dmoov.com/"]}]}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='https://s.w.org' />
<link rel="alternate" type="application/rss+xml" title="DMOOV &raquo; Feed" href="feed/index.rss" />
<link rel="alternate" type="application/rss+xml" title="DMOOV &raquo; Feed de comentarios" href="comments/feed/index.rss" />
<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min%EF%B9%96ver=5.5.7.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles%EF%B9%96ver=5.2.2.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery%EF%B9%96ver=1.12.4-wp.js' id='jquery-core-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.json" /><style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="wp-content/uploads/2020/09/cropped-logo-dmoov-avatar-32x32.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2020/09/cropped-logo-dmoov-avatar-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2020/09/cropped-logo-dmoov-avatar-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.dmoov.com/wp-content/uploads/2020/09/cropped-logo-dmoov-avatar-270x270.png" />
		<style type="text/css" id="wp-custom-css">.whatsapp  { display:none
}




#ui-id-2 > div > img {     width: 100%; padding-left:15%; padding-right:15%; padding-bottom:5%; padding-top:2% }

#ui-id-2 > div {     width: 100%;  background: #009fe1!important}

@media (max-width: 800px) { 
#ui-id-2 > div > img {     width: 100%; padding:0%!important }

#ui-id-1  {   font-size: 10px;
} 

#ui-id-1 > img:nth-child(4){     width: 30%;}

body > div.wrapper > section:nth-child(3){     margin-top: 30%!important;}

}

.planes-home .wrap .row {
    border-top: 2px solid #65a9de;
    padding-top: 25px;
	    border-bottom: 2px solid #65a9de;
    padding-bottom: 25px;
	margin-bottom:2%
}

footer {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #bbb;
    font-size: 9px;
}

.footer-dmoov {
    width: 25%;}

footer a {
    margin-right: 0px;
}


.flexslider {
    height: auto;
    background-color: #000!important;
}		</style>
		
</head>
	


<body class="home blog elementor-default">
	
<div class="wrapper">

<header class="absolute">

	<div class="header-top">
		<div class="links-top">
			<a href="index.html" class="logo"><img src="wp-content/themes/dmoov/images/logo-dmoov.png" alt="dmmov"></a> 
		</div>
	
		<div class="btn-menu">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>

		<div class="redes-header">
			<a href="https://www.facebook.com/dmoov/" target="_blank"><img src="wp-content/themes/dmoov/images/ic-facebook.png" alt="facebook"></a>
			<a href="https://www.instagram.com/dmoovlascondes/" target="_blank"><img src="wp-content/themes/dmoov/images/ic-instagram.png" alt="instagram"></a>
		</div>
		
	    <nav class="menu">
			<ul>
				<li><a href="#">SEDES</a>
					<ul class="sub-menu">
						<li><a href="sedes/las-condes/index.html">LAS CONDES</a></li>
						<li><a href="sedes/chicureo/index.html">CHICUREO</a></li>
						<li><a href="sedes/barrio-central/index.html">BARRIO CENTRAL</a></li>
						<li><a href="sedes/nueva-costanera/index.html">NUEVA COSTANERA</a></li>
					</ul>
				</li>
				<li><a href="franquicias/index.html">FRANQUICIAS</a></li>
				<li><a href="dmoov-en-tu-empresa/index.html">DMOOV EN TU EMPRESA</a></li>

				<li><a href="#" data-toggle="modal" data-target="#contacto">CONTACTO</a>
				    <ul class="sub-menu">
						<li><a href="#" data-toggle="modal" data-target="#contacto-lascondes">LAS CONDES</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contacto-chicureo">CHICUREO</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contacto-barriocentral">BARRIO CENTRAL</a></li>
					</ul>
				</li>
				<!--<li><a href="https://www.dmoov.com/inscribete-online" class="btn-inscribete">COMPRA ON-LINE</a>-->
				    <ul class="sub-menu">
						<li><a href="inscribete-online-las-condes/index.html">LAS CONDES</a></li>
						<li><a href="inscribete-online-chicureo/index.html">CHICUREO</a></li>
						<li><a href="inscribete-online-barrio-central/index.html">BARRIO CENTRAL</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<div class="clear"></div>
	</div>

</header>

<nav class="menu-mobile">
	<div class="cerrar-menu">
		<i class="fa fa-times"></i>
	</div>
	<ul>
		<li><a href="#">SEDES</a>
			<ul class="sub-menu">
				<li><a href="sedes/las-condes/index.html">LAS CONDES</a></li>
						<li><a href="sedes/chicureo/index.html">CHICUREO</a></li>
				<li><a href="sedes/barrio-central/index.html">BARRIO CENTRAL</a></li>
						<li><a href="sedes/nueva-costanera/index.html">NUEVA COSTANERA</a></li>
			</ul>
		</li>
		<li><a href="franquicias/index.html">FRANQUICIAS</a></li>
		<li><a href="virtualtraining/index.html" target="_blank">VIRTUAL TRAINING</a></li>
		<li><a href="dmoov-en-tu-empresa/index.html">DMOOV EN TU EMPRESA</a></li><br>
		<li><a href="https://dmoov.com/blog-dmoov/">BLOG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
		<li><a href="#">CONTACTO</a></li>
		<!--<li><a href="https://www.dmoov.com/inscribete-online" class="btn-inscribete">COMPRA ON-LINE</a>-->
		   <ul class="sub-menu">
				<li><a href="inscribete-online-las-condes/index.html">LAS CONDES</a></li>
				<li><a href="inscribete-online-chicureo/index.html">CHICUREO</a></li>
				<li><a href="inscribete-online-barrio-central/index.html">BARRIO CENTRAL</a></li>
			</ul>
		</li>
	</ul>
</nav>
<section class="banner banner-home">

	<div class="flexslider flex1" id="slide-home">

		<ul class="slides" id="slide1" style="overflow: hidden;">
            <!--<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">                    <a href="https://www.dmoov.com/inscribete-online-chicureo/">
                    <img src="https://www.dmoov.com/wp-content/uploads/2020/12/barrio-chi.jpg" draggable="false"></a>
                </li>-->
                 <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">                    <a href="#">
                    <img src="wp-content/uploads/2021/03/BANNER-CAMPANAcolor.jpg" draggable="false"></a>
                </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">               <video width="100%" muted="" autoplay="" playsinline="" controls="" loop="" preload="true">
                <source src="https://www.dmoov.com/wp-content/uploads/2020/11/DMOOV-Arma-tu-Plan-V4-1920X1080.mp4" codecs="dirac," speex="">
                Tu navegador no implementa el elemento <code>video</code>.
              </video>
            
                </li>     
                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">               <video width="100%" muted="" autoplay="" playsinline="" controls="" loop="" preload="true">
                <source src="https://www.dmoov.com/videos/portada.mp4" codecs="dirac," speex="">
                Tu navegador no implementa el elemento <code>video</code>.
              </video>
            
                </li>     
                           
                </ul> 

	</div>
</section>
	
<a href="arma-tu-plan/index.html" target="_blank" class="arma" style="position: fixed; bottom: 100px; right: 0; z-index: 9999;"><img src="wp-content/uploads/2020/11/btn.png" alt="arma"></a>
<section class="banner">
	<a href="arma-tu-plan/index.html">
	 <img src="wp-content/uploads/2020/11/Banner-web-dmoov-1.gif" alt="banner 01" />
	</a>
</section>

<section class="sedes-home">
	<div class="wrap">
		<div class="row">
			<div class="col-sm-6">
			  <h2><strong>COMPRA ON-LINE</strong></h2>
			  <h2>SÚMATE HOY DMOOV FITNESS CLUB</h2>
			</div>	
			<div class="col-sm-2">
			  <img src="wp-content/themes/dmoov/images/dmoov-lascondes.svg" alt="dmoov las condes" />
			  <a href="sedes/las-condes/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov las condes" /> LAS CONDES</a>
			</div>	
			<div class="col-sm-2">
			 <img src="wp-content/themes/dmoov/images/dmoov-chicureo.svg" alt="dmoov chicureo" />
			 <a href="sedes/chicureo/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov las condes" /> CHICUREO</a>
			</div>	
			<div class="col-sm-2">
			 <img src="wp-content/themes/dmoov/images/dmoov-barriocentral.svg" alt="dmoov barrio central" />
			 <a href="sedes/barrio-central/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov las condes" /> BARRIO CENTRAL</a>
			</div>	
		</div>
	</div>
</section>


<section class="distribuidores">
	
	<div class="panel-distribuidores">
				<div class="distribuidor" id="distribuidor-1">
			<video width="100%" muted playsinline controls preload="true">
                <source src="https://www.dmoov.com/videos/clases_+.mp4" type="video/mp4" codecs=dirac, speex>
                Tu navegador no implementa el elemento <code>video</code>.
             </video>
		</div>
			</div>
	
	<div class="clases bg-black con-borde">
		<div class="interior">
			<h3 class="titulo">CLASES</h3>
			<div class="menu-interior menu-distribuidores">
								<a href="#" class="activo" data-rel="1">PURMOTION • REAL RYDER • E. FUNCIONAL • CROSSFIT • WOMAN FIT • PILATES • ZUMBA • FUERTE POR ZUMBA • DPUMP • YOGA • DBURN • BOX • KICK BOXING • JIU JITSU</a>
							</div>
		</div>
	</div>
	
</section>

<section class="planes-home">
	<div class="wrap">
		<div class="row">
			<div class="col-sm-9">
			  <h2><strong>DMOOV EN TU EMPRESA Y FRANQUICIAS</strong></h2>
			  <p>Te invitamos a ser parte de la familia DMOOV FITNES CLUB</p>
			</div>	
			<div class="col-sm-3">
			  <a href="#" data-toggle="modal" data-target="#contacto" class="btn-online">ESCRÍBENOS</a>
			</div>		
		</div>
	</div>
</section>

<section class="banner">
	<div class="wrap">
		<div class="row">
			<div class="col-sm-12">
			  <section class="banner">
				<a href="http://dmoov.com/sitionuevo/dmoov-en-tu-empresa/">
				 <img src="wp-content/uploads/2020/04/espacio_gimansio.jpg" alt="banner 02" />
				</a>
			</section>
			</div>	
		</div>
	</div>
</section>

<section id="planes" class="planes-home" style="padding:25px 0 35px !important; boder">
	<div class="wrap">
		<div class="row" style="border-top: 0;">
			<div class="col-sm-4">
				<div class="plan-box">
					<h3>BY DMOOV</h3>
					<a href="dmoov-en-tu-empresa/index.html" class="btn-planes">Más info...</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="plan-box">
					<h3>FRANQUICIAS</h3>
					<a href="franquicias/index.html" class="btn-planes">Más info...</a>
				</div>
			</div>	
			<div class="col-sm-4">
				<div class="plan-box">
					<h3>DMOOV EN TU EMPRESA</h3>
					<a href="dmoov-en-tu-empresa/index.html" class="btn-planes">Más info...</a>
				</div>
			</div>	
		</div>
	</div>
</section>

<section class="multimedia">
		<div class="row">
			<div class="col-md-12">
				<div id="fotogaleria1" class="carousel slide fotogaleria" data-ride="carousel">
					<div class="texto-fotogaleria">
					<strong>GALERÍA</strong> FRANQUICIAS
					</div>
					
					<div class="carousel-inner" role="listbox">
												<div class="item active">
							<img src="wp-content/uploads/2020/04/1S9A8601.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A8592.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A8563.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A2868.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A2870.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A2871.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A3611.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A3669.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A9461.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A9467.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A0019.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A0035.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A2016.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A9777.jpg" />
						</div>
												<div class="item ">
							<img src="wp-content/uploads/2020/04/1S9A9784.jpg" />
						</div>
											</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#fotogaleria1" role="button" data-slide="prev">
						<img src="wp-content/themes/dmoov/images/izq-gal.png" />
					</a>
					<a class="right carousel-control" href="#fotogaleria1" role="button" data-slide="next">
						<img src="wp-content/themes/dmoov/images/der-gal.png" />
					</a>
					
				</div>
			</div>
		</div>
</section>

<section class="banner">
	<a href="" data-toggle="modal" data-target="#contacto">
	  <img src="wp-content/uploads/2020/04/banner_valores-2.jpg" alt="banner 013" />
	</a>
</section>

<footer>
	<div class="wrap">
		<div class="menu-footer col-md-3">
			<div class="item-menu-footer">
				<ul>
					<li>MENÚ</li><br>
					<li><a href="sedes/las-condes/index.html">LAS CONDES</a></li>
			        <li><a href="chicureo/index.html">CHICUREO</a></li>
					<li><a href="sedes/barrio-central/index.html">BARRIO CENTRAL</a></li>
			        <li><a href="virtualtraining/index.html" target="_blank">VIRTUAL TRAINING</a></li>
				    <li><a href="franquicias/index.html">FRANQUICIAS</a></li>
					<li><a href="dmoov-en-tu-empresa/index.html">DMOOV EN TU EMPRESA</a></li>
				</ul>
			</div>
		</div>
	    
		<div class="col-md-5">
			<h2 style="color:#fff; font-size: 15px; text-transform: uppercase; margin:0 0 20px; font-weight: normal;">PARTNERS</h2>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/gatorade.png" width="80%" alt="sponsor">
				</div>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/reebook.png" width="80%" alt="sponsor">
				</div>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/vivo-1.png" width="80%" alt="sponsor">
				</div>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/mercedes.png" width="80%" alt="sponsor">
				</div>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/redbull-1.png" width="80%" alt="sponsor">
				</div>
						   <div class="sponsors">
				  <img src="wp-content/uploads/2020/05/achantun.png" width="80%" alt="sponsor">
				</div>
						
		</div><!--col-md-5-->
	
	    
	<div class="col-md-4">
		<div class="footer-dmoov">
		  <img src="wp-content/uploads/2020/05/dmoov-lascondes.svg" alt="dmoov las condes" />
		  <a href="sedes/las-condes/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov las condes" /> LAS CONDES</a>
		</div>	
		<div class="footer-dmoov">
		 <img src="wp-content/uploads/2020/05/dmoov-chicureo.svg" alt="dmoov chicureo" />
		 <a href="sedes/chicureo/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov chicureo" /> CHICUREO</a>
		</div>	
		<div class="footer-dmoov">
		 <img src="wp-content/uploads/2020/05/dmoov-barriocentral.svg" alt="dmoov barrio central" />
		 <a href="sedes/barrio-central/index.html"><br><img src="wp-content/themes/dmoov/images/ic-point.png" alt="dmoov barrio central" /> BARRIO CENTRAL</a>
			</div>
		<div style="padding: 10px 0; border-top:1px solid #ccc; border-bottom:1px solid #ccc; width:100%; float: left;">
		<div class="texto-footer">
			<p><strong>DMOOV CHILE</strong><br>
			Panamericana Norte 16200, Colina, Santiago - Chile.<br>
			+562 499 8900<br>
			info@dmoov.com</p>
		</div>
		<div class="redes-footer">
			<a href="#"><img src="wp-content/themes/dmoov/images/ic-facebook-b.png" alt="facebook"></a>
			<a href="#"><img src="wp-content/themes/dmoov/images/ic-instagram-b.png" alt="instagram"></a>
		</div>
		</div><!--div border-->
		
	</div><!--col-md-5-->
</footer>

		
</div><!-- End Wrapper -->

<script type="text/javascript" src="wp-content/themes/dmoov/js/jquery.min.js"></script>
<script type="text/javascript" src="wp-content/themes/dmoov/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="wp-content/themes/dmoov/js/jquery-ui.js"></script>
<script type="text/javascript" src="wp-content/themes/dmoov/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wp-content/themes/dmoov/js/funciones.js"></script>

<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.dmoov.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts%EF%B9%96ver=5.2.2.js' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min%EF%B9%96ver=5.5.7.js' id='wp-embed-js'></script>

<!-- FlexSlider -->
<script src="wp-content/themes/dmoov/js/jquery.flexslider.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {   
      $('#slide-home').flexslider({
        animation: "fade",
        directionNav: true
      });   
    });
</script>


<script src="wp-content/themes/dmoov/js/owl.carousel.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
		var owl = $(".carrusel-gal-prod");
 
		  owl.owlCarousel({
			
			  navigation : true,
			  navigationText: ["<img src='https://www.dmoov.com/wp-content/themes/dmoov/images/left.png'>","<img src='https://www.dmoov.com/wp-content/themes/dmoov/images/right.png'>"],
			  items : 6, //10 items above 1000px browser width
		      itemsDesktop : [1400,6], //5 items between 1000px and 901px
		      itemsDesktop : [1200,5], //5 items between 1000px and 901px
		      itemsDesktopSmall : [991,4], // betweem 900px and 601px
		      itemsTablet: [768,4], //2 items between 600 and 0
		      itemsMobile: [480,3]
		 
		  });		

		var owl2 = $(".carrusel-ac");
 
		  owl2.owlCarousel({
			
			  navigation : true,
			  navigationText: ["<img src='https://www.dmoov.com/wp-content/themes/dmoov/images/left-ac.png'>","<img src='https://www.dmoov.com/wp-content/themes/dmoov/images/right-ac.png'>"],
			  items : 1, //10 items above 1000px browser width
		      itemsDesktop : [1400,1], //5 items between 1000px and 901px
		      itemsDesktop : [1200,1], //5 items between 1000px and 901px
		      itemsDesktopSmall : [991,1], // betweem 900px and 601px
		      itemsTablet: [768,1], //2 items between 600 and 0
		      itemsMobile: [480,1]
		 
		  });		  		  
    });
</script>

<script>
    $(document).ready(function() {
        $( ".acordeon" ).accordion({
            active: false,
            collapsible: true,
            autoHeight: true,
            heightStyle: "content"
        });
    });
</script>




<!-- custom scrollbar plugin -->
<script src="wp-content/themes/dmoov/js/jquery.mCustomScrollbar.concat.min.js"></script>
	
<script>
	$(document).ready(function() {
		$(".resultado-buscador-dis").mCustomScrollbar({
			mouseWheelPixels: 550,
			 scrollInertia: 300
		});
	});
</script>

<script type="text/javascript" src="wp-content/themes/dmoov/js/jquery.spzoom.js"></script>
<script>
	$(document).ready(function() {
		$('[data-spzoom]').spzoom({
			height: 400,
			width: 400,
			position: 'right'
		});
	});
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#accordion" ).accordion({
      heightStyle: "content",
	  collapsible: true
    });
  } );
 </script>
  <script src="wp-content/themes/dmoov/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
    });
</script>

<a href="#" class="whatsapp"><img src="wp-content/themes/dmoov/images/whatsapp.png" alt="whatsapp" /></a>


<!-- Modal Contacto-->
<div class="modal fade contacto-popup" id="contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-box.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f218-o1" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f218-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="218" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f218-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Franquicias">Franquicias</option><option value="DMOOV en tu Empresa">DMOOV en tu Empresa</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>


<!-- Modal Contacto Chicureo-->
<div class="modal fade contacto-popup" id="contacto-chicureo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-box-chicureo.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f121-o2" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f121-o2" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="121" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f121-o2" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>

<!-- Modal Contacto Las Condes-->
<div class="modal fade contacto-popup" id="contacto-lascondes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-box-lascondes.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f213-o3" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f213-o3" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="213" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f213-o3" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>

<!-- Modal Contacto Barrio Central-->
<div class="modal fade contacto-popup" id="contacto-barriocentral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-box-barriocentral.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f214-o4" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f214-o4" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="214" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f214-o4" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>


<!-- Modal Day Pass Chicureo-->
<div class="modal fade contacto-popup daypass" id="daypass-chicureo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-daypass.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f221-o5" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f221-o5" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="221" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f221-o5" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>

<!-- Modal Day Pass Las Condes-->
<div class="modal fade contacto-popup daypass" id="daypass-lascondes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-daypass.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f220-o6" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f220-o6" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="220" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f220-o6" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>

<!-- Modal Day Pass Barrio Central-->
<div class="modal fade contacto-popup daypass" id="daypass-barriocentral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <div class="logo">
		  <img src="wp-content/themes/dmoov/images/logo-daypass.png" alt="dmoov" />
		  </div>
         <div role="form" class="wpcf7" id="wpcf7-f219-o7" lang="es-CL" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="#wpcf7-f219-o7" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="219" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CL" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f219-o7" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre" /></span><br />
  <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Apellido" /></span><br />
  <span class="wpcf7-form-control-wrap rut"><input type="text" name="rut" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Rut: 12345678-0" /></span><br />
  <span class="wpcf7-form-control-wrap telefono"><input type="text" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="+569..." /></span><br />
  <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span><br />
  <span class="wpcf7-form-control-wrap menu"><select name="menu" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Clases y Talleres">Clases y Talleres</option><option value="Promociones">Promociones</option><option value="Servicio a Cliente">Servicio a Cliente</option></select></span><br />
  <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Escribénos"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>      </div>
    </div>
  </div>
</div>


</body>

</html>