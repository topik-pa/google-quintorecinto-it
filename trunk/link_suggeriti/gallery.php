<!-- gallery.php -->
<!-- Image gallery dinamica (o quasi...) -->
<!-- Autore: Marco Pavan - pavan.marco@email.it-->
<!-- Data: 22 sett 2010 -->
<?php
//Impostazione delle variabili principali
$pagina = $_GET[pagina];	//pagina di provenienza
$img = $_GET[img];		//immagine da visualizzare
$numero_immagini = 5;		//numero totale delle immagini nella pagina

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
<h1>Gallery</h1>
<img src="<?php echo $percorso_img;?>" alt="Una immagine" /><br />
<a href="<?php echo $torna;?>" title="Torna alla pagina iniziale">Torna indietro</a><br />
<?php 
if(($img+1)<=$numero_immagini) {	//Se non si tratta dell'ultima immagine, mostro il link per visualizzare l'immagine successiva
	echo "<a href=" . $next . 'title="Immagine successiva">Successiva &gt;&gt;</a><br />';
}
else {
}
if(($img-1)>0) {
	echo "<a href=" . $prev . 'title="Immagine precedente">&lt;&lt; Precedente</a><br />';	////Se non si tratta della prima immagine, mostro il link per visualizzare l'immagine precedente
}
else {
}
?>


