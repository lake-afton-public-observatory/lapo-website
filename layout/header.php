<!doctype html>
<html prefix="og: http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">

	<!-- Basic Page Needs ========================================= -->
	<meta name="description" content="<?=$pageDescription?>">
	<meta name="author" content="Lake Afton Public Observatory">
	<meta property="og:title" content="Lake Afton Public Observatory">
	<meta property="og:url" content="http://www.lakeafton.com/">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.lakeafton.com/layout/img/LAPO_OpenGraph.jpg">
	<meta property="og:description" content="Through our telescope, exhibits, and events, we aim to foster education and wonder about our solar system and beyond.">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=0.1">
	<meta name="format-detection" content="telephone=yes">

	<!-- Favicon ========================================= -->
	<!--link rel="icon" href="/layout/img/favicon.ico" /-->

	<!-- Website Title ========================================= -->
	<title><?=$pageTitle?></title>

	<!-- Meta Information ========================================= -->
	<!---meta prefix="og: http://ogp.me/ns#" property="og:type" content="" />
	<meta prefix="og: http://ogp.me/ns#" property="og:title" content="" />
	<meta prefix="og: http://ogp.me/ns#" property="og:url" content="" />
	<meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="" />
	<meta name="twitter:card" content="summary" /-->

	<!-- Dependancies ========================================= -->
	<link rel="stylesheet" href="/layout/css/bootstrap.min.css">
	<link rel="stylesheet" href="/layout/css/font-awesome.min.css">
	<link rel="stylesheet" href="/layout/css/theme.css">

	<script src="/layout/js/pace.js"></script>
	<script src="/layout/js/jquery.min.js"></script>
	<script src="/layout/js/bootstrap.min.js"></script>
	<script src="/layout/js/prefixfree.min.js"></script>
	<script src="/layout/js/instafeed.min.js"></script>
	<script src="/layout/js/scripts.js"></script>

	<!-- Fonts ========================================= -->
	<script src="https://use.typekit.net/fuu8esm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
<body>

	<!-- Set up google analytics ========================================= -->





	<!-- Fade in on load (DOES NOT SHOW WITHOUT JAVASCRIPT) ========================================= -->
	<div id="pace-cover" style="display: none"></div>
	<script>
		document.getElementById('pace-cover').style.display = 'block';
	</script>



	<!-- Desktop Header ========================================= -->
	<header class="desktop hidden-md-down">
		<a href="/" class="logo">
			<img src="/layout/img/logo-lapo.svg" alt="">
		</a>
		<a href="/" class="sm-logo">
			<img src="/layout/img/logo-lapo-sm.svg" alt="">
		</a>
		<ul class="navigation">
			<li><a href="/about/">About</a></li>
			<li><a href="/who-we-are/">Who We Are</a></li>
			<li><a href="/contact/">Contact</a></li>
		</ul>

		<div class="social">
			<a href="https://twitter.com/lakeafton"><i class="fa fa-twitter"></i></a>
			<a href="https://www.facebook.com/lakeafton"><i class="fa fa-facebook"></i></a>
			<a href="https://www.instagram.com/lakeafton"><i class="fa fa-instagram"></i></a>
			<a href="http://eepurl.com/cdN8hf" class="donate">Donate</a>
		</div>
	</header>



	<!-- Mobile Header ========================================= -->
	<header class="mobile hidden-lg-up">
		<a href="/" class="logo">
			<img src="/layout/img/logo-lapo-sm.svg" alt="">
		</a>
		<div class="menu-toggle"><span></span><span></span><span></span></div>
		<div class="menu">
			<img src="/layout/img/logo-lapo.svg" alt="">
			<ul>
				<li><a href="/about/">About</a></li>
				<li><a href="/who-we-are/">Who We Are</a></li>
				<li><a href="/contact/">Contact</a></li>
				<li><a href="http://eepurl.com/cdN8hf" class="donate">Donate</a></li>
			</ul>


			<div class="social">
				<a href="https://twitter.com/lakeafton"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/lakeafton"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/lakeafton"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</header>


	<!-- Content Area ========================================= -->
	<div class="main">
