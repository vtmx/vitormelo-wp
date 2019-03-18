<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
		<!-- Metas -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/img/favicons/favicon-160x160.png" sizes="160x160">
		<meta name="msapplication-TileColor" content="#333333">
		<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/dist/img/favicons/mstile-144x144.png">

		<!-- Title -->
		<title><?php bloginfo('name'); ?></title>

		<!-- Style -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/dist/css/style.css">

		<!-- Style IE -->
		<!--[if IE]><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css"><![endif]-->

		<!-- Script IE -->
		<!--[if IE]><script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script><![endif]-->

		<!-- SEO Verification -->
		<meta name="google-site-verification" content="j-TKulhL3nacPi5dl8dv2xxB1CoPQhYGqebcLFboA0s">

		<!-- SEO Generic -->
		<meta name="author" content="Vitor Melo">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="vitormelo,vitor melo,piabetá,magé,rj,brasil,design,designer,interface,user experience,ux,mobile,responsive,html,markdown,css,sass,js,javascrip,jquery,php,cms,wordpress,wai-aria,seo,photoshop">
		<meta name="robots" content="index, follow">

		<!-- SEO Facebook -->
		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php bloginfo('url'); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/dist/img/social.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="800">
		<meta property="og:image:height" content="600">
		<meta property="article:publisher" content="https://www.facebook.com/vitormelo22">
		<meta property="article:author" content="<?php bloginfo('name'); ?>">
		<meta property="article:section" content="<?php bloginfo('description'); ?>">
		<meta property="article:tag" content="vitormelo,vitor melo,piabetá,magé,rj,brasil,design,designer,interface,user experience,ux,mobile,responsive,html,markdown,css,sass,js,javascrip,jquery,php,cms,wordpress,wai-aria,seo,photoshop">

		<!-- SEO Google+ -->
		<link rel="canonical" href="<?php bloginfo('url'); ?>">
		<link rel="publisher" href="https://plus.google.com/+VitorMelo22/">

		<!-- SEO Twitter -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:domain" content="<?php bloginfo('name'); ?>">
		<meta name="twitter:site" content="<?php bloginfo('name'); ?>">
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>">
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
		<meta name="twitter:creator" content="<?php bloginfo('name'); ?>">
		<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/dist/img/social.jpg">

		<style>
			.header {
				background-image: url(<?php the_field('header-image'); ?>);
			}
		</style>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/Person">

		<!--[if lt IE 9]>
			<div id="browse-update">Você está usando um navegador desatualizado. Por favor <a href="http://www.whatbrowser.org/intl/pt-BR/" target="blank">atualize seu navegador</a> para ter uma mehor experiência.</div>
			<script>
				var e = ("abbr,article,aside,figure,footer,header,main,nav,section").split(',');
				for (var i = 0; i < e.length; i++) { document.createElement(e[i]); }
			</script>
		<![endif]-->

		<!-- SVG Icons -->
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		    <symbol id="icon-angle-down" viewBox="0 0 658 1024">
		    	<title>angle-down</title>
		    	<path d="M614.286 420.571q0 7.429-5.714 13.143l-266.286 266.286q-5.714 5.714-13.143 5.714t-13.143-5.714l-266.286-266.286q-5.714-5.714-5.714-13.143t5.714-13.143l28.571-28.571q5.714-5.714 13.143-5.714t13.143 5.714l224.571 224.571 224.571-224.571q5.714-5.714 13.143-5.714t13.143 5.714l28.571 28.571q5.714 5.714 5.714 13.143z"></path>
		    </symbol>

		    <symbol id="icon-angle-left" viewBox="0 0 366 1024">
		    	<title>angle-left</title>
		    	<path d="M358.286 310.857q0 7.429-5.714 13.143l-224.571 224.571 224.571 224.571q5.714 5.714 5.714 13.143t-5.714 13.143l-28.571 28.571q-5.714 5.714-13.143 5.714t-13.143-5.714l-266.286-266.286q-5.714-5.714-5.714-13.143t5.714-13.143l266.286-266.286q5.714-5.714 13.143-5.714t13.143 5.714l28.571 28.571q5.714 5.714 5.714 13.143z"></path>
		    </symbol>

		    <symbol id="icon-angle-right" viewBox="0 0 366 1024">
		    	<title>angle-right</title>
		    	<path d="M340 548.571q0 7.429-5.714 13.143l-266.286 266.286q-5.714 5.714-13.143 5.714t-13.143-5.714l-28.571-28.571q-5.714-5.714-5.714-13.143t5.714-13.143l224.571-224.571-224.571-224.571q-5.714-5.714-5.714-13.143t5.714-13.143l28.571-28.571q5.714-5.714 13.143-5.714t13.143 5.714l266.286 266.286q5.714 5.714 5.714 13.143z"></path>
		    </symbol>

		    <symbol id="icon-angle-up" viewBox="0 0 658 1024">
		    	<title>angle-up</title>
		    	<path d="M614.286 676.571q0 7.429-5.714 13.143l-28.571 28.571q-5.714 5.714-13.143 5.714t-13.143-5.714l-224.571-224.571-224.571 224.571q-5.714 5.714-13.143 5.714t-13.143-5.714l-28.571-28.571q-5.714-5.714-5.714-13.143t5.714-13.143l266.286-266.286q5.714-5.714 13.143-5.714t13.143 5.714l266.286 266.286q5.714 5.714 5.714 13.143z"></path>
		    </symbol>
		</svg>

		<!-- =header -->
		<header id="header" class="header">
			<a class="skip-content" href="#body">Pular para o conteúdo principal</a>

			<h1 class="logo animation fade-in-down" itemscope itemtype="http://schema.org/Brand" itemprop="logo">
				<img class="symbol animation fade-in-down" src="<?php bloginfo('template_directory'); ?>/dist/img/logo.svg" alt="Logo do site Vitor Melo" width="300" height="186" onerror="this.src='<?php bloginfo('template_directory'); ?>/dist/img/logo.png'; this.onerror=null;">
				<img class="type animation fade-in-down" src="<?php bloginfo('template_directory'); ?>/dist/img/type.svg" alt="Fonte do site Vitor Melo" width="300" height="29" onerror="this.src='<?php bloginfo('template_directory'); ?>/dist/img/type.png'; this.onerror=null;">
				<div class="jobtitle animation fade-in-up" itemprop="additionalType">Design de Interfaces</div>
			</h1>

			<a class="to-content animation fade-in-up" href="#about">
				<span class="text-hide">Ir para o conteúdo</span>
				<svg class="icon icon-angle-down"><use xlink:href="#icon-angle-down"></use></svg>
			</a>

			<canvas id="header-canvas" class="animation fade-in-up"></canvas>
			<div class="header-overlay"></div>
		</header>
