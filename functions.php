<?php
function zeige_header($titel = null){
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	 <title><?php echo $titel; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../style.css">

	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	
<?php
}


function zeige_text($text){
	
	echo $text["de"];
	
}



function zeige_top_bar($farbe = null){
	?>
		<div class="header" style="background: <?php echo $farbe; ?>">
		
		
	<div class="pfeil">
		<a href="/">
		<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 26.4.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="10.5px" height="8.9px" viewBox="0 0 10.5 8.9" style="enable-background:new 0 0 10.5 8.9;" xml:space="preserve">
<polygon points="2,3.8 0.7,4.3 1.8,4.9 8,8.3 8.5,7.5 2.5,4.3 9.6,1.5 10.1,0.6 "/>
</svg>
		</a>

	</div>
	</div>	

	
	<?php
}


function zeige_footer(){
 	?>
	<div class="footer"> 	 <a href="datenschutz">Datenschutz</a> | <a href="impressum">Impressum</a>  </div>
 	<?php
}