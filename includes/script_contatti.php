<!-- Form per prenotare (script)-->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 31 dic 2010 -->
<?php

function escape_data($data) {		# Funzione per la gestione dei dati ricevuti dalle form HTML

	if (ini_get('magic_quotes_gpc')) {	# Controllo se è attivata la modaltà Magic Quotes (che immette dei caratteri "|" prima di eventuali apici
		$data=stripslashes($data);	# Tolgo i caratteri "|" inseriti da Magic Quotes con la funzione stripslashes
		}
	return $data; # Ritorno la stringa formattata correttamente
	}


if (isset($_POST['invia_messaggio'])) {		# Verifico l'attivazione del pulsante "Invia" della form
	
	if (eregi ("^[[:alpha:].' -]{2,15}$", stripslashes(trim($_POST['nome_contatto'])))) {	# Validazione dei dati in input tramite espressioni regolari e funzioni apposite di PHP
		$fn=escape_data($_POST['nome_contatto']);						# Passaggio dei dati in input alla funzione escape_data per l'elaborazione
		}
	else {
		$fn=FALSE;									# Nel caso i dati non siano validi
		echo '<p class="msg_errore">Attenzione: NOME non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$", stripslashes(trim($_POST['email_contatto'])))) {	# E-mail
		$e=escape_data($_POST['email_contatto']);
		}
	else {
		$e=FALSE;
		echo '<p class="msg_errore">Attenzione: E-MAIL non valida<br /></p>';
		}

	if (eregi ("^[[:alpha:].' -]{2,250}$", stripslashes(trim($_POST['messaggio_contatto'])))) {	#  Messaggio
		$text=escape_data($_POST['messaggio_contatto']);						
		}
	else {
		$text='nessun messaggio inserito';							# Nel caso non ci sia un messaggio
		}

	if ($fn && $e) {					# Se i dati sono stati inseriti correttamente...

     		$ref = $_SERVER['HTTP_REFERER'];	# Raccolgo dati generali
     		$ua = $_SERVER['HTTP_USER_AGENT'];
     		$ip = $_SERVER['REMOTE_ADDR'];
     		$sn = $_SERVER['SERVER_NAME'];
			     
     		$obj = 'BLANCENERI.IT: nuova messaggio!';	# Compongo il messaggio
     		$msg = 'Nuova messaggio da un utente del sito' . "\n\r";
    	 	$msg .= 'NOME:' . "\n" . $fn . "\n\r";
     		$msg .= 'EMAIL:' . "\n" . $e . "\n\r\n\r";
		$msg .=  'MESSAGGIO:' . $text . "\n\r\n\r";
     		$msg .= 'ip address: ' . $ip . "\n";
     		$msg .= 'user-agent: ' . $ua . "\n";
     		$msg .= 'http referer: ' . $ref . "\n\r";

		$replyto = $e;
			     
     		$headers = 'From: ' . $replyto . "\r\n";
     		$headers .= 'Reply-To:' . $replyto . "\r\n";
     		$headers .= 'X-Mailer: PHP/' . phpversion();

     		$mail = 'pavan.marco@email.it'; //indirizzi a cui spedire 
		$mail2 = '';
		$mail3 = '';
		$mail4 = '';

     		$wmsg =  wordwrap($msg, 70);
     		mail($mail,$obj,$wmsg,$headers); // invia la mail
		mail($mail2,$obj,$wmsg,$headers); // invia la mail
		mail($mail3,$obj,$wmsg,$headers); // invia la mail
		mail($mail4,$obj,$wmsg,$headers); // invia la mail

     		$exitMessage = '<p class="msg_errore">Messaggio inviato, grazie!</p>';
		echo $exitMessage;	
	}
	
}

?>
<!-- Fine script prenotazione -->
