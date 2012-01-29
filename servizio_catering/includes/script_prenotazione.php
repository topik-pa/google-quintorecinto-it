<!-- Form per prenotare (script)-->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php

function escape_data($data) {		# Funzione per la gestione dei dati ricevuti dalle form HTML

	if (ini_get('magic_quotes_gpc')) {	# Controllo se è attivata la modaltà Magic Quotes (che immette dei caratteri "|" prima di eventuali apici
		$data=stripslashes($data);	# Tolgo i caratteri "|" inseriti da Magic Quotes con la funzione stripslashes
		}
	return $data; # Ritorno la stringa formattata correttamente
	}


if (isset($_POST['invia_prenotazione'])) {		# Verifico l'attivazione del pulsante "Registrati" della form
	
	if (eregi ("^[[:alpha:].' -]{2,15}$", stripslashes(trim($_POST['nome_prenotazione'])))) {	# Validazione dei dati in input tramite espressioni regolari e funzioni apposite di PHP
		$fn=escape_data($_POST['nome_prenotazione']);						# Passaggio dei dati in input alla funzione escape_data per l'elaborazione
		}
	else {
		$fn=FALSE;									# Nel caso i dati non siano validi
		echo '<p class="msg_errore">Attenzione: NOME non valido<br /></p>';
		}
		
	if (eregi ("^[[:alpha:].' -]{2,30}$", stripslashes(trim($_POST['cognome_prenotazione'])))) {		# Last name
		$ln=escape_data($_POST['cognome_prenotazione']);
		}
	else {
		$ln=FALSE;
		echo '<p class="msg_errore">Attenzione: COGNOME non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$", stripslashes(trim($_POST['email_prenotazione'])))) {	# E-mail
		$e=escape_data($_POST['email_prenotazione']);
		}
	else {
		$e=FALSE;
		echo '<p class="msg_errore">Attenzione: E-MAIL non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:].' -]{2,30}$", stripslashes(trim($_POST['telefono_prenotazione'])))) {		# Telefono
		$tel=escape_data($_POST['telefono_prenotazione']);
		}
	else {
		$tel=FALSE;
		echo '<p class="msg_errore">Attenzione: NUMERO DI TELEFONO non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:].' -/]{2,30}$", stripslashes(trim($_POST['giorno_prenotazione'])))) {		# Giorno
		$date=escape_data($_POST['giorno_prenotazione']);
		}
	else {
		$date=FALSE;
		echo '<p class="msg_errore">Attenzione: DATA DI PRENOTAZIONE non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:].' -:]{2,30}$", stripslashes(trim($_POST['ora_prenotazione'])))) {		# Ora prenotazione
		$ora=escape_data($_POST['ora_prenotazione']);
		}
	else {
		$ora=FALSE;
		echo '<p class="msg_errore">Attenzione: ORARIO DI PRENOTAZIONE non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:]]{1,30}$", stripslashes(trim($_POST['posti_prenotazione'])))) {		# Posti
		$posti=escape_data($_POST['posti_prenotazione']);
		}
	else {
		$posti=FALSE;
		echo '<p class="msg_errore">Attenzione: NUMERO DI POSTI da prenotare non valido<br /></p>';
		}

	if (eregi ("^[[:alpha:].' -]{2,500}$", stripslashes(trim($_POST['note_prenotazione'])))) {	#  Eventuali note
		$note=escape_data($_POST['note_prenotazione']);						
		}
	else {
		$note='nessuna nota aggiuntiva';							# Nel caso non ci siano altre note
		}

	if ($fn && $ln && $e && $tel && $date && $ora && $posti) {					# Se i dati sono stati inseriti correttamente...

     		$ref = $_SERVER['HTTP_REFERER'];	# Raccolgo dati generali
     		$ua = $_SERVER['HTTP_USER_AGENT'];
     		$ip = $_SERVER['REMOTE_ADDR'];
     		$sn = $_SERVER['SERVER_NAME'];
			     
     		$obj = 'BLANCENERI.IT: nuova prenotazione!';	# Compongo il messaggio
     		$msg = 'Nuova prenotazione da un utente del sito' . "\n\r";
    	 	$msg .= 'NOME e COGNOME:' . "\n" . $fn . " " . $ln . "\n\r";
     		$msg .= 'EMAIL:' . "\n" . $e . "\n\r\n\r";
     		$msg .=  'TELEFONO:' . $tel . "\n\r\n\r";
		$msg .=  'DATA PRENOTAZIONE:' . $date . "\n\r\n\r";
		$msg .=  'ORA PRENOTAZIONE:' . $ora . "\n\r\n\r";
		$msg .=  'NUMERO POSTI:' . $posti . "\n\r\n\r";
		$msg .=  'ALTRE NOTE:' . $note . "\n\r\n\r";
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
