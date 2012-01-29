<!-- Form per prenotare (template) -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 31 dic 2010 -->
					<div id="form_prenotazione">
						<p class="p1">
							<span>Utilizza il form sottostante per contattarci.</span>
						</p>
						<form class="form" id="formContatti" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<fieldset>
								<legend>Contatti</legend>
								<p><strong><label for="nome_contatto">Nome:</label></strong><br /><input type="text" id="nome_contatto" name="nome_contatto" size="30" /></p>
								<p><strong><label for="email_contatto">E-mail</label></strong><br /><input type="text" id="email_contatto" name="email_prenotazione" size="30" /></p>
								<p><strong><label for="messaggio_contatto">Messaggio:</label></strong><br /><textarea  id="messaggio_contatto" name="messaggio_contatto" rows="5" cols="30">Inserisci qui il tuo messaggio</textarea></p>
								<p><input type="submit" name="invia_messaggio" value="Invia" /></p>
							</fieldset>
						</form>
					</div>
					<!-- Fine form prenotazione -->