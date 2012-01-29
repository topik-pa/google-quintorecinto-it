<!-- Form per prenotare (template) -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<div id="form_prenotazione">
						<h3><span>Prenotazione</span></h3>
						<p class="p1">
							<span>Utilizza il form sottostante se vuoi prenotare da noi. Attenzione: lascia almeno un contatto mail o telefono per permetterci di confermare la tua prenotazione!</span>
						</p>
						<form class="form" id="formPrenotazione" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<fieldset>
								<legend>Prenotazione</legend>
								<p><strong><label for="nome_prenotazione">Nome:</label></strong><br /><input type="text" id="nome_prenotazione" name="nome_prenotazione" size="30" /></p>
								<p><strong><label for="cognome_prenotazione">Cognome:</label></strong><br /><input type="text" id="cognome_prenotazione" name="cognome_prenotazione" size="30" /></p>
								<p><strong><label for="email_prenotazione">E-mail</label></strong><br /><input type="text" id="email_prenotazione" name="email_prenotazione" size="30" /></p>
								<p><strong><label for="telefono_prenotazione">Telefono:</label></strong><br /><input type="text" id="telefono_prenotazione" name="telefono_prenotazione" size="30" /></p>
								<p><strong><label for="giorno_prenotazione">Prenotazione per il giorno:</label></strong><br /><input type="text" id="giorno_prenotazione" name="giorno_prenotazione" size="15" />	(es: gg/mm/aaaa)</p>
								<p><strong><label for="ora_prenotazione">Ora di arrivo:</label></strong><br /><input type="text" id="ora_prenotazione" name="ora_prenotazione" size="15" />	(es:  hh.mm)</p>
								<p><strong><label for="posti_prenotazione">Numero di persone:</label></strong><br /><input type="text" id="posti_prenotazione" name="posti_prenotazione" size="10" /></p>
								<p><strong><label for="note_prenotazione">Altre note:</label></strong><br /><textarea  id="note_prenotazione" name="note_prenotazione" rows="5" cols="30">Inserisci qui eventuali altre note</textarea></p>
								<p><input type="submit" name="invia_prenotazione" value="Invia" /></p>
							</fieldset>
						</form>
					</div>
					<!-- Fine form prenotazione -->