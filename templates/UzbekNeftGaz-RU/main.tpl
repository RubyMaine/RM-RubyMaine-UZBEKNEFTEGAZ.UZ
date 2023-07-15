<!--=================================================
Laravel 7 PRO WEB APP CRUD - by AO «UZBEKNEFTGAZ»
=====================================================
This Laravel Codes is protected by AO «UZBEKNEFTGAZ»
=====================================================
Web site links https://www.ung.uz/
=====================================================
Copyright (c) 2020 AO «UZBEKNEFTGAZ»
==================================================-->
<!DOCTYPE html>
<html>
<head>
{headers}
<meta charset="utf-8">
<link rel="shortcut icon" href="{THEME}/images/favicon.ico">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="user-scalable=0, initial-scale=1.0, maximum-scale=1.0, width=device-width"> 
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" >
<link rel="stylesheet" href="{THEME}/css/style.css" />
<link rel="stylesheet" href="{THEME}/css/engine.css" /> 
<link rel="stylesheet" href="{THEME}/css/font-awesome.css" />
<link rel="stylesheet" href="{THEME}/css/animate.css" />
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/bootstrap.min.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/jquery.bxslider.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/magnific-popup.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/owl.carousel.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/owl.theme.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/ticker-style.css" >
<link media="screen" rel="stylesheet" type="text/css" href="{THEME}/style/style.css" >
</head>
<body>
{AJAX}
<div id="l-container">

	<!--=== Main-RU INFO ===-->
	<div class="container">
		<div class="ticker-news-box">
			<span class="breaking-news">«УЗБЕКНЕФТЕГАЗ» ОА</span>
			<ul id="js-news">
				<li><a> &#10150; Внимание! Внимание! Сайт работает в тестовом режиме! Сайт находится на обслуживании, приносим извинения за доставленные неудобства!</li>
			</ul>
		</div>
	</div>
	<!--=== Main-RU INFO ===-->


	<!--=== Main-RU MENU ===-->
	<div id="header">
		<header class="clearfix fifth-style">
			{include file="modules/menu-ru.tpl"}
		</header>
	</div>
	<!--=== Main-RU MENU ===-->


	<!--=== Main-RU Slider ===-->
	<section class="heading-news4">
		{include file="modules/slider-ru.tpl"}
	</section>
	<!--=== Main-RU Slider ===-->


	<!--=== State Symbols ===-->
		<section class="block-wrapper shadow-white">
			{include file="modules/state-ru.tpl"}
		</section>
	<!--=== State Symbols ===-->


	<!--=== Main-RU News ===-->
		<section class="block-wrapper">
			<div class="block-content-news">
				<div class="container">

					<!-- block content -->
					<div class="block-content non-sidebar">

						<!-- grid box -->
						<div class="grid-box">
							<!--=== <div class="title-section">
								<h1><span class="world">«ЎЗБЕКНЕФТЕГАЗ» АЖ — ЯНГИЛИКЛАРИ</span></h1>
							</div> ===-->

							<div class="row">
								{info}{content}
							</div>

						</div>
						<!-- End grid box -->

					</div>
					<!-- End block content -->
				</div>
			</div>
		</section>
	<!--=== Main-RU News ===-->


	<!--=== Main-RU Corruption 
		<section class="features-today second-style">
			{include file="modules/corruption-ru.tpl"}
		</section>
	 Main-RU Corruption ===-->


	<!--=== Main-RU Youth 
		<section class="feature-video">
			{include file="modules/youth-ru.tpl"}
		</section>
	 Main-RU Youth ===-->


	<!--=== Main-RU Footer ===-->
		<footer>
			{include file="modules/footer-ru.tpl"}
		</footer>
	<!--=== Main-RU Footer ===-->

</div>

<script type="text/javascript" src="{THEME}/js2/jquery.migrate.js"></script>
<script type="text/javascript" src="{THEME}/js2/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/bootstrap.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/jquery.ticker.js"></script>
<script type="text/javascript" src="{THEME}/js2/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/owl.carousel.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="{THEME}/js2/plugins-scroll.js"></script>
<script type="text/javascript" src="{THEME}/js2/script.js"></script>

</body>
</html>