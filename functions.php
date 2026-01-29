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
	