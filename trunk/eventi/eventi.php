<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Home page";
$pagina = "eventi";
?>

<!-- Dichiarazione del DOCTYPE -->
<?php include('../includes/doctype.php'); ?>

<!-- Corpo del documento -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	
	
	<?php include('../includes/tag_head.php'); ?>
	<body>	
		<div id="header">
			<div id="logo">
				<h1><a href="/index.php">QUINTO RECINTO</a></h1>
				<div><p><em><a href="/index.php">Wine bar &amp; Ristorantino</a></em></p></div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="/index.php" class="first">Homepage</a></li>
					<li><a href="/chi_siamo/chi_siamo.php">Chi siamo</a></li>
					<li><a href="/il_locale/il_locale.php">Il locale</a></li>
					<li class="current_page_item"><a href="#">Eventi</a></li>
					<li><a href="/prenota/prenota.php">Prenota</a></li>
					<li><a href="/mappa/mappa.php">Mappa</a></li>
					<li><a href="/contatti/contatti.php">Contatti</a></li>
				</ul>
			</div>
			<!-- end #menu -->
		</div>
		<!-- end #header -->
		<hr />
		<div id="page">
			<div id="page-bgtop">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Eventi al V Recinto</a></h2>
						<p>Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Suspendisse iaculis mauris nec lorem.<br />
						</p>
					</div>
					<?php
					// The file news.xml contains an XML document with a root element
						if (file_exists('news.xml')) {
							$xml = simplexml_load_file('news.xml');
							$evento = $xml->evento;
							for ($i = count($evento) - 1; $i >= 0; $i--) {
								$codice=$evento[$i]->codiceEvento;
								$titolo=$evento[$i]->titolo;
								$data=$evento[$i]->data;
								$ora=$evento[$i]->ora;
								$luogo=$evento[$i]->luogo;
								$contatto=$evento[$i]->contatto;
								$link1=$evento[$i]->link1;
								$descrizione=$evento[$i]->descrizione;
								$descrizioneBreve=$evento[$i]->descrizioneBreve;
								$immagine1=$evento[$i]->immagine1;
								$immagine2=$evento[$i]->immagine2;
								$immagine3=$evento[$i]->immagine3;
								$immagine4=$evento[$i]->immagine4;
								$immagine5=$evento[$i]->immagine5;
									
								//Scrivo la news
								echo '<div class="post">';
								echo '<p class="meta"><em><span class="date">' . $data . '</span>' . $ora . " " . $luogo . '</em></p>';
								echo "<h2 class=\"title\"><a href=\"./pagine_evento/evento_$codice.php\">" . $titolo . "</a></h2>";
								echo '<div class="entry">';
								echo '<p>';
								echo $descrizioneBreve;
								echo '</p>';
								echo '</div>';
								echo '</div>';
								
							}
						}							
						else {
							exit('Apertura file XML fallita.');
						}
					?>
				</div>
				<!-- end #content -->
				<!--<div id="sidebar">
					<ul>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
						</li>
						<li>
							<h2>Pellenteque ornare </h2>
							<ul>
								<li><a href="#">Nec metus sed donec</a></li>
								<li><a href="#">Magna lacus bibendum mauris</a></li>
								<li><a href="#">Velit semper nisi molestie</a></li>
								<li><a href="#">Eget tempor eget nonummy</a></li>
								<li><a href="#">Nec metus sed donec</a></li>
								<li><a href="#">Velit semper nisi molestie</a></li>
								<li><a href="#">Eget tempor eget nonummy</a></li>
								<li><a href="#">Nec metus sed donec</a></li>
							</ul>
						</li>
						<li>
							<h2>Turpis nulla</h2>
							<ul>
								<li><a href="#">Nec metus sed donec</a></li>
								<li><a href="#">Magna lacus bibendum mauris</a></li>
								<li><a href="#">Velit semper nisi molestie</a></li>
								<li><a href="#">Eget tempor eget nonummy</a></li>
								<li><a href="#">Nec metus sed donec</a></li>
								<li><a href="#">Nec metus sed donec</a></li>
								<li><a href="#">Magna lacus bibendum mauris</a></li>
								<li><a href="#">Velit semper nisi molestie</a></li>
								<li><a href="#">Eget tempor eget nonummy</a></li>
								<li><a href="#">Nec metus sed donec</a></li>
							</ul>
						</li>
					</ul>
				</div>-->
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
		<?php include('../includes/footer.php'); ?>
		<?php include('../includes/statCounterCode.php'); ?>
	</body>
</html>
<!--fine home page -->