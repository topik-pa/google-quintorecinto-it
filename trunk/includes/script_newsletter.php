<!-- Form per newsletter (script) -->
					<!-- Autore: Marco Pavan - pavan.marco@email.it -->
					<!-- Data: 28 sett 2010 -->
					<!-- Inserimento script per gestire la newsletter -->
						<?php	
						/* Controlli per il campo Newsletter */
						if(isset($_POST['submit_newsletter'])) {
							$emailPattern='/^[^@\s<&>(){}\'\,\[\]]+@([-a-z0-9]+\.)+[a-z]{2,}$/i';
							$postRules = '|^[a-zA-Z\s*\_\,\.\-\\\'\\\"\?\!\;\:\à\è\ì\ò\ù\é\À\È\É\Ì\Ò\Ù\ñ\Ñ\(\)\[\]\0-9]*$|';
							$clean = array();	
						
							$clean['email'] = preg_match($emailPattern, $_POST['email']) ? $_POST['email'] : 'false';	//valuto i dati in input del campo email
							/*$clean['name'] = preg_match($postRules, $_POST['name']) ? $_POST['name'] : 'false';
							$clean['message'] = preg_match($postRules, $_POST['message']) ? $_POST['message'] : 'false';*/
									
							if(array_keys($clean, 'false')) {
							$exitMessage = 'Dati non validi, per favore, ricontrolla';
							} 
							else {
							$ref = $_SERVER['HTTP_REFERER'];
							$ua = $_SERVER['HTTP_USER_AGENT'];
							$ip = $_SERVER['REMOTE_ADDR'];
							$sn = $_SERVER['SERVER_NAME'];
									
							$obj = 'SGUAZZI.IT: nuova mail per la newsletter';
							$msg = 'Nuovo indirizzo di posta per la newsletter.' . $clean['email'] . "\n\r";
							/*$msg = 'NOME e COGNOME:' . "\n" . $clean['name'] . "\n\r";
							$msg .= 'MESSAGGIO:' . "\n" . $clean['message'] . "\n\r\n\r";*/
							$msg .=  'INFO AGGIUNTIVE:' . "\n";
							$msg .= 'ip address: ' . $ip . "\n";
							$msg .= 'user-agent: ' . $ua . "\n";
							$msg .= 'http referer: ' . $ref . "\n\r";
							$replyto = $clean['email'];
									
							$headers = 'From: ' . $replyto . "\r\n";
							$headers .= 'Reply-To:' . $replyto . "\r\n";
							$headers .= 'X-Mailer: PHP/' . phpversion();
							$mail = 'pavan.marco@email.it'; //indirizzi a cui spedire 
							$wmsg =  wordwrap($msg, 70);
							mail($mail,$obj,$wmsg,$headers); // invia la mail
							$exitMessage = 'Messaggio inviato, grazie!';
							}
						}
						?>
						<!-- Fine script per gestire la newsletter-->