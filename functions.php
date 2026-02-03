<?php
$url = "http://localhost:8888/animal-cosmoi-page/";	
$sprache ="de";
if(isset($_GET["sprache"])){
	$sprache = htmlspecialchars($_GET["sprache"]); 
}


	
function zeige_header($titel = null){
	global $sprache;
	?>
	<!DOCTYPE html>
	<?php if($sprache=="en"){ echo '<html lang="en">'; } else{ echo '<html lang="de">'; }?>
	<head>
	<meta charset="UTF-8">
	 <title>Animal Cosmoi – <?php echo $titel; ?></title>
	 <meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../style.css">
	
<?php
}


function zeige_text($text){
	global $sprache;
	
	if($sprache=="en"){
	echo $text["en"];
	
	}else{
	echo $text["de"];
		
	}

	
}



function zeige_top_bar($farbe = null){
	global $url;
	global $sprache;
	?>
		<div class="header" style="background: <?php echo $farbe; ?>">
		
		
	<div class="pfeil">
		<a href="<?php echo $url; if($sprache =="en"){echo "?sprache=en";} ?>">
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
	global $sprache;
	global $url;
 	?>
	<div class="footer"> 	 <a href="<?php echo $url;?>/datenschutz/<?php if($sprache =="en"){echo "?sprache=en";}?>">Datenschutz</a> | <a href="<?php echo $url;?>/impressum/<?php if($sprache =="en"){echo "?sprache=en";}?>">Impressum</a>  </div>
 	<?php
}





// lang




function sprachwechsler(){
	global $sprache;
	global $url;

	echo '<a href="'.$url.'?sprache=de">D</a> | <a href="'.$url.'?sprache=en">E</a>';
 


}

