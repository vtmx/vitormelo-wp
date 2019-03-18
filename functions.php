<?php
	add_action( 'login_head', 'custom_page_login' );
	add_filter( 'admin_footer_text', 'footer_text' );
	add_theme_support( 'post-thumbnails' );

	// Change login page
	function custom_page_login() {
		echo
		'<style>
			body {
				background: #333;
			}

			.login h1 a {
				width: 300px;
				height: 186px;
				margin: 0 auto 30px auto;
				background: url(wp-content/themes/vitormelo/dist/img/logo.svg) no-repeat !important;
			}
		</style>';
	}

	// Change Footer Description
	function footer_text() {
		echo 'Esse site foi desenvolvido por <a href="http://vitormelo.com.br">Vitor Melo</a>';
	}
?>
