/*
script.js
Script vari
Autore: Marco Pavan - pavan.marco@email.it
Data: 22 sett 2010
*/
function randomImage() {	//Script per visualizzare una immagine casuale tra quelle presenti nella cartella randomImages

	var chosenImage = new Array();		//Creazione dell'array contanente le immagini
	chosenImage[1]="1.jpg";
	chosenImage[2]="2.jpg";
	chosenImage[3]="3.jpg";
	chosenImage[4]="4.jpg";
	chosenImage[5]="5.jpg";
	
	var chosenAltCopy = new Array();	//Creazione dell'array contenente le descrizioni testuali delle immagini
	chosenAltCopy[1] = "Alt text 1";
	chosenAltCopy[2] = "Alt text 2";
	chosenAltCopy[3] = "Alt text 3";
	chosenAltCopy[4] = "Alt text 4";
	chosenAltCopy[5] = "Alt text 5";
	
	var getRandom = Math.round(Math.random()*(chosenImage.length-1))	//Creazione di un numero casuale
	if(getRandom==0) {
		getRandom=1;
	}
	
	//Creo il tag dell'immagine...
	//document.write('<div class="float_left">');
	document.write('<img src=\"randomImages/' + chosenImage[getRandom] + '"alt=\"' + chosenAltCopy[getRandom] + '\" id="foto1_home" class="classe_immagini" />');
	//document.write('<p>Didascalia immagine: ' + getRandom + '</p>');
	//document.write('<div>');
}

function Preferiti() {		//Script per inserire la pagina tra i propri indirizzi preferiti
	var title = document.title;
	var url = document.location.href;
	if (window.sidebar) // Mozilla Firefox
	{
		window.sidebar.addPanel(title, url, "");
	}
	else if (window.external) // Internet Explorer
	{
		window.external.AddFavorite(url, title);
	}
	else if (window.opera && window.print) // Opera
	{
		var elem = document.createElement('a');
		elem.setAttribute('href', url);
		elem.setAttribute('title', title);
		elem.setAttribute('rel', 'sidebar');
		elem.click();
	}
}
