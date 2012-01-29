<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Mappa del sito";
$pagina = "catering_mappa_del_sito";
?>

<!-- Dichiarazione del DOCTYPE -->
<?php include('../includes/doctype.php'); ?>

<!-- Corpo del documento -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	
	
	<?php include('../includes/tag_head.php'); ?>
	<body>	
		<!-- Link per raggiungere direttamente il contenuto principale saltando le voci del menù -->
		<p id="vaiAlCorpoCentrale"><a href="#supportingText">Vai al contenuto principale</a></p>	
		<!-- Wrapper del contenuto della pagina -->
		<div id="container">
			<!-- Introduzione -->
			<div id="intro"> 
				<div id="intro_inner1">
					<?php include('../includes/menu_servizio.php'); ?>			
					<?php include('../includes/searchEngine_interno.php'); ?>
					<!-- Breve riassunto degli argomenti o spazio per avvisi -->				
					<!--<div id="quickSummary">-->
						<!--<p class="p1"><span>Quick summary titolo</span></p>
						<p class="p2"><span>Quick summary testo</span></p>-->	
					<!--</div>-->
					<!-- Fine riassunto degli argomenti o avvisi -->		
					<div class="clear_both"></div>
				</div>
				<div id="intro_inner2">	
					<?php include('../includes/menu_orizzontale.php'); ?>									
					<?php include('../includes/pageHeader.php'); ?>
					<!-- Breadcrums -->
					<!--<div id="breadcrums">	
						<p id="sei_in"><span>Sei in:</span></p>
						<ul id="listaBreadcrums">
							<li id="bread_1"><a title="Vai in home page" href="index.php">Home</a></li>
							<li id="bread_2"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 2</a></li>
							<li id="bread_3"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 3</a></li>
						</ul>
					</div>-->	
					<!-- Fine breadcrums -->
					<!-- Breve preambolo -->
					<!--<div id="preamble"> -->
						<!--<h3><span>Titolo preambolo</span></h3>
						<p class="p1"><span>Preambolo paragrafo 1</span></p>
						<p class="p2"><span>Preambolo paragrafo 2</span></p>
						<p class="p3"><span>Preambolo paragrafo 3</span></p>-->
					<!--</div>-->			
					<!-- Fine preamble -->
				</div>
			</div>			
			<!-- Fine introduzione -->
			<div id="separator_1"><div id="inner1"></div></div>
			<div id="separator_2"><div id="inner2"></div></div>
			<!-- Wrapper corpo principale -->
			<div id="wrapper_corpo_principale">
				<div id="wrapper_inner">
					<?php /*include('../includes/colonnaSx.php');*/ ?>	
					<?php /*include('../includes/colonnaDx.php');*/ ?>	
					<!-- Testo principale del documento -->
					<div id="supportingText">
						<?php /*include('../includes/print_friendly.php');*/ ?>
						<!-- Indice argomenti del corpo centrale -->
						<!--<div id="indiceCorpoCentrale">-->
							<!--<ul id="listaIndiceCorpoCentrale">
								<li><a href="#explanation" title="Vai al paragrafo 1">Paragrafo 1</a></li>
								<li><a href="#participation" title="Vai al paragrafo 2">Paragrafo 2</a></li>
								<li><a href="#benefits" title="Vai al paragrafo 3">Paragrafo 3</a></li>
								<li><a href="#requirements" title="Vai al paragrafo 4">Paragrafo 4</a></li>
							</ul>-->
						<!--</div>-->
						<!-- Fine Indice argomenti del corpo centrale -->
						<!-- Lista Keywords -->
						<!--<div id="lista_keywords">
							<h6>Tag</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper orci eget sem dignissim nec ultrices ligula elementum</p>
						</div>-->
						<!-- Primo paragrafo -->
						<div id="explanation">
							<h3>Mappa del sito</h3>
							<h4>Tipologia pagine 1</h4>
							<ul>
								<li><a href="/index.php" title="Home page">Home page</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/chi_siamo/chi_siamo.php" title="Chi siamo">Chi siamo</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/il_locale/il_locale.php" title="Il nostro locale">Il nostro locale</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/eventi/eventi.php" title="Eventi">Eventi</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/prenota/prenota.php" title="Prenota">Prenota</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/mappa/mappa.php" title="Mappa">Mappa</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/contatti/contatti.php" title="Contatti">Contatti</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
							</ul>
							<h4>Tipologia pagine 2</h4>
							<ul>
								<li><a href="/il_nostro_menu/il_nostro_menu.php" title="Il nostro men&ugrave;">Il nostro men&ugrave;</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/specialita/specialita.php" title="Le nostre specialit&agrave;">Le nostre specialit&agrave;</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
								<li><a href="/i_nostri_vini/i_nostri_vini.php" title="I nostri vini">I nostri vini</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat enim. Cras in lorem orci. Curabitur iaculis adipiscing lacus ut venenatis.</p></li>
							</ul>
						</div>		
						<!-- Fine primo paragrafo -->
					</div>
					<!-- Fine div supportingText -->
					<div class="clear_both"></div>
				</div> <!--Fine wrapper inner-->
			</div> <!-- Fine wrapper coprpo centrale -->
			<div id="separator_3"><div id="inner3"></div></div>	
			<?php include('../includes/footer.php'); ?>
			<?php include('../includes/footer2.php'); ?>
		</div>		
		<!-- Fine container -->			
		<!-- Inserimento codice StatCounter -->
		<?php include('../includes/statCounterCode.php'); ?>
		<!-- Fine codice StatCounter -->
	</body>
</html>
<!--fine home page -->