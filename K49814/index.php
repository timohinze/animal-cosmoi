<?php 
   include_once("../functions.php"); 
   include_once("content.php");
   zeige_header("K49814", $content["meta"]);
   
   $alt = "K49814";

?>

<style>
	
	.text{
		margin-bottom: 50px;
		width: 500px;
		
		
	}
	
	.text-1 {
		margin-bottom: 20px;
    margin-left: 280px;
        width: 500px;
}

.text-2 {
    margin-left: 170px;
    width: 525px;
}

.bild-1 {
    width: 310px;
    margin-left: 47vw;
        margin-bottom: 35px;
}

.text-3 {
    margin-left: 280px;
    margin-bottom: 100px;
}

.text-4 {
    margin-left: 170px;
    width: 533px;
    margin-bottom: 70px;
}

.text-5{
	margin-left: 390px;
	margin-bottom: 35px;
}

.text-6 {
    margin-left: 280px;
    margin-bottom: 100px;
}

.bild-2 {
    width: 310px;
    margin-left: 170px;
            margin-bottom: 35px;

}


.text-7 {
    margin-left: 390px;
    width: 521px;
    margin-bottom: 100px;
}

.text-8 {
    margin-left: 210px;
    margin-bottom: 16px;
    width: 525px;
}

.text-9 {
    margin-left: 55vw;
    width: 319px;
    margin-bottom: 85px;

}

.text-10 {
    margin-left: 390px;
    width: 566px;
    margin-bottom: 65px;
}


.bild-3 {
    width: 439px;
    margin-left: 50vw;
    margin-bottom: 50px;
}

.text-11 {
    margin-left: 280px;
}



.legende ul{
	    column-count: 1
	    }







@media (max-width: 1020px) {


	.text{
		margin-left: 5%;
		width: 90%;
	}
	
	
	.bild {
	    width: 90%;
	    margin-left: 5%;
	    
	}
	
	.bild-2{
		width: 50%;
		margin-left: 25%;
	}
}
</style>
</head>

<body>


<?php zeige_top_bar(); ?>

<div class="titel">
<h1>K49814</h1>
</div>


<div class="page K49814">

<div class="section">

<div class="text-element text-1">
	<?php zeige_text($content[1]); ?>
</div>

<div class="text-element text-2">
	<?php zeige_text($content[2]); ?>
</div>

<div class="bild-element bild-1">
	<?php bild("img/1_Wildpferde-im Spiel-unversehrt_low.jpg", $alt); ?>
</div>	

<div class="text-element text-3">
	<?php zeige_text($content[3]); ?>
</div>

<div class="text-element text-4">
	<?php zeige_text($content[4]); ?>
</div>

<div class="text-element text-5">
	<?php zeige_text($content[5]); ?>
</div>

<div class="text-element text-6">
	<?php zeige_text($content[6]); ?>
</div>

<div class="bild-element bild-2">
	<?php bild("img/2__MG_0750-Kopie-2_low.jpg", $alt); ?>
</div>	

<div class="text-element text-7">
	<?php zeige_text($content[7]); ?>
</div>

<div class="text-element text-8">
	<?php zeige_text($content[8]); ?>
</div>

<div class="text-element text-9">
	<?php zeige_text($content[9]); ?>
</div>

<div class="text-element text-10">
	<?php zeige_text($content[10]); ?>
</div>

<div class="bild-element bild-3">
	<?php bild("img/3_MG_4679-Kopie_low.jpg", $alt); ?>
</div>	

<div class="text-element text-11">
	<?php zeige_text($content[11]); ?>
</div>

</div> <!-- section -->

<div class="legende">
	<?php echo zeige_text($content[12]); ?>
</div>

</div>

<?php zeige_footer(); ?>

</body>
</html>