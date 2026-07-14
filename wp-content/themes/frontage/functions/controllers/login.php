<?php

	//custom admin login logo
	function custom_login_logo() {
		echo '<style type="text/css">
			h1 a { 
				background-image: url(' .get_bloginfo('template_directory').'/assets/dist/img/logo.png) !important;
				background-size: 160px !important;
				width: 100% !important;
				height: 76px !important;
			}
			.login form {
				border: none;
				background: none;
				margin-top: 0;
				padding: 0 10px;
			}
			.wp-core-ui .button-primary {
				background: #8DFF70;
				border-color: #8DFF70;
				color: #000000;
				font-weight: bold;
			}
			.login #backtoblog, .login #nav {
				padding: 0;
			}
		</style>';
	} add_action('login_head', 'custom_login_logo');

?>