<!-- Colonna destra del sito -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<!-- Contenuto della colonna destra -->
					<div id="colonnaDx_eventi">
						<div id="titolo_colonnaDx_eventi">
							<span>Gli eventi</span>
						</div>	
						<div id="wrapper_colonnaDx_proposte">
							<div class="banner">
<!-- 								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" /> -->
								<h3>Prossimamente</h3>
									<?php
										// The file news.xml contains an XML document with a root element
										if (file_exists('news.xml')) {
											$xml_BANNER = simplexml_load_file('news.xml');
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
														echo '<p><strong><a href="' . $_SERVER['PHP_SELF'] . '#' . $codice_BANNER . '">' . $titolo_BANNER . '</a></strong></p>';
														echo '<p>' . $data_BANNER . '</p>';
												} 
											}
										}
										else {
											exit('Failed to open file.');
										}
									?>
							</div>		
							<div class="banner">
<!-- 								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" /> -->
								<h3>Eventi passati</h3>
									<?php
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
												if($data_evento < $data_oggi) {		//Evento futuro
														echo '<p><strong><a href="' . $_SERVER['PHP_SELF'] . '#' . $codice_BANNER . '">' . $titolo_BANNER . '</a></strong></p>';
														echo '<p>' . $data_BANNER . '</p>';
												} 
											
										
										else {
											//exit('Failed to open fileee.');
										}
	}
									?>
							</div>	
						</div>	
					</div>	
					<!-- Fine colonna destra -->