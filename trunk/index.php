<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Home page";
$pagina = "home";
?>

<!-- Dichiarazione del DOCTYPE -->
<?php include('./includes/doctype.php'); ?>

<!-- Corpo del documento -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	
	
	<?php include('./includes/tag_head.php'); ?>
	<body>	
		<div id="header">
			<div id="logo">
				<h1><a href="#">QUINTO RECINTO</a></h1>
				<div><p><em><a href="#">Wine bar &amp; Ristorantino</a></em></p></div>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#" class="first">Homepage</a></li>
					<li><a href="/chi_siamo/chi_siamo.php">Chi siamo</a></li>
					<li><a href="/il_locale/il_locale.php">Il locale</a></li>
					<li><a href="/eventi/eventi.php">Eventi</a></li>
					<li><a href="/prenota/prenota.php">Prenota</a></li>
					<li><a href="/mappa/mappa.php">Mappa</a></li>
					<li><a href="/contatti/contatti.php">Contatti</a></li>
				</ul>
			</div>
			<!-- end #menu -->
		</div>
		<!-- end #header -->
		<hr />
		<div id="wrapper">
			<!-- end #logo -->
			<div id="two-columns">
				<div class="col1">
					<div id="foobar">
						<div class="navigation"> <a href="#" class="first">[ &lt;&lt; ]</a> &nbsp; <a href="#" class="previous">[ &lt; ]</a> &nbsp; <a href="#" class="next">[ &gt; ]</a> &nbsp; <a href="#" class="last">[ &gt;&gt; ]</a> </div>
						<div class="viewer">
							<div class="reel">
								<div class="slide"> <img src="images/1.jpg" alt=""> <span>This is the first slide.</span> </div>
								<div class="slide"> <img src="images/2.jpg" alt=""> <span>This is the second slide.</span> </div>
								<div class="slide"> <img src="images/3.jpg" alt=""> <span>This is the third slide.</span> </div>
							</div>
						</div>
					</div>
					<script type="text/javascript">
		
								$('#foobar').slidertron({
									viewerSelector:			'.viewer',
									reelSelector:			'.viewer .reel',
									slidesSelector:			'.viewer .reel .slide',
									navPreviousSelector:	'.previous',
									navNextSelector:		'.next',
									navFirstSelector:		'.first',
									navLastSelector:		'.last'
								});
								
							</script>
				</div>
				<div class="col2">
					<blockquote>&#8220;&nbsp;Pellentesque ornare orcidsin consectetuer hendrerit, urna elit eleifend consectetuer&nbsp;&#8221;</blockquote>
				</div>
			</div>
		</div>
		<div id="page">
			<div id="page-bgtop">
				<div id="content">
					<div class="post">
						<h2 class="title">Welcome to Domesticated</h2>
						<div class="entry">
							<p>This is <strong>Domesticated</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  The slideshow uses photos from <a href="http://www.pdphoto.org">PDPhoto.org</a> and is powered by Slidertron (a jQuery plugin by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a>). This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions</a> license, so you’re pretty much free to do whatever you want with it  (even use it commercially) provided you keep the links in the footer  intact. Aside from that, have fun with it :) </p>
						</div>
					</div>
					<div class="post">
						<h2 class="title">Lorem ipsum sed aliquam</h2>
						<div class="entry">
							<p>Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Suspendisse iaculis mauris nec lorem.<br />
							</p>
						</div>
					</div>
					<div class="post">
						<h2 class="title">Lorem ipsum sed aliquam</h2>
						<div class="entry">
							<p>Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2><a title="Vai alla sezione: Servizio catering" href="/servizio_catering/servizio_catering.php">Il servizio catering</a></h2>
						</li>
						<li>
							<h2>Le nostre proposte</h2>
							<ul>
								<li class="subsection_link"><a title="Vai alla pagina del men&ugrave;" href="/il_nostro_menu/il_nostro_menu.php">Il nostro men&ugrave;</a></li>
								<li class="subsection_link"><a title="Vai all pagina: I nostri vini" href="/i_nostri_vini/i_nostri_vini.php">I nostri vini</a></li>
								<li class="subsection_link"><a title="Vai alla pagina: Specialit&agrave;" href="/specialita/specialita.php">Le nostre specialit&agrave;</a></li>
							</ul>
						</li>
						<li>
							<h2>Prossimi eventi</h2>
							<ul>
								<?php
									// The file news.xml contains an XML document with a root element
									if (file_exists('./eventi/news.xml')) {
										$xml_BANNER = simplexml_load_file('./eventi/news.xml');
										$data_oggi = new DateTime('NOW');
										
										// For each <evento> node
										foreach ($xml_BANNER->evento as $evento_BANNER) {
											$codice_BANNER = $evento_BANNER->codiceEvento;
											$titolo_BANNER = $evento_BANNER->titolo;
											$data_BANNER = $evento_BANNER->data;
										
										//Creo un oggetto data con data dell'evento corrente
											try {
												$data_evento = new DateTime($data_BANNER);
											} 
											catch (Exception $e) {
												echo $e->getMessage();
												exit(1);
											}
										
											//Verifico se l'evento è già passato o meno
											if($data_evento > $data_oggi) {		//Evento futuro
												echo "<li><a href=\"/eventi/pagine_evento/evento_$codice_BANNER.php\">" . $titolo_BANNER . ' - ' . $data_BANNER . '</a></li>';	
											} 
										}
									}
									else {
										exit('Failed to open file.');
									}
								?>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
		<?php include('./includes/footer.php'); ?>
		<?php include('./includes/statCounterCode.php'); ?>
	</body>
</html>
<!--fine home page -->