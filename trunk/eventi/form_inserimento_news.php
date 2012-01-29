<!-- Form per inserire una nuova news (template e logica back-end) -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 31 dic 2010 -->

<?php

function escape_data($data) {		# Funzione per la gestione dei dati ricevuti dalle form HTML

	if (ini_get('magic_quotes_gpc')) {	# Controllo se è attivata la modaltà Magic Quotes (che immette dei caratteri "|" prima di eventuali apici
		$data=stripslashes($data);	# Tolgo i caratteri "|" inseriti da Magic Quotes con la funzione stripslashes
		}
	return $data; # Ritorno la stringa formattata correttamente
	}


if (isset($_POST['invia_news'])) {		# Verifico l'attivazione del pulsante "Invia News" della form
	
												
	if (eregi ("^[[:alnum:] .',-;_:àèìòù]{1,50}$", stripslashes(trim($_POST['titolo_evento'])))) {	# Titolo evento - Validazione dei dati in input
		$titolo=escape_data($_POST['titolo_evento']);					# Passaggio dei dati in input alla funzione escape_data per l'elaborazione
		}
	else {
		$titolo=FALSE;									# Nel caso i dati non siano validi
		echo '<p class="msg_errore">Attenzione: TITOLO non valido<br /></p>';
		}
		
	if (eregi ("^[[:digit:]-]{1,10}$", stripslashes(trim($_POST['data_evento'])))) {		# Data
		$data=escape_data($_POST['data_evento']);
		}
	else {
		$data=FALSE;
		echo '<p class="msg_errore">Attenzione: DATA non valida<br /></p>';
		}

	if (eregi ("^[[:digit:]:]{0,50}$", stripslashes(trim($_POST['ora_evento'])))) {			# Ora
		$ora=escape_data($_POST['ora_evento']);
		}
	else {
		$ora=FALSE;
		echo '<p class="msg_errore">Attenzione: ORA non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:] .',-;_:]{0,50}$", stripslashes(trim($_POST['luogo_evento'])))) {	# Luogo
		$luogo=escape_data($_POST['luogo_evento']);
		}
	else {
		$luogo=FALSE;
		echo '<p class="msg_errore">Attenzione: LUOGO non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:] .',-;_:@]{0,50}$", stripslashes(trim($_POST['contatto_evento'])))) {	# Contatto
		$contatto=escape_data($_POST['contatto_evento']);
		}
	else {
		$contatto=FALSE;
		echo '<p class="msg_errore">Attenzione: CONTATTO non valido<br /></p>';
		}

	/*if (eregi ("^[[:alnum:].' -]{0,50}$", stripslashes(trim($_POST['link_evento_1'])))) {		# Link 1
		$link1=escape_data($_POST['link_evento_1']);
		}
	else {
		$link1=FALSE;
		echo '<p class="msg_errore">Attenzione: LINK 1 non valido<br /></p>';
		}*/

	if (eregi ("^[[:alnum:] .',-;_:!?*@#àèìòù]{2,100}$", stripslashes(trim($_POST['descrizioneBreve_evento'])))) {	# Descrizione breve
		$descrizioneBreve=escape_data($_POST['descrizioneBreve_evento']);
		}
	else {
		$descrizione=FALSE;
		echo '<p class="msg_errore">Attenzione: DESCRIZIONE BREVE non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:] .',-;_:!?*@#àèìòù]{2,100}$", stripslashes(trim($_POST['descrizione_evento'])))) {	# Descrizione
		$descrizione=escape_data($_POST['descrizione_evento']);
		}
	else {
		$descrizione=FALSE;
		echo '<p class="msg_errore">Attenzione: DESCRIZIONE non valida<br /></p>';
		}

	//Verifico la presenza dei dati obbligatori
	if ($titolo && $data && $descrizione && $descrizioneBreve)  {		# Se i dati obbligatori sono stati inseriti correttamente...

		//Gestisco le immagini inviate
		$percorso = "./img/";	//DEVE ESSERE SCRIVIBILE!!!!!
		$nome_immagine1 = ''; $nome_immagine2 = ''; $nome_immagine3 = ''; $nome_immagine4 = ''; $nome_immagine5 = ''; //Inizializzo le variabili per i nomi delle immagini
	
		//Carico sul server la prima immagine
		if (is_uploaded_file($_FILES['immagine1']['tmp_name'])) {
			//La sposto alla sua destinazione
			if (move_uploaded_file($_FILES['immagine1']['tmp_name'], $percorso.$_FILES['immagine1']['name'])) {
				//Ottengo il nome della immagine
				$nome_immagine1 = $_FILES['immagine1']['name'];
				echo '<p class="msg_conferma">Immagine 1 caricata correttamente</p>';
			}
			else {
				echo '<p  class="msg_errore">Si è verificato un errore durante il caricamento immagine 1. Immagine non inviata [cod. 1]:' . $_FILES["immagine1"]["error"] .'</p>';
			}
		}
		else {
			echo 'Immagine 1 non ricevuta!';
		}
	
		//Le altre immagini (stessa cosa...)
		if (is_uploaded_file($_FILES['immagine2']['tmp_name'])) {
			if (move_uploaded_file($_FILES['immagine2']['tmp_name'], $percorso.$_FILES['immagine2']['name'])) {
				$nome_immagine2 = $_FILES['immagine2']['name'];
				echo '<p class="msg_conferma">Immagine 2 caricata correttamente</p>';
			}
			else {
				echo '<p  class="msg_errore">Si è verificato un errore durante il caricamento immagine 2. Immagine non inviata [cod. 1]:' . $_FILES["immagine2"]["error"] .'</p>';
			}
		}
	
		if (is_uploaded_file($_FILES['immagine3']['tmp_name'])) {
			if (move_uploaded_file($_FILES['immagine3']['tmp_name'], $percorso.$_FILES['immagine3']['name'])) {
				$nome_immagine3 = $_FILES['immagine3']['name'];
				echo '<p class="msg_conferma">Immagine 3 caricata correttamente</p>';
			}
			else {
				echo '<p  class="msg_errore">Si è verificato un errore durante il caricamento immagine 3. Immagine non inviata [cod. 1]:' . $_FILES["immagine3"]["error"] .'</p>';
			}
		}
	
		if (is_uploaded_file($_FILES['immagine4']['tmp_name'])) {
			if (move_uploaded_file($_FILES['immagine4']['tmp_name'], $percorso.$_FILES['immagine4']['name'])) {
				$nome_immagine4 = $_FILES['immagine4']['name'];
				echo '<p class="msg_conferma">Immagine 4 caricata correttamente</p>';
			}
			else {
				echo '<p  class="msg_errore">Si è verificato un errore durante il caricamento immagine 4. Immagine non inviata [cod. 1]:' . $_FILES["immagine4"]["error"] .'</p>';
			}
		}
	
		if (is_uploaded_file($_FILES['immagine5']['tmp_name'])) {
			if (move_uploaded_file($_FILES['immagine5']['tmp_name'], $percorso.$_FILES['immagine5']['name'])) {
				$nome_immagine5 = $_FILES['immagine5']['name'];
				echo '<p class="msg_conferma">Immagine 5 caricata correttamente</p>';
			}
			else {
				echo '<p  class="msg_errore">Si è verificato un errore durante il caricamento immagine 5. Immagine non inviata [cod. 1]:' . $_FILES["immagine5"]["error"] .'</p>';
			}
		}
	
		#Aggiorno il file xml
		if (file_exists('news.xml')) { 
			$xml = simplexml_load_file("news.xml"); //This line will load the XML file.
			$sxe = new SimpleXMLElement($xml->asXML()); //In this line it create a SimpleXMLElement object with the source of the XML file.
			$now=time().microtime()*1000000;

			//The following lines will add a new child and others child inside the previous child created.
			$evento = $sxe->addChild("evento");
			$evento->addChild("codiceEvento", $now);	//codice univoco per ogni elemento "evento"
			$evento->addChild("titolo", $titolo);
			$evento->addChild("data", $data);
			$evento->addChild("ora", $ora);
			$evento->addChild("luogo", $luogo);
			$evento->addChild("contatto", $contatto);
			$evento->addChild("link1", $link1);
			$evento->addChild("descrizione", $descrizione);
			$evento->addChild("descrizioneBreve", $descrizioneBreve);	
			$evento->addChild("immagine1", $nome_immagine1);
			$evento->addChild("immagine2", $nome_immagine2);
			$evento->addChild("immagine3", $nome_immagine3);
			$evento->addChild("immagine4", $nome_immagine4);
			$evento->addChild("immagine5", $nome_immagine5);

			//This next line will overwrite the original XML file with new data added
			$sxe->asXML("news.xml");

			//Creo la pagina relativa all'evento
			$handle = fopen("./pagine_evento/evento_$now.php", "w+");
			$filename = "./pagine_evento/evento_$now.php";
			
			$parte1='		
				<!-- Pagina evento generata automaticamente -->
				<?php
				//Imposto due variabili di uso generale
				$titolo_pagina = "Template - Pagina evento";
				$pagina = "evento";
				?>
				
				<!-- Dichiarazione del DOCTYPE -->
				<?php include(\'../../includes/doctype.php\'); ?>
				<!-- Corpo del documento -->
				<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
					
					
					<?php include(\'../../includes/tag_head.php\'); ?>
					<body>	
						<div id="header">
							<div id="logo">
								<h1><a href="/index.php">QUINTO RECINTO</a></h1>
								<div><p><em><a href="/index.php">Wine bar &amp; Ristorantino</a></em></p></div>
							</div>
							<div id="menu">
								<ul>
									<li><a href="/index.php" class="first">Homepage</a></li>
									<li><a href="/chi_siamo.php">Chi siamo</a></li>
									<li><a href="/il_locale/il_locale.php">Il locale</a></li>
									<li><a href="/eventi/eventi.php">Eventi</a></li>
									<li><a href="/prenota/prenota.php">Prenota</a></li>
									<li><a href="/mappa/mappa.php">Mappa</a></li>
									<li><a href="/contatti/contatti.php">Contatti</a></li>
								</ul>
							</div>
							<!-- end #menu -->
						</div>
						<!-- end #header -->
						<hr />
			';
			
			$linkImg1 = "";
			$linkImg2 = "";
			$linkImg3 = "";
			$linkImg4 = "";
			$linkImg5 = ""; 
			if($nome_immagine1!='') {
				$linkImg1="<img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine1\" />";
			}
			if($nome_immagine2!='') {
				$linkImg2="<img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine2\" />";
			}
			if($nome_immagine3!='') {
				$linkImg3="<img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine3\" />";
			}
			if($nome_immagine4!='') {
				$linkImg4="<img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine4\" />";
			}
			if($nome_immagine5!='') {
				$linkImg5="<img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine5\" />";
			}
		
			$parte2="	
						<div id=\"page\">
							<div id=\"page-bgtop\">
								<div id=\"content\">
									<div><a href=\"/eventi/eventi.php\"><< Torna alla pagina Eventi</a></div>
									<div class=\"post\">
										<p class=\"meta\"><em><span class=\"date\">$data</span>$ora $luogo</em></p>
										<h2 class=\"title\">$titolo</h2>
										<div class=\"entry\"><p>$descrizione</p></div>
										<div>
											<span><strong>Contatto: </strong>$contatto</span><br/>
											<span><strong>Link: </strong>$link1</span><br/>
										</div>	
										<div class=\"galleria_immagini_evento\">
											$linkImg1
											$linkImg2
											$linkImg3
											$linkImg4
											$linkImg5
										<div>						
									</div>
								</div>
								<!-- end #content -->
								<div style=\"clear: both;\">&nbsp;</div>
							</div>
							<!-- end #page -->		
						</div>
			";
			
			$parte3='			
						<?php include(\'../includes/footer.php\'); ?>
						<?php include(\'../includes/statCounterCode.php\'); ?>
					</body>
				</html>
				<!--fine home page -->	
			';		
			

			// Let's make sure the file exists and is writable first.
			if (is_writable($filename)) {
		
			// In our example we're opening $filename in append mode.
			// The file pointer is at the bottom of the file hence
			// that's where $somecontent will go when we fwrite() it.
			if (!$handle = fopen($filename, 'a')) {
				echo "Cannot open file ($filename)";
				exit;
			}
		
			// Write $somecontent to our opened file.
			//if (fwrite($handle, $parte1) === FALSE || fwrite($handle, $parte2) === FALSE || fwrite($handle, $parte3) === FALSE || fwrite($handle, $parte4) === FALSE || fwrite($handle, $parte5) === FALSE || fwrite($handle, $parte6) === FALSE || fwrite($handle, $parte6bis) === FALSE  ||fwrite($handle, $parte7) === FALSE ){
			if (fwrite($handle, $parte1) === FALSE || fwrite($handle, $parte2) === FALSE || fwrite($handle, $parte3) === FALSE ) {
				echo "Cannot write to file ($filename)";
				exit;
			}
		
			echo "Success, wrote event to file ($filename)";
		
			fclose($handle);
		
			} else {
				echo "The file $filename is not writable";
			}
		}	
			//Fine


		$exitMessage = '<p class="msg_conferma">News inserita nel sito!</p>';
		echo $exitMessage;
		
	
		#Spedisco la mail di conferma
		$ref = $_SERVER['HTTP_REFERER'];	# Raccolgo dati generali
		$ua = $_SERVER['HTTP_USER_AGENT'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$sn = $_SERVER['SERVER_NAME'];
				
		$obj = 'SITO: nuova news inserita';	# Compongo il messaggio
		$msg = 'Nuova news inserita' . "\n\r";
		$msg .= 'TITOLO:' . "\n" . $titolo . "\n\r";
		$msg .= 'ip address: ' . $ip . "\n";
		$msg .= 'user-agent: ' . $ua . "\n";
		$msg .= 'http referer: ' . $ref . "\n\r";
	
		$replyto = $e;
				
		$headers = 'From: ' . $replyto . "\r\n";
		$headers .= 'Reply-To:' . $replyto . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();
	
		$mail = 'pavan.marco@email.it'; //indirizzi a cui spedire 
		//$mail2 = '';
		//$mail3 = '';
		//$mail4 = '';
	
		$wmsg =  wordwrap($msg, 70);
		mail($mail,$obj,$wmsg,$headers); // invia la mail
		//mail($mail2,$obj,$wmsg,$headers); // invia la mail
		//mail($mail3,$obj,$wmsg,$headers); // invia la mail
		//mail($mail4,$obj,$wmsg,$headers); // invia la mail

		$exitMessage2 = '<p class="msg_conferma">News inserita, ti è stata mandata una mail di conferma!</p>';
		echo $exitMessage2;
	}
	else {
		$exitMessage2 = '<p class="msg_errore">Qualcosa non ha funzionato!!</p>';
		echo $exitMessage2;
	}
}
?>
<!-- Fine script prenotazione -->

<!--Inizio file html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<title>Form inserimento News</title> <!-- il titolo della pagina viene impostato dinamicamente -->
		<!-- Autore e tipologia contenuto -->
		<meta name="author" content="Marco Pavan" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml" />
		<meta content="UTF-8" />
		<!-- Metatag -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<!-- Regole di stile -->
		<style type="text/css">
			.msg_errore { color: red; }
			.msg_conferma { color: green; }
		</style>
	</head>
	<body>
		<div id="form_news">
			<h3><span>Form per la creazione di una nuova news</span></h3>
			<p class="p1">
				<span>Utilizza il form sottostante per creare una nuova news sul tuo sito <br/> I campi con (*) sono obbligatori</span>
			</p>
			<form class="form" id="formNews" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Creazione News</legend>
					<p><strong><label for="titolo_evento">* Titolo evento: </label></strong><br /><input type="text" id="titolo_evento" name="titolo_evento" size="30" /></p>
					<p><strong><label for="data_evento">* Data evento (formato: gg-mm-aaaa): </label></strong><br /><input type="text" id="data_evento" name="data_evento" size="30" /></p>
					<p><strong><label for="ora_evento">Ora evento (formato: hh:mm): </label></strong><br /><input type="text" id="ora_evento" name="ora_evento" size="30" /></p>
					<p><strong><label for="luogo_evento">Luogo evento :</label></strong><br /><input type="text" id="luogo_evento" name="luogo_evento" size="30" /></p>
					<p><strong><label for="contatto_evento">Contatto (e-mail o tel): </label></strong><br /><input type="text" id="contatto_evento" name="contatto_evento" size="30" /></p>
					<!--<p><strong><label for="link_evento_1">Link (http://www.sito.com): </label></strong><br /><input type="text" id="link_evento_1" name="link_evento_1" size="30" /></p>-->
					<p><strong><label for="descrizioneBreve_evento">* Descrizione breve: </label></strong><br /><textarea  id="descrizioneBreve_evento" name="descrizioneBreve_evento" rows="3" cols="40"></textarea></p>
					<p><strong><label for="descrizione_evento">* Descrizione evento: </label></strong><br /><textarea  id="descrizione_evento" name="descrizione_evento" rows="20" cols="40"></textarea></p>
					<p><strong><label for="immagine_evento_1">Immagine 1 (principale):</label></strong><br /><input type="file" id="immagine1" name="immagine1" /></p>
					<p><strong><label for="immagine_evento_2">Immagine 2:</label></strong><br /><input type="file" id="immagine2" name="immagine2" /></p>
					<p><strong><label for="immagine_evento_3">Immagine 3:</label></strong><br /><input type="file" id="immagine3" name="immagine3" /></p>
					<p><strong><label for="immagine_evento_4">Immagine 4:</label></strong><br /><input type="file" id="immagine4" name="immagine4" /></p>
					<p><strong><label for="immagine_evento_5">Immagine 5:</label></strong><br /><input type="file" id="immagine5" name="immagine5" /></p>
					<p><input type="submit" name="invia_news" value="Invia news" /></p>
				</fieldset>
			</form>
		</div>
	</body>
</html>
