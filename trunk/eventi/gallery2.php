<!-- gallery.php -->
<!-- Image gallery dinamica  2 (o quasi...) -->
<!-- Autore: Marco Pavan - pavan.marco@email.it-->
<!-- Data: 04 febb 2011 -->
<?php
//Impostazione delle variabili principali
$pagina = $_GET[pagina];	//pagina di provenienza
$img = $_GET[img];		//immagine da visualizzare
$codice_evento_corrente = $_GET[evento];	//codice evento
$numero_immagini = 5;		//numero totale delle immagini nella pagina

if($pagina=="index") {		//la pagina index.php risiede nella cartella principale (non in una sottocartella): deve essere trattata diversamente dalle altre
	$torna = "index.php"; 
}
else {
	$torna = $pagina . ".php" . '#' . $codice_evento_corrente;
}
$next = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img+1) . "\"";		//percorso del link per l'immagine successiva
$prev = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img-1) . "\"";		//percorso del link per l'immagine precedente
$percorso_img = "img/" . $img;		//percorso della immagine all'interno della sottocartella
?>
<!-- La pagina da visualizzare -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Giardiniere Udine _ Friuli - Gallery</title>
		<meta name="author" content="Marco Pavan" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml" />
		<meta name="keywords" content="giardiniere, udine, friuli" />
		<meta name="description" content="Giardiniere a Udine, in Friuli. Foto gallery del sito Web" />
		<meta name="subject" content="Galleria fotografica del sito Web di Giulio Modotti, giardiniere a Udine - Friuli" />
		<style type="text/css">
		body {
			background-color: #EEEEEE;
			font-family: sans-serif;
			margin: 2em 4em 2em 4em; 
			}
		h1 {
			text-align: center;
			}
		#img {
			text-align: center;
			}
		#torna {
			text-align: center;
			}
		#prox {
			float: right;
			}
		#prev {
			float: left;
			}
		img {
			border: none;
		}	
		#sub_gallery {
			margin-top: 5em;
			text-align: center;
		}
		.img_sub_gallery {
			width: 3em;
			height: 3em;
			border: 1px solid black;
		}
		</style>
	</head>
	<body>
		<div>
			<h1>Gallery sito web - Il giardiniere Udine</h1>
			<!-- Giardiniere a Udine, in Friuli. Manutenzione verde -->
			<div>
				<p id="torna"><a href="<?php echo $torna;?>" title="Il giardiniere a Udine - Friuli: torna alla pagina iniziale">Torna indietro</a></p>
			</div>

		<?php 		
		//The file news.xml contains an XML document with a root element
		if (file_exists('news.xml')) {
			$xml = simplexml_load_file('news.xml');
									
			// For each <evento> node
			foreach ($xml->evento as $evento) {
				$codice = $evento->codiceEvento;
				//Se si tratta dell'evento a cui la immagine corrente fa riferimento
				if($codice == $codice_evento_corrente) {
					//Inizializzo le variabili immagine
					$immagine1 = $evento->immagine1;
					$immagine2 = $evento->immagine2;
					$immagine3 = $evento->immagine3;
					$immagine4 = $evento->immagine4;
					$immagine5 = $evento->immagine5;
				}
			}
		}
		
		/*
		if(($img+1)<=$numero_immagini) {	//Se non si tratta dell'ultima immagine, mostro il link per visualizzare l'immagine successiva
			echo '<div><p id="prox"><a href=' . $next . 'title="Il giardiniere a Udine - Friuli: vai alla immagine successiva">Successiva &gt;&gt;</a></p></div>';
		}
		else {
			echo '<div><p id="prox"></p></div>';
		}
		if(($img-1)>0) {
			echo '<div><p id="prev"><a href=' . $prev . 'title="Il giardiniere a Udine - Friuli: vai alla immagine precedente">&lt;&lt; Precedente</a></p></div>';	//Se non si tratta della prima immagine, mostro il link per visualizzare l'immagine precedente
		}
		else {
			echo '<div><p id="prev"></p></div>';
		}
		*/?>
		
		<div>
			<p id="img"><a title="###" href=<?php/* if(($img+1)<=$numero_immagini) echo $next;*/?>><img src="<?php echo $percorso_img;?>" alt="###" /></a></p>
		</div>
		
		<div id="sub_gallery">
			<p>
				<?php
					if($immagine1!='') {
					echo '<a title="#" href="'  . 'gallery2.php?evento=' . $codice_evento_corrente . '&img=' . $immagine1 . '&pagina=' . $pagina .  '"><img class="img_sub_gallery" src="' . 'img/' . $immagine1 . '" alt="#" /></a>';
					}
					if($immagine2!='') {
					echo '<a title="#" href="'  . 'gallery2.php?evento=' . $codice_evento_corrente . '&img=' . $immagine2 . '&pagina=' . $pagina .  '"><img class="img_sub_gallery" src="' . 'img/' . $immagine2 . '" alt="#" /></a>';
					}
					if($immagine3!='') {
					echo '<a title="#" href="'  . 'gallery2.php?evento=' . $codice_evento_corrente . '&img=' . $immagine3 . '&pagina=' . $pagina .  '"><img class="img_sub_gallery" src="' . 'img/' . $immagine3 . '" alt="#" /></a>';
					}
					if($immagine4!='') {
					echo '<a title="#" href="'  . 'gallery2.php?evento=' . $codice_evento_corrente . '&img=' . $immagine4 . '&pagina=' . $pagina .  '"><img class="img_sub_gallery" src="' . 'img/' . $immagine4 . '" alt="#" /></a>';
					}
					if($immagine5!='') {
					echo '<a title="#" href="'  . 'gallery2.php?evento=' . $codice_evento_corrente . '&img=' . $immagine5 . '&pagina=' . $pagina .  '"><img class="img_sub_gallery" src="' . 'img/' . $immagine5 . '" alt="#" /></a>';
					}
				?>
			</p>
		</div>
	</body>
</html>