<!-- Tag head -->
	<!-- Autore: Marco Pavan - pavan.marco@email.it -->
	<!-- Data: 28 sett 2010 -->		
	<!-- Titolo pagina -->
	<!-- Inserimento del tag head -->
	<head>
		<title><?php echo $titolo_pagina; ?></title> <!-- il titolo della pagina viene impostato dinamicamente -->

		<!-- Autore e tipologia contenuto -->
		<meta name="author" content="Marco Pavan" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml" />
		<meta content="UTF-8" />

		<!-- Metatag -->
		<meta name="msvalidate.01" content="000000000000000000000" />
		<meta name="robots" content="index,follow" />
		<meta name="keywords" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit" />
		<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
		<meta name="subject" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		
		<!-- Inserimento favicon -->
		<link rel="shortcut icon" href="img/favicon.png"  />

		<!-- JavaScript -->
		<script type="text/javascript" src="/javascript/script.js"></script>
		<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>

		<!-- Regole di stile -->
		<link rel="stylesheet" type="text/css" href="/style/style.css" title="stile1"/>
		<link rel="stylesheet" type="text/css" href="/style/stile.css" media="screen" title="stile" />
		<link rel="stylesheet" type="text/css" href="/style/stile2.css" title="stile_2"/>
		<style type="text/css">
		@import "/style/slidertron.css";
		</style>
		
		<!-- Regole aggiuntive per browser Microsoft -->
		<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="/style/stile-ie.css" />
		<![endif]-->
		
		<!-- Regole di stile specifiche per ogni pagina -->
		<style type="text/css">
			<?php 
				switch($pagina) {
					case 'home':
						echo '';
					break;
					case 'chi_siamo':
						echo '';
					break;
					case 'il_locale':
						echo '';
					break;
					case 'eventi':
						echo '';
					break;
					case 'prenota':
						echo '';
					break;
					case 'mappa':
						echo '';
					break;
					case 'contatti':
						echo '';	
					break;
					case 'il_nostro_menu':
						echo '';
					break;
					case 'specialita':
						echo '';
					break;
					case 'i_nostri_vini':
						echo '';
					break;
					case 'link_suggeriti':
						echo '';
					break;
					case 'mappa_del_sito':
						echo '';
					break;
					default:
						echo '';
					break;
						}
				?>
		</style> 
	</head>
	<!-- fine tag head -->