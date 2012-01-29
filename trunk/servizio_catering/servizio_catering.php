<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Home page";
$pagina = "home_catering";
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
					<li class="current_page_item"><a href="#" class="first">Homepage catering</a></li>
					<li><a href="/servizio_catering/prenota/prenota.php">Prenota il tuo catering</a></li>
					<li><a href="/servizio_catering/mappa/mappa.php">Mappa</a></li>
					<li><a href="/servizio_catering/contatti/contatti.php">Contatti</a></li>
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
							<h2><a title="Vai al sito del Quinto Recinto" href="../index.php">Il V Recinto</a></h2>
						</li>
						<li>
							<h2><a title="Vai alla sezione: prenota il tuo catering" href="/servizio_catering/prenota/prenota.php">Prenota il catering</a></h2>
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