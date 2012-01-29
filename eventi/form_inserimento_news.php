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
			$parte1='<!-- Pagina evento -->
				<!-- Autore: Marco Pavan - pavan.marco@email.it -->
				<!-- Data: 28 sett 2010 -->
				<?php
				//Imposto due variabili di uso generale
				$titolo_pagina = "Template - Pagina evento";
				$pagina = "pagina_evento";
				?>
				
				<!-- Dichiarazione del DOCTYPE -->
				<?php include(\'../../includes/doctype.php\'); ?>
				
				<!-- Corpo del documento -->
				<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
					
					
					<?php include(\'../../includes/tag_head.php\'); ?>
					<body>	
						<!-- Link per raggiungere direttamente il contenuto principale saltando le voci del menù -->
						<p id="vaiAlCorpoCentrale"><a href="#supportingText">Vai al contenuto principale</a></p>	
						<!-- Wrapper del contenuto della pagina -->
						<div id="container">
							<!-- Introduzione -->
							<div id="intro"> 
								<div id="intro_inner1">
									<?php include(\'../../includes/menu_servizio.php\'); ?>			
									<?php include(\'../../includes/searchEngine_interno.php\'); ?>
									<!-- Breve riassunto degli argomenti o spazio per avvisi -->				
									<!--<div id="quickSummary">-->
										<!--<p class="p1"><span>Quick summary titolo</span></p>
										<p class="p2"><span>Quick summary testo</span></p>-->	
									<!--</div>-->
									<!-- Fine riassunto degli argomenti o avvisi -->		
									<div class="clear_both"></div>
								</div>
								<div id="intro_inner2">	
									<?php include(\'../../includes/menu_orizzontale.php\'); ?>									
									<?php include(\'../../includes/pageHeader.php\'); ?>
									<!-- Breadcrums -->
									<!--<div id="breadcrums">	
										<p id="sei_in"><span>Sei in:</span></p>
										<ul id="listaBreadcrums">
											<li id="bread_1"><a title="Vai in home page" href="index.php">Home</a></li>
											<li id="bread_2"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 2</a></li>
											<li id="bread_3"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 3</a></li>
										</ul>
									</div>-->	
									<!-- Fine breadcrums -->
									<!-- Breve preambolo -->
									<!--<div id="preamble"> -->
										<!--<h3><span>Titolo preambolo</span></h3>
										<p class="p1"><span>Preambolo paragrafo 1</span></p>
										<p class="p2"><span>Preambolo paragrafo 2</span></p>
										<p class="p3"><span>Preambolo paragrafo 3</span></p>-->
									<!--</div>-->			
									<!-- Fine preamble -->
								</div>
							</div>			
							<!-- Fine introduzione -->
							<div id="separator_1"><div id="inner1"></div></div>
							<div id="separator_2"><div id="inner2"></div></div>
							<!-- Wrapper corpo principale -->
							<div id="wrapper_corpo_principale">
								<div id="wrapper_inner">
									<?php /*include(\'../../includes/colonnaSx.php\');*/ ?>	
									<?php /*include(\'../../includes/colonnaDx.php\');*/ ?>	';
			$parte2="<div class=\"news\">
				<h3 id=$codice><span>$titolo</span></h3>
				<p class=\"p1\">
				<br/>
				<span><strong>Data:</strong>$data</span><br/>
				<span><strong>Ora:</strong>$ora</span><br/>
				<span><strong>Luogo:</strong>$luogo</span><br/>
				</p>
				<p>
				<span>$descrizione</span<br/>
				</p>
				<p>
				<span><strong>Contatto:</strong>$contatto</span><br/>
				<span><strong>Link:</strong>$link1</span><br/>
				</p>
				<div class=\"galleria_immagini_evento\">";
				if($nome_immagine1!='') {
					$parte3="<a href=\"./gallery2.php?evento=$codice&img=$immagine1&pagina=eventi\"><img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine1\" /></a>";
				}
				if($nome_immagine2!='') {
					$parte4="<a href=\"./gallery2.php?evento=$codice&img=$immagine2&pagina=eventi\"><img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine2\" /></a>";
				}
				if($nome_immagine3!='') {
					$parte5="<a href=\"./gallery2.php?evento=$codice&img=$immagine3&pagina=eventi\"><img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine3\" /></a>";
				}
				if($nome_immagine4!='') {
					$parte6="<a href=\"./gallery2.php?evento=$codice&img=$immagine4&pagina=eventi\"><img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine4\" /></a>";
				}
				if($nome_immagine5!='') {
					$parte7="<a href=\"./gallery2.php?evento=$codice&img=$immagine5&pagina=eventi\"><img  class=\"immagini_evento\" alt=\"\" src=\"../img/$nome_immagine5\" /></a>";
				}
			$parte6="</div>
				<div class=\"clear_both\"></div>
				</div>";
			$parte6bis="<div class=\"like_facebook_evento\">
					<script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script>
					<fb:like href=\"http://www.127.0.0.5/eventi/pagine_evento/evento_$codiceEvento.php\" show_faces=\"true\" width=\"450\" action=\"recommend\" font=\"arial\"></fb:like>';
					</div>
				</div>";
			$parte7='<div class="clear_both"></div>
								</div> <!--Fine wrapper inner-->
							</div> <!-- Fine wrapper coprpo centrale -->
							<div id="separator_3"><div id="inner3"></div></div>	
							<?php include(\'../../includes/footer.php\'); ?>
							<?php include(\'../../includes/footer2.php\'); ?>
						</div>		
						<!-- Fine container -->			
						<!-- LinkList (menu di navigazione) -->
				<!-- 		<div id="linkList"> -->
							<!-- Menu di navigazione 1 -->
							<?php /*include(\'/includes/Navigation1.php\');*/ ?>	
							<!-- LinkList2 (menu2) -->		
				<!-- 			<div id="linkList2">	 -->
								<!-- Menu di selezione per CSS di tipo ZenGarden -->	
								<!-- Menu di navigazione 1bis -->
								<?php /*include(\'../../includes/Navigation1.php\');*/ ?>	
								<!-- Menu di navigazione 1 per menu a comparsa -->
								<?php /*include(\'../../includes/Navigation_comparsa.php\');*/ ?>		
								<!-- Menu di navigazione 2 -->
								<?php /*include(\'../../includes/Navigation2.php\');*/ ?> 
								<!-- Menu di navigazione 3 -->
								<?php /*include(\'../../includes/Navigation3.php\');*/ ?>			
				<!-- 			</div>	 -->
							<!-- Fine div linkList2 (menu2) -->
				<!-- 		</div>	 -->
						<!-- Fine linkList (menu) -->
						<!-- Sezioni div extra per immagini, toolbox etc...
						<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
						<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>
						-->
						<!-- Inserimento codice StatCounter -->
						<?php include(\'../../includes/statCounterCode.php\'); ?>
						<!-- Fine codice StatCounter -->
					</body>
				</html>
				<!--fine pagina evento -->';

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
			if (fwrite($handle, $parte1) === FALSE || fwrite($handle, $parte2) === FALSE || fwrite($handle, $parte3) === FALSE || fwrite($handle, $parte4) === FALSE || fwrite($handle, $parte5) === FALSE || fwrite($handle, $parte6) === FALSE || fwrite($handle, $parte6bis) === FALSE  ||fwrite($handle, $parte7) === FALSE ){
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
