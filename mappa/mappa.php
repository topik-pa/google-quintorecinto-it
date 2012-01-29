<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Home page";
$pagina = "mappa";
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
					<li><a href="/eventi/eventi.php">Eventi</a></li>
					<li><a href="/prenota/prenota.php">Prenota</a></li>
					<li class="current_page_item"><a href="#">Mappa</a></li>
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
						<h2 class="title"><a href="#">Welcome to Domesticated</a></h2>
						<div class="entry">
							<p>This is <strong>Domesticated</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  The slideshow uses photos from <a href="http://www.pdphoto.org">PDPhoto.org</a> and is powered by Slidertron (a jQuery plugin by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a>). This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions</a> license, so you’re pretty much free to do whatever you want with it  (even use it commercially) provided you keep the links in the footer  intact. Aside from that, have fun with it :) </p>

							<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Largo+dei+Pecile,+3,+33100+Udine+(Quinto+Recinto+Di+Luca+Sabbadini+%26+C.+S.N.C.+-+Bar+Enoteca+Ristorantino)&amp;sll=46.064116,13.23202&amp;sspn=0.010973,0.020299&amp;ie=UTF8&amp;hq=&amp;hnear=Largo+dei+Pecile,+3,+33100+Udine,+Friuli-Venezia+Giulia&amp;ll=46.06412,13.232002&amp;spn=0.028586,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=Largo+dei+Pecile,+3,+33100+Udine+(Quinto+Recinto+Di+Luca+Sabbadini+%26+C.+S.N.C.+-+Bar+Enoteca+Ristorantino)&amp;sll=46.064116,13.23202&amp;sspn=0.010973,0.020299&amp;ie=UTF8&amp;hq=&amp;hnear=Largo+dei+Pecile,+3,+33100+Udine,+Friuli-Venezia+Giulia&amp;ll=46.06412,13.232002&amp;spn=0.028586,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Visualizzazione ingrandita della mappa</a></small>
						</div>
					</div>
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