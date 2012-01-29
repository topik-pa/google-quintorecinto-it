<!-- Colonna destra del sito -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<!-- Contenuto della colonna destra -->
					<div id="colonnaDx">
						<div id="titolo_colonnaDx">
							<span>Prossimi eventi</span>
						</div>
						<div id="wrapper_colonnaDx">
							<!--<div class="banner" id="aggiungi_ai_preferiti">
								<a href="javascript:Preferiti()">Aggiungi ai preferiti</a>
							</div>-->	
							<!--<div class="banner" id="social_banner">
								<h3>Seguici anche su...</h3>
								<div id="social_icons">
									<a href="#" title=""><img alt="Icona facebook" src="/img/fbIcon.jpg" /></a>&nbsp;
									<a href="#" title=""><img alt="Icona youtube" src="/img/ytIcon.jpg" /></a>&nbsp;
									<a href="#" title=""><img alt="Icona twitter" src="/img/twIcon.jpg" /></a>
								</div>
							</div>-->
							<div class="banner" id="prossimi_eventi">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
			<!-- 					<h3><a href="#">Prossimi eventi</a></h3> -->
								<div class="banner_text">
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
														echo "<p><strong><a href=\"/eventi/pagine_evento/evento_$codice_BANNER.php\">" . $titolo_BANNER . '</a></strong></p>';
														echo '<p>' . $data_BANNER . '</p>';
												} 
											}
										}
										else {
											exit('Failed to open file.');
										}
									?>
								</div>
							</div>
						</div>
						<div id="titolo_colonnaDx">
							<span>In evidenza</span>
						</div>
						<div id="wrapper_colonnaDx">
							<!--<div class="banner" id="aggiungi_ai_preferiti">
								<a href="javascript:Preferiti()">Aggiungi ai preferiti</a>
							</div>-->	
							<!--<div class="banner" id="social_banner">
								<h3>Seguici anche su...</h3>
								<div id="social_icons">
									<a href="#" title=""><img alt="Icona facebook" src="/img/fbIcon.jpg" /></a>&nbsp;
									<a href="#" title=""><img alt="Icona youtube" src="/img/ytIcon.jpg" /></a>&nbsp;
									<a href="#" title=""><img alt="Icona twitter" src="/img/twIcon.jpg" /></a>
								</div>
							</div>-->
							<div class="banner" id="il_nostro_menu">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
								<div class="banner_text">
									<a title="Vai alla pagina del men&ugrave;" href="/il_nostro_menu/il_nostro_menu.php">Il nostro men&ugrave;</a>
								</div>	
							</div>
							<div class="banner" id="i_nostri_vini">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
								<div class="banner_text">
									<a title="Vai all pagina: I nostri vini" href="/i_nostri_vini/i_nostri_vini.php">I nostri vini</a>
								</div>	
							</div>
							<div class="banner" id="le_nostre_specialita">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
								<div class="banner_text">
									<a title="Vai alla pagina: Specialit&agrave;" href="/specialita/specialita.php">Specialit&agrave;</a>
								</div>	
							</div>
							
							<div class="banner" id="banner_catering">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg"/>
								<div class="banner_text">
									<a title="Vai alla sezione: Servizio catering" href="/servizio_catering/servizio_catering.php">Servizio catering</a>
									<p>Pellentesque at pretium ante. Nulla ullamcorper hendrerit erat, non consectetur turpis lobortis eget. Phasellus vel urna est.</p>
								</div>
							</div>		
							<!--<div class="banner">
								<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
								<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
								<p>Pellentesque at pretium ante. Nulla ullamcorper hendrerit erat, non consectetur turpis lobortis eget. Phasellus vel urna est. Sed mi nunc, egestas sit amet feugiat sit amet, feugiat a elit.</p>
							</div>-->
						</div>
					</div>	
					<!-- Fine div colonnaDx -->