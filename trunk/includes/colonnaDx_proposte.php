<!-- Colonna destra del sito -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<!-- Contenuto della colonna destra per pagine "Le nostre proposte" -->
					<div id="colonnaDx_proposte">
						<div id="titolo_colonnaDx_proposte">
							<span>Le nostre proposte</span>
						</div>
						<div id="wrapper_colonnaDx_proposte">
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

						<?php 
							switch($pagina) {					
								case 'il_nostro_menu':
									echo '
										<div class="banner" id="i_nostri_vini">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="M" tabindex="2" title="Vai all pagina: I nostri vini" href="/i_nostri_vini/i_nostri_vini.php">I nostri vini</a>
											</div>	
										</div>
										<div class="banner" id="le_nostre_specialita">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="L" tabindex="1" title="Vai alla pagina: Specialit&agrave;" href="/specialita/specialita.php">Specialit&agrave;</a>
											</div>	
										</div>
									';
								break;
								case 'specialita':
									echo '
										<div class="banner" id="il_nostro_menu">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="I" tabindex="0" title="Vai alla pagina del men&ugrave;" href="/il_nostro_menu/il_nostro_menu.php">Il nostro men&ugrave;</a>
											</div>	
										</div>
										<div class="banner" id="i_nostri_vini">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="M" tabindex="2" title="Vai all pagina: I nostri vini" href="/i_nostri_vini/i_nostri_vini.php">I nostri vini</a>
											</div>	
										</div>
									';
								break;
								case 'i_nostri_vini':
									echo '
										<div class="banner" id="il_nostro_menu">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="I" tabindex="0" title="Vai alla pagina del men&ugrave;" href="/il_nostro_menu/il_nostro_menu.php">Il nostro men&ugrave;</a>
											</div>	
										</div>
										<div class="banner" id="le_nostre_specialita">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="L" tabindex="1" title="Vai alla pagina: Specialit&agrave;" href="/specialita/specialita.php">Specialit&agrave;</a>
											</div>	
										</div>
									';
								break;
								default:
									echo '
										<div class="banner" id="il_nostro_menu">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="I" tabindex="0" title="Vai alla pagina del men&ugrave;" href="/il_nostro_menu/il_nostro_menu.php">Il nostro men&ugrave;</a>
											</div>	
										</div>
										<div class="banner" id="i_nostri_vini">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="M" tabindex="2" title="Vai all pagina: I nostri vini" href="/i_nostri_vini/i_nostri_vini.php">I nostri vini</a>
											</div>	
										</div>
										<div class="banner" id="le_nostre_specialita">
											<img class="img_banner" alt="Immagine per il titolo del banner" src="/img/fakeO.jpg" />
											<div class="banner_text">
												<a accesskey="L" tabindex="1" title="Vai alla pagina: Specialit&agrave;" href="/specialita/specialita.php">Specialit&agrave;</a>
											</div>	
										</div>
									';
								break;
							}
						?>
						</div>
					</div>
					<!-- Fine colonna destra -->