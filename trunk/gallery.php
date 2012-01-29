<!-- gallery.php -->
<!-- Image gallery dinamica (o quasi...) -->
<!-- Autore: Marco Pavan - pavan.marco@email.it-->
<!-- Data: 22 sett 2010 -->
<?php
//Impostazione delle variabili principali
$pagina = $_GET[pagina];	//pagina di provenienza
$img = $_GET[img];		//immagine da visualizzare
$numero_immagini = 5;		//numero totale delle immagini nella pagina (da adattare per ogni pagina)

if($pagina=="index") {		//la pagina index.php risiede nella cartella principale (non in una sottocartella): deve essere trattata diversamente dalle altre
	$torna = "index.php"; 
}
else {
	$torna = "pagina" . $pagina . ".php";
}
$next = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img+1) . "\"";		//percorso del link per l'immagine successiva
$prev = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img-1) . "\"";		//percorso del link per l'immagine precedente
$percorso_img = "img/" . $img . ".jpg";		//percorso della immagine all'interno della sottocartella
?>

<!-- La pagina da visualizzare -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Gallery</title>
<meta name="author" content="Marco Pavan" />
<meta http-equiv="Content-Type" content="application/xhtml+xml" />
<meta name="keywords" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit" />
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
<meta name="subject" content="Lorem ipsum dolor sit amet, consectetur adipiscing" />
<style type="text/css">
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
	text-align: center;
	}
#prev {
	text-align: center;
	}
img {
	border: none;
}	
</style>
</head>
<body>
<h1>Gallery</h1>
<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit -->
<p id="torna"><a href="<?php echo $torna;?>" title="Torna alla pagina iniziale">Torna indietro</a></p>
<p id="img"><a title="Vai alla prossima immagine" href=<?php if(($img+1)<=$numero_immagini) echo $next;?>><img src="<?php echo $percorso_img;?>" alt="Una immagine" /></p>
<?php 
if(($img+1)<=$numero_immagini) {	//Se non si tratta dell'ultima immagine, mostro il link per visualizzare l'immagine successiva
	echo '<p id="prox"><a href=' . $next . 'title="Immagine successiva">Successiva &gt;&gt;</a></p>';
}
else {
}
if(($img-1)>0) {
	echo '<p id="prev"><a href=' . $prev . 'title="Immagine precedente">&lt;&lt; Precedente</a></p>';	////Se non si tratta della prima immagine, mostro il link per visualizzare l'immagine precedente
}
else {
}
?>
</body>
</html>