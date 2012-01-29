<!-- Header delle pagine-->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<!-- Header della pagina -->
					<div id="pageHeader">
					<?php
						if($pagina == 'home') {
						echo '<h1 id="titoloPrincipale" title="Vai alla home page"><span>Quinto recinto</span></h1>';
						echo '<h2 id="sottotitoloPrincipale" title="Vai alla home page"><span>dolor sit amet</span></h2>';
						echo '<!-- <img alt="Immagine logo" src="/img/logo.png" /> -->';
						echo '<!-- <img alt="Immagine titolo" src="/img/titolo.png"/>-->';
						}
						else {
						echo '<a title="Vai alla home page" href="/index.php"><h1 id="titoloPrincipale" title="Vai alla home page"><span>Quinto recinto</span></h1></a>';
						echo '<a title="Vai alla home page" href="/index.php"><h2 id="sottotitoloPrincipale" title="Vai alla home page"><span>dolor sit amet</span></h2></a>';
						echo '<!-- <a id="logo" title="Vai alla home page" href="/index.php"><img alt="Immagine logo" src="/img/logo.png" />Logo</a> -->';
						echo '<!-- <a id="titoloImg" title="Vai alla home page" href="/index.php"><img alt="Immagine titolo" src="/img/titolo.png" />Titolo</a>-->';
						}	
					?>					
					</div>
					<!-- fine Header della pagina -->
