<?php 
   include_once("../functions.php"); 
   zeige_header("Atmen ohne Pause");
   include_once("content.php");


?>



<style>
:root {
	
/* 	mittel */
  --bild-breite-1: 415px;
  --bild-breite-1-hochformat: 260px;
  
/* groß */
  --bild-breite-2: 740px;  
  

}

	@media (max-width: 1200px) {
		:root {
  --bild-breite-1: 395px;
  --bild-breite-1-hochformat: 260px;
  
    --bild-breite-2: 700px;  


}
}


.titel svg{
	
	height: 40px;}

	
	.section{
/* 		    width: 1200px; */
    margin-left: auto;
    margin-right: auto;
    
    display: flex;
    flex-wrap: wrap;
	}
	
	.stapel {
    display: flex;
    flex-wrap: wrap;
    

}

img{
	max-width: 100%;
	height: auto;
	display: block;
}




/* section 1 */

.section-1 .stapel{
	margin-top: 210px;
	margin-right: 10px;
}

.section-1--image-1 {
	width: var(--bild-breite-1);
	z-index: 1;
	position: relative;
}

.section-1--image-2 {
    width: var(--bild-breite-1-hochformat);
    padding-top: 240px;
    margin-left: -77px;
	
	
}

.section-1{
display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

.section-2{
}

.text-bild{
	width: var(--bild-breite-1)
}

.text-bild img{
margin-bottom: 3rem;	
}
	
	
	
	
			
	.section-2--image-1{
	width: var(--bild-breite-2);
    margin-left: 170px;
    padding-top: 85px;
    padding-bottom: 133px;
}		
		
		
 .section-2 .stapel{
	 width: auto;
 }		
 
 .section-2--text{
    margin-left: -60px;
    padding-top: 495px;

}

.section-3{
.section-3 {
    display: flex;
    margin-left: 330px;
}
}

.section-3 img{
	width: var(--bild-breite-1);
	margin-right: 20px;
}




.section-4{
	    display: flex;
    padding-top: 110px;
}

.section-4--image-1{
    width: var(--bild-breite-1-hochformat);
    margin-left: 173px;
}

.section-4--text-1 {
    margin-left: 85px;
    padding-top: 110px;
}


.section-4--image-2 {
    width: 365px;
    margin-left: 390px;
    margin-top: -87px;
}



.section-4--text-2 {
    margin-left: -145px;
    padding-top: 200px;
}



.section.section-5 {
    padding-top: 70px;
}


.section-5--image-1 {
    width: 525px;
    margin-left: 63px;
}

.section-5--text-1 {
    padding-top: 840px;
    margin-left: -415px;
    }

.section-5--image-2 {
    margin-left: 630px;
    width: var(--bild-breite-1-hochformat);
    margin-top: -288px;
}


.section-5--image-3 {
    width: 485px;
    margin-left: 500px;
    margin-top: 35px;
}










.section.section-6 {
    padding-top: 100px;
}


.section-6--text-1 {
    margin-top: 330px;
    padding-left: 67px;
}


.section-6--image-1 {
width: 525px;
        margin-left: 580px;
    margin-top: -303px;
}

.section-6--image-2 {
    width: var(--bild-breite-1-hochformat);
    margin-left: 330px;
    padding-top: 30px;

}



.section-6--text-2 {
    margin-top: 55px;
    padding-left: 620px;
}









.section.section-7 {
    padding-top: 100px;
}


.section-7--image-1 {
    width: 640px;
    margin-left: 60px;
}

.section-7--image-2 {
	width: var(--bild-breite-1);
    margin-left: 500px;
    margin-top: 30px;
}

.section-7--text-1 {
    padding-top: 250px;
    margin-left: -20px;
}







/*
.legende {
    margin-top: 140px;
    margin-left: 150px;

    font-size: 13px;

}

.legende ul{
	    column-count: 2;
    column-gap: 40px;
    width: 580px;
    margin: 0;
    padding: 0;
    	break-inside: avoid;
    	
    	list-style: none;
margin-left: 20px;

}

.legende li{
	display: grid;
	grid-template-columns: 5ch auto;
}

.legende .nummer{
	
	  font-family: "Inter", sans-serif;
  font-optical-sizing: auto;
  font-weight:200;
  font-style: normal;

}
*/








	@media (max-width: 1020px) {


.stapel{
		flex-direction: column;
		margin: auto!important;

}

.stapel>div{
	width: 100%;
	margin: auto;
	margin-top: 20px;
	margin-bottom: 20px;
	padding: 0;
	

}

.stapel img{
	width: 100%;
}



/* generell */

.text-bild{
        width: 90%;
        margin-top: 20px;
        margin-bottom: 30px;}

.text-bild p{
	max-width: 65ch;
}


.section{
padding: 0!important;
}

/* section 1 */

.stapel .section-1--image-1{
	width: 90%;
}

.stapel .section-1--image-2 {
    width: 50%;
/*     margin-bottom: 20px; */
/*
    margin-right: 0;
    margin-top: -10%;
*/
}


/* section 2 */

.section-2{
/* 	margin-top: 50px; */
}


.stapel .section-2--text {
text-align: center;
/*
    margin-right: 10%;
    margin-left: auto;
    width: auto;
    text-align: right;
    margin-top: -10%;
*/
}


/* section 3 */

.section-3{
/*  	margin-top: 50px;  */
 	margin-left: auto;
 	margin-right: auto;
 	    justify-content: center;
}

.section-3 img{
	margin: auto;
/*
	width: 80%;
	margin-bottom: 20px;
*/
}




/* section 4 */

.stapel .section-4--image-1{
	width: 50%
	}

.section-4--text-1{
	text-align: center;
	}

.section-4--text-2{
	text-align: center;
	}



/* section 5 */

.stapel  .section-5--image-1{
width: 50%;
}


.section-5--text-1{
	text-align: center;
	}

.stapel .section-5--image-2{
	width: 50%;
	margin-right: 10%;
	margin-left: auto;
	}


/* section 6 */

.section.section-6{
	padding-top: 20px;
	}
	
	
.section-6--text-1	{
	text-align: center;
	}
	
.stapel .section-6--image-2{

width: 50%;




}	

.stapel .section-6--text-2{
 text-align: center;
}	
	
/*
	
section 7
*/

.section-7 {
    padding-top: 20px;
}	
	

.stapel .section-7--image-2{
	width: 60%;
}
	
	

.section-7--text-1{
	text-align: center;
}
	
/* 	legende */
	



}
</style>	

</head>

<body>

<?php zeige_top_bar(); ?>

<h1 class="visually-hidden"><?php echo zeige_text($content[0]); ?></h1>


<div class="titel">
	<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 26.4.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="736.8px" height="115px" viewBox="0 0 736.8 115" style="enable-background:new 0 0 736.8 115;" xml:space="preserve">
<g>
	<path class="st0" d="M63.2,85.9c-0.1,0-0.1-0.3,0-0.8c0.1-0.5,0.2-0.8,0.4-0.8h6.8c0.4,0,0.5-0.1,0.5-0.3V64.4H50L37.4,80.6
		c-1.2,1.7-1.9,2.7-2,3.1c-0.1,0.4,0,0.6,0.5,0.6h6.9c0.1,0,0.1,0.3,0,0.8c-0.2,0.5-0.3,0.8-0.4,0.8H24.1c-0.1,0-0.1-0.3,0-0.8
		c0.2-0.5,0.3-0.8,0.4-0.8H31c0.7,0,1.3-0.2,1.9-0.7c0.6-0.5,1.5-1.5,2.6-3l45.7-59.9c0.1-0.2,0.5-0.3,1-0.2c0.6,0,0.9,0.1,0.9,0.2
		v63.4c0,0.2,0.2,0.3,0.6,0.3h8.5c0.1,0,0.1,0.3,0,0.8c-0.1,0.5-0.2,0.8-0.4,0.8H63.2z M70.9,36.8L51,62.9h19.9V36.8z"/>
	<path class="st0" d="M125.4,47.8c-0.1,0.5-0.2,0.8-0.4,0.8h-6.8l-10.1,32c-0.2,0.8-0.2,1.5,0.1,2.1c0.3,0.5,0.9,0.8,1.7,0.8
		c1.4,0,2.7-0.5,4-1.4c1.3-1,2.5-2.6,3.9-5l1.4,0.5c-1.6,3.2-3.5,5.5-5.8,7c-2.3,1.5-4.6,2.2-6.9,2.2c-2.9,0-4.9-1.1-6.2-3.2
		c-1.2-2.1-1.3-5.1-0.1-8.8l8.4-26.2H102c-0.1,0-0.1-0.3,0-0.8c0.1-0.5,0.3-0.8,0.4-0.8h6.6l4-13l10-0.4l-4.2,13.3h6.8
		C125.5,47.1,125.5,47.3,125.4,47.8z"/>
	<path class="st0" d="M186.6,84.4c-2.4,1.5-4.8,2.3-7.1,2.3c-2.4,0-4.3-0.7-5.6-2c-1.3-1.3-2-2.9-2-4.8c0-1.9,0.4-3.8,1.2-5.9
		c0.8-2,1.6-4.1,2.5-6.2c0.9-2.1,1.7-4.2,2.5-6.3c0.8-2.1,1.2-4.1,1.2-6.1c0-1.1-0.3-2.1-0.8-2.8c-0.5-0.7-1.3-1.1-2.4-1.1
		c-0.7,0-1.5,0.2-2.2,0.7c-0.8,0.5-1.7,1.3-2.6,2.5c-1,1.2-2.1,2.7-3.3,4.6c-1.2,1.9-2.6,4.3-4.1,7.2l-6,19.3H148l7.9-25.2
		c1-2.9,1.2-5.2,0.7-6.8c-0.5-1.6-1.6-2.3-3.3-2.3c-0.8,0-1.6,0.2-2.3,0.6c-0.8,0.4-1.7,1.2-2.6,2.2c-1,1.1-2,2.5-3.2,4.4
		c-1.2,1.9-2.6,4.2-4.2,7.1l-6.2,20h-9.8l10.1-31.8c0.4-1.3,0.4-2.3,0-3.1c-0.4-0.8-1-1.2-1.9-1.2c-0.9,0-1.8,0.4-2.8,1.2
		c-1,0.8-1.9,2.2-2.9,4.3l-1.4-0.5c1.2-2.6,2.8-4.6,4.8-6c2-1.4,4.1-2.1,6.2-2.1c1.3,0,2.5,0.3,3.6,0.8c1.1,0.5,1.9,1.4,2.4,2.5
		c0.6,1.1,0.8,2.6,0.8,4.3s-0.4,3.7-1.2,6.1c2.9-5.1,5.7-8.7,8.3-10.7c2.6-2,5.2-3,7.7-3c1.4,0,2.7,0.3,3.8,0.9
		c1.2,0.6,2.1,1.4,2.8,2.6c0.7,1.1,1.2,2.6,1.3,4.3c0.1,1.7-0.1,3.7-0.9,6c2.7-4.7,5.3-8.1,7.9-10.3c2.6-2.2,5.1-3.3,7.7-3.3
		c2.3,0,4.1,0.7,5.4,2.1c1.3,1.4,2,3.4,2,6.1c0,2.2-0.4,4.5-1.3,6.8c-0.8,2.3-1.8,4.6-2.7,6.8c-1,2.2-1.9,4.3-2.7,6.3
		c-0.8,2-1.3,3.6-1.3,5.1c0,1,0.2,1.9,0.6,2.5c0.4,0.7,1.1,1,2.1,1c1.4,0,2.7-0.5,4-1.5c1.3-1,2.6-2.7,4-5l1.3,0.5
		C191.1,80.6,189.1,82.9,186.6,84.4z"/>
	<path class="st0" d="M229,59.9c-1.1,1.4-2.6,2.7-4.5,3.7c-1.9,1-4.1,1.8-6.7,2.3c-2.6,0.5-5.3,0.8-8.2,0.8h-2.4
		c-0.7,2.1-1.2,4.2-1.6,6.3c-0.4,2.1-0.6,3.9-0.6,5.3c0,2.2,0.4,3.9,1.2,5.2c0.8,1.2,2.2,1.8,4.3,1.8c1.6,0,3.1-0.2,4.4-0.5
		c1.3-0.4,2.5-0.9,3.6-1.5c1.1-0.7,2.1-1.4,3.1-2.3c1-0.9,1.9-1.9,2.9-2.9l0.8,1c-2.1,2.5-4.3,4.4-6.7,5.7c-2.3,1.3-5,1.9-8.1,1.9
		c-2,0-3.9-0.4-5.6-1.1s-3.2-1.7-4.5-3.1c-1.3-1.3-2.2-2.9-2.9-4.8c-0.7-1.9-1-3.9-1-6.1c0-3.2,0.6-6.4,1.9-9.4c1.3-3,2.9-5.7,5-8
		c2.1-2.3,4.5-4.2,7.2-5.5c2.7-1.4,5.6-2.1,8.6-2.1c1.9,0,3.5,0.2,5,0.7c1.4,0.5,2.7,1.1,3.6,1.8c1,0.8,1.7,1.6,2.2,2.6
		c0.5,1,0.7,2,0.7,3.1C230.6,56.9,230.1,58.5,229,59.9z M221.5,49.3c-0.6-0.7-1.5-1-2.7-1c-1.6,0-3,0.5-4.1,1.4
		c-1.1,0.9-2.1,2.1-3,3.6c-0.9,1.5-1.6,3.3-2.3,5.4c-0.7,2.1-1.3,4.3-2,6.6h1.7c2.8,0,5-0.4,6.8-1.1c1.7-0.7,3.1-1.7,4-2.8
		c1-1.2,1.6-2.5,1.9-3.9c0.3-1.4,0.5-2.9,0.5-4.4C222.4,51.3,222.1,50,221.5,49.3z"/>
	<path class="st0" d="M274.4,84.5c-2.4,1.5-4.8,2.2-7,2.2c-2.5,0-4.4-0.7-5.7-2c-1.3-1.3-2-2.9-2-4.8c0-1.8,0.4-3.7,1.1-5.8
		c0.7-2,1.6-4.1,2.5-6.2c0.9-2.1,1.8-4.2,2.5-6.3c0.7-2.1,1.1-4.2,1.1-6.2c0-1.1-0.3-2.1-0.8-2.8c-0.5-0.7-1.3-1.1-2.4-1.1
		c-1,0-2,0.3-3,0.8c-1,0.5-2,1.3-3.1,2.5c-1,1.1-2.2,2.6-3.4,4.5c-1.2,1.8-2.6,4.1-4,6.7l-6.2,19.9h-9.8l10-31.7
		c0.4-1.3,0.4-2.4,0-3.1c-0.4-0.8-1-1.2-1.9-1.2s-1.8,0.4-2.7,1.2c-0.9,0.8-1.9,2.2-2.8,4.3l-1.3-0.5c1.2-2.6,2.8-4.6,4.8-6
		c2-1.4,4-2.1,6.2-2.1c1.3,0,2.5,0.3,3.6,0.9c1,0.6,1.8,1.4,2.4,2.5c0.5,1.1,0.8,2.5,0.8,4.3c0,1.7-0.4,3.7-1.2,6
		c2.9-5.1,5.8-8.7,8.8-10.7c3-2,5.7-3,8.1-3c2.3,0,4.1,0.7,5.4,2.1c1.3,1.4,2,3.4,2,6.1c0,2.2-0.4,4.5-1.3,6.9
		c-0.8,2.4-1.8,4.7-2.8,7c-1,2.2-2,4.3-2.8,6.3c-0.8,1.9-1.3,3.5-1.3,4.9c0,1,0.2,1.9,0.6,2.5c0.4,0.7,1.1,1,2.2,1
		c1.4,0,2.7-0.5,3.9-1.5c1.2-1,2.5-2.7,3.9-5l1.3,0.5C278.8,80.7,276.8,83,274.4,84.5z"/>
	<path class="st0" d="M337.1,71.2c-1.3,3-3,5.6-5.1,7.9c-2.1,2.3-4.6,4.2-7.3,5.5c-2.8,1.4-5.6,2.1-8.6,2.1c-2,0-3.9-0.4-5.6-1.1
		s-3.2-1.7-4.5-3.1c-1.3-1.3-2.2-2.9-2.9-4.8c-0.7-1.9-1-3.9-1-6.1c0-3.2,0.6-6.4,1.9-9.4c1.3-3,2.9-5.7,5-8
		c2.1-2.3,4.5-4.2,7.3-5.5c2.8-1.4,5.6-2.1,8.6-2.1c2,0,3.9,0.4,5.6,1.1c1.7,0.8,3.2,1.8,4.5,3.1c1.3,1.4,2.2,3,3,4.8
		c0.7,1.9,1.1,3.9,1.1,6.1C339,65.2,338.4,68.2,337.1,71.2z M329.3,50.2c-0.8-1.2-2.1-1.8-4.2-1.8c-1.7,0-3.2,0.5-4.5,1.4
		s-2.5,2.3-3.6,4.2c-0.5,0.8-1.1,2.4-1.8,4.6c-0.7,2.2-1.4,4.6-2,7.2c-0.6,2.6-1.2,5-1.6,7.4c-0.5,2.4-0.7,4.2-0.7,5.4
		c0,2.2,0.4,3.9,1.1,5.2c0.7,1.2,2.1,1.8,4.2,1.8c1.6,0,3.1-0.5,4.4-1.4c1.3-0.9,2.5-2.3,3.6-4.2c0.5-0.9,1.1-2.5,1.8-4.7
		c0.7-2.2,1.4-4.6,2.1-7.2c0.7-2.5,1.2-5,1.7-7.3s0.7-4.1,0.7-5.3C330.4,53.1,330,51.4,329.3,50.2z"/>
	<path class="st0" d="M382.7,84.4c-2.4,1.5-4.7,2.3-7,2.3c-2.4,0-4.3-0.7-5.6-2c-1.3-1.3-2-2.9-2-4.8c0-1.9,0.4-3.8,1.2-5.9
		c0.8-2,1.6-4.1,2.5-6.2c0.9-2.1,1.7-4.2,2.5-6.3c0.8-2.1,1.2-4.1,1.2-6.1c0-1.1-0.3-2.1-0.8-2.8c-0.5-0.7-1.3-1.1-2.4-1.1
		c-1,0-2,0.3-3,0.8c-1,0.5-2,1.3-3,2.4c-1.1,1.1-2.2,2.6-3.4,4.4c-1.2,1.8-2.6,4.1-4.1,6.7l-6.2,20h-9.8l20.2-64.4
		c0-0.2-0.2-0.3-0.5-0.3l-5,0.1c-0.1,0-0.1-0.2,0-0.7c0.1-0.5,0.3-0.7,0.4-0.7l15.2-0.4c0.1,0,0.2,0.1,0.2,0.2l-12.9,40.7
		c2.9-5.1,5.9-8.7,8.8-10.7c2.9-2,5.6-3,8.1-3c2.3,0,4.2,0.7,5.5,2.1c1.3,1.4,2,3.4,2,6.1c0,2.2-0.4,4.5-1.3,6.9
		c-0.8,2.4-1.8,4.7-2.7,7s-1.9,4.3-2.7,6.3c-0.8,1.9-1.3,3.5-1.3,4.9c0,1,0.2,1.9,0.6,2.5c0.4,0.7,1.1,1,2.2,1
		c1.4,0,2.7-0.5,3.9-1.5c1.2-1,2.5-2.7,3.9-5l1.3,0.5C387.1,80.6,385.1,82.9,382.7,84.4z"/>
	<path class="st0" d="M432.2,84.5c-2.4,1.5-4.8,2.2-7,2.2c-2.5,0-4.4-0.7-5.7-2c-1.3-1.3-2-2.9-2-4.8c0-1.8,0.4-3.7,1.1-5.8
		c0.7-2,1.6-4.1,2.5-6.2c0.9-2.1,1.8-4.2,2.5-6.3c0.7-2.1,1.1-4.2,1.1-6.2c0-1.1-0.3-2.1-0.8-2.8c-0.5-0.7-1.3-1.1-2.4-1.1
		c-1,0-2,0.3-3,0.8c-1,0.5-2,1.3-3.1,2.5c-1,1.1-2.2,2.6-3.4,4.5c-1.2,1.8-2.6,4.1-4,6.7L402,85.9h-9.8l10-31.7
		c0.4-1.3,0.4-2.4,0-3.1c-0.4-0.8-1-1.2-1.9-1.2s-1.8,0.4-2.7,1.2c-0.9,0.8-1.9,2.2-2.8,4.3l-1.3-0.5c1.2-2.6,2.8-4.6,4.8-6
		c2-1.4,4-2.1,6.2-2.1c1.3,0,2.5,0.3,3.6,0.9c1,0.6,1.8,1.4,2.4,2.5c0.5,1.1,0.8,2.5,0.8,4.3c0,1.7-0.4,3.7-1.2,6
		c2.9-5.1,5.8-8.7,8.8-10.7c3-2,5.7-3,8.1-3c2.3,0,4.1,0.7,5.4,2.1c1.3,1.4,2,3.4,2,6.1c0,2.2-0.4,4.5-1.3,6.9
		c-0.8,2.4-1.8,4.7-2.8,7c-1,2.2-2,4.3-2.8,6.3c-0.8,1.9-1.3,3.5-1.3,4.9c0,1,0.2,1.9,0.6,2.5c0.4,0.7,1.1,1,2.2,1
		c1.4,0,2.7-0.5,3.9-1.5c1.2-1,2.5-2.7,3.9-5l1.3,0.5C436.7,80.7,434.7,83,432.2,84.5z"/>
	<path class="st0" d="M474.6,59.9c-1.1,1.4-2.6,2.7-4.5,3.7c-1.9,1-4.1,1.8-6.7,2.3c-2.6,0.5-5.3,0.8-8.2,0.8h-2.4
		c-0.7,2.1-1.2,4.2-1.6,6.3c-0.4,2.1-0.6,3.9-0.6,5.3c0,2.2,0.4,3.9,1.2,5.2c0.8,1.2,2.2,1.8,4.3,1.8c1.6,0,3.1-0.2,4.4-0.5
		c1.3-0.4,2.5-0.9,3.6-1.5c1.1-0.7,2.1-1.4,3.1-2.3c1-0.9,1.9-1.9,2.9-2.9l0.8,1c-2.1,2.5-4.3,4.4-6.7,5.7c-2.3,1.3-5,1.9-8.1,1.9
		c-2,0-3.9-0.4-5.6-1.1s-3.2-1.7-4.5-3.1c-1.3-1.3-2.2-2.9-2.9-4.8c-0.7-1.9-1-3.9-1-6.1c0-3.2,0.6-6.4,1.9-9.4c1.3-3,2.9-5.7,5-8
		c2.1-2.3,4.5-4.2,7.2-5.5c2.7-1.4,5.6-2.1,8.6-2.1c1.9,0,3.5,0.2,5,0.7c1.4,0.5,2.7,1.1,3.6,1.8c1,0.8,1.7,1.6,2.2,2.6
		c0.5,1,0.7,2,0.7,3.1C476.2,56.9,475.7,58.5,474.6,59.9z M467.1,49.3c-0.6-0.7-1.5-1-2.7-1c-1.6,0-3,0.5-4.1,1.4
		c-1.1,0.9-2.1,2.1-3,3.6c-0.9,1.5-1.6,3.3-2.3,5.4c-0.7,2.1-1.3,4.3-2,6.6h1.7c2.8,0,5-0.4,6.8-1.1c1.7-0.7,3.1-1.7,4-2.8
		c1-1.2,1.6-2.5,1.9-3.9c0.3-1.4,0.5-2.9,0.5-4.4C468,51.3,467.7,50,467.1,49.3z"/>
	<path class="st0" d="M554.6,46.2c-1.5,2.7-3.6,5.1-6.3,7.2c-2.6,2.1-5.7,3.7-9.3,5c-3.5,1.3-7.3,1.9-11.3,1.9c-1.6,0-2.9-0.1-4-0.3
		c-1.1-0.2-2.1-0.5-3-0.9L512.8,84c-0.1,0.2,0.1,0.4,0.5,0.4h8.1c0.1,0,0.1,0.3,0,0.8c-0.2,0.5-0.3,0.8-0.4,0.8h-30
		c-0.1,0-0.1-0.3,0-0.8c0.2-0.5,0.3-0.8,0.4-0.8h8.1c0.4,0,0.6-0.1,0.6-0.4l19-60.1c0.1-0.2,0-0.4-0.5-0.4h-8.1
		c-0.1,0-0.1-0.2,0-0.7c0.1-0.5,0.3-0.7,0.4-0.7h25.3c3.7,0,6.9,0.3,9.5,0.9c2.6,0.6,4.7,1.6,6.4,2.9c1.6,1.3,2.8,2.9,3.6,4.9
		s1.1,4.3,1.1,7C556.9,40.8,556.2,43.5,554.6,46.2z M545.2,27c-0.2-0.8-0.5-1.4-1.1-1.9c-0.5-0.5-1.3-0.9-2.3-1.2
		c-1-0.3-2.3-0.4-3.8-0.4h-5.6c-0.4,0-0.6,0.1-0.7,0.4l-10.5,33.7c1,0.5,1.9,0.8,2.9,1c1,0.2,2.3,0.3,4.1,0.3c2.5,0,4.6-0.5,6.2-1.4
		c1.6-1,3-2.5,4.4-4.5c0.6-0.9,1.3-2.3,2.1-4.3c0.8-1.9,1.5-4.1,2.2-6.4c0.7-2.3,1.3-4.6,1.8-6.8c0.5-2.2,0.7-4.1,0.7-5.6
		C545.5,28.7,545.4,27.8,545.2,27z"/>
	<path class="st0" d="M589.2,80.7c-0.2,0.7-0.1,1.3,0.1,1.8c0.3,0.6,0.8,0.9,1.7,0.9c1.4,0,2.8-0.6,4.2-1.8c1.3-1.2,2.6-2.7,3.7-4.6
		l1.4,0.5c-0.7,1.4-1.6,2.6-2.6,3.8c-1,1.1-2,2.1-3.1,2.9c-1.1,0.8-2.2,1.4-3.4,1.8c-1.2,0.4-2.3,0.6-3.4,0.6
		c-2.6,0-4.6-0.9-5.9-2.7c-1.3-1.8-1.6-4.1-0.7-6.9c-3.1,6.4-7.2,9.6-12.2,9.6c-2.2,0-4-0.4-5.5-1.3c-1.5-0.8-2.7-1.9-3.6-3.3
		c-0.9-1.4-1.6-2.9-2-4.6c-0.4-1.7-0.6-3.5-0.6-5.3c0-2.9,0.6-5.8,1.9-8.8c1.3-3,3.1-5.7,5.3-8.2c2.2-2.5,4.9-4.5,7.9-6.1
		c3-1.6,6.3-2.4,9.8-2.4c1.6,0,3,0.4,4.2,1.2c1.3,0.8,2,2,2.3,3.5l1.7-3.9l9.7-1L589.2,80.7z M586.2,49.8c-1.1-1.1-2.4-1.7-4.2-1.7
		c-0.7,0-1.4,0.1-2.2,0.4c-0.7,0.3-1.6,0.8-2.7,1.6c-1.6,1.3-3.1,3.1-4.5,5.5c-1.4,2.4-2.5,5-3.5,7.8c-1,2.8-1.7,5.6-2.2,8.3
		c-0.5,2.8-0.8,5.1-0.8,6.9c0,2.3,0.4,3.9,1.1,4.8c0.8,0.9,1.8,1.3,3.1,1.3c2.3,0,4.4-1.3,6.4-3.9c2-2.6,4-6.3,5.9-11.2l5-15.7
		C587.8,52.3,587.3,50.9,586.2,49.8z"/>
	<path class="st0" d="M638.3,80.6c-0.7,1.9,0,2.9,2.1,2.9c1.4,0,2.7-0.5,3.8-1.4c1.2-1,2.4-2.6,3.7-4.9l1.3,0.5
		c-1.6,3.2-3.6,5.6-5.8,7c-2.3,1.4-4.5,2.1-6.6,2.1c-1.3,0-2.5-0.3-3.6-0.8s-1.9-1.4-2.6-2.5c-0.6-1.1-1-2.5-1-4.2
		c-0.1-1.7,0.3-3.8,1.2-6.2c-2.9,5-5.7,8.6-8.5,10.6c-2.8,2-5.5,3.1-7.9,3.1c-2.3,0-4.2-0.7-5.7-2.1c-1.4-1.4-2.2-3.4-2.2-6
		c0-2.2,0.4-4.6,1.3-7.1c0.8-2.5,1.8-4.9,2.8-7.2c1-2.3,1.9-4.5,2.8-6.6c0.8-2,1.3-3.7,1.3-5c0-1-0.2-1.7-0.5-2.2
		c-0.3-0.4-0.8-0.6-1.6-0.6c-0.8,0-1.7,0.5-2.7,1.4c-1,0.9-1.9,2.3-2.8,4.1l-1.3-0.5c1.2-2.8,2.8-4.8,4.7-6.1c1.9-1.3,3.9-1.9,6-1.9
		c2.3,0,4.1,0.6,5.2,1.9c1.1,1.3,1.7,2.9,1.7,4.8c0,1.9-0.4,3.8-1.2,5.8c-0.8,2-1.6,4.1-2.5,6.2c-0.9,2.1-1.7,4.2-2.5,6.3
		c-0.8,2.1-1.2,4.2-1.2,6.2c0,1.1,0.3,2,0.8,2.7c0.5,0.7,1.4,1.1,2.4,1.1c1,0,2-0.3,3-0.8c1-0.5,2-1.3,3-2.4c1-1.1,2.2-2.6,3.4-4.4
		c1.2-1.8,2.5-4.1,4-6.7l6.3-20l9.9-0.5L638.3,80.6z"/>
	<path class="st0" d="M681.8,57.9c-0.8,0.8-1.8,1.1-3.1,1.1c-1.4,0-2.4-0.3-3-1c-0.6-0.7-0.9-1.5-0.9-2.5c0-0.5,0.1-1,0.3-1.4
		c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.4-0.6,0.6-0.9c0.2-0.3,0.3-0.7,0.3-1.1c0-1.9-1.4-2.8-4.3-2.8c-2,0-3.6,0.5-4.6,1.5
		c-1,1-1.5,2.5-1.5,4.3c0,1.3,0.3,2.5,0.9,3.5c0.6,1,1.4,2,2.2,2.9c0.9,0.9,1.9,1.9,3,2.8c1.1,1,2.1,2,3,3.1
		c0.9,1.1,1.6,2.3,2.2,3.6c0.6,1.3,0.9,2.9,0.9,4.7c0,1.6-0.3,3-1,4.5c-0.7,1.4-1.7,2.7-3,3.8c-1.3,1.1-2.9,2-4.8,2.7s-4.1,1-6.5,1
		c-1.8,0-3.5-0.3-5-0.8c-1.5-0.5-2.8-1.2-3.9-2s-1.9-1.8-2.5-2.9c-0.6-1.1-0.9-2.3-0.9-3.5c0-1.6,0.4-2.9,1.3-4.1
		c0.9-1.2,2-1.8,3.4-1.8c1.4,0,2.5,0.5,3.1,1.4c0.7,0.9,1,1.8,1,2.7c0,1-0.1,1.8-0.4,2.2c-0.3,0.5-0.6,0.9-0.9,1.2
		c-0.4,0.3-0.7,0.6-0.9,0.9c-0.3,0.3-0.4,0.8-0.4,1.3c0,1.1,0.5,2,1.4,2.7c0.9,0.7,2.5,1,4.8,1c2.6,0,4.4-0.6,5.5-1.9
		c1.1-1.3,1.7-2.9,1.7-4.9c0-1.5-0.3-2.8-0.9-3.9c-0.6-1.1-1.3-2.1-2.1-3c-0.8-0.9-1.8-1.8-2.7-2.6s-1.9-1.7-2.7-2.6
		c-0.8-0.9-1.5-2-2.1-3.1c-0.6-1.1-0.9-2.5-0.9-4c0-1.5,0.4-3,1.1-4.5c0.7-1.5,1.7-2.8,3-4c1.3-1.2,2.7-2.2,4.4-2.9
		c1.6-0.7,3.4-1.1,5.4-1.1c1.4,0,2.7,0.2,4,0.6c1.3,0.4,2.4,0.9,3.3,1.6c0.9,0.7,1.7,1.5,2.2,2.4c0.6,1,0.9,2,0.9,3.1
		C683,56,682.6,57.1,681.8,57.9z"/>
	<path class="st0" d="M719.6,59.9c-1.1,1.4-2.6,2.7-4.5,3.7c-1.9,1-4.1,1.8-6.7,2.3c-2.6,0.5-5.3,0.8-8.2,0.8h-2.4
		c-0.7,2.1-1.2,4.2-1.6,6.3c-0.4,2.1-0.6,3.9-0.6,5.3c0,2.2,0.4,3.9,1.2,5.2c0.8,1.2,2.2,1.8,4.3,1.8c1.6,0,3.1-0.2,4.4-0.5
		c1.3-0.4,2.5-0.9,3.6-1.5c1.1-0.7,2.1-1.4,3.1-2.3c1-0.9,1.9-1.9,2.9-2.9l0.8,1c-2.1,2.5-4.3,4.4-6.7,5.7c-2.3,1.3-5,1.9-8.1,1.9
		c-2,0-3.9-0.4-5.6-1.1s-3.2-1.7-4.5-3.1c-1.3-1.3-2.2-2.9-2.9-4.8c-0.7-1.9-1-3.9-1-6.1c0-3.2,0.6-6.4,1.9-9.4c1.3-3,2.9-5.7,5-8
		c2.1-2.3,4.5-4.2,7.2-5.5c2.7-1.4,5.6-2.1,8.6-2.1c1.9,0,3.5,0.2,5,0.7c1.4,0.5,2.7,1.1,3.6,1.8c1,0.8,1.7,1.6,2.2,2.6
		c0.5,1,0.7,2,0.7,3.1C721.3,56.9,720.7,58.5,719.6,59.9z M712.2,49.3c-0.6-0.7-1.5-1-2.7-1c-1.6,0-3,0.5-4.1,1.4
		c-1.1,0.9-2.1,2.1-3,3.6c-0.9,1.5-1.6,3.3-2.3,5.4c-0.7,2.1-1.3,4.3-2,6.6h1.7c2.8,0,5-0.4,6.8-1.1c1.7-0.7,3.1-1.7,4-2.8
		c1-1.2,1.6-2.5,1.9-3.9c0.3-1.4,0.5-2.9,0.5-4.4C713.1,51.3,712.8,50,712.2,49.3z"/>
</g>
</svg>

</div>	

<div class="page">
	<div class="grid">
 	<img src="01_Site_Atmen_ohne_Pause_Gestaltung_final_01_26.jpg" alt="layout" width="" height="" > 
</div>





<div class="section section-1">

	<div class="stapel">
		<div class="bild-element section-1--image-1"><img  src="img/_MG_4901-Kuhaeute_low.jpg"></div>
		<div class="bild-element section-1--image-2"><img  src="img/Zur-Schlachtung-markiertes-Schwein_low.jpg"></div>
	</div>
	
	
	<div class="text-bild">
 			<div class="bild-element">
			<img src="img/_MG_4855-Kopie_low.jpg" alt="_MG_4855-Kopie_low-jpg" width="" height="" >
 			</div>
 			<div class="text-element">
		<?php zeige_text($content[1]); ?>
 			</div>
	</div>	
	
</div> <!-- section 1 -->


<div class="section section-2">
	
	
		<div class="stapel">

			<div class="bild-element section-2--image-1"><img  src="img/Ruhende-Kuh_low.jpg"></div>
			<div class="text-element section-2--text">
				<?php zeige_text($content[2]);?>
			</div>

		</div>		
				
		
</div>	

<div class="section section-3">
	<div class="bild-element section-3--image-1">
	<img src="img/_MG_9649-Kopie_low.jpg" alt="_MG_9649-Kopie_low" width="" height="" >
	</div>
	<div class="bild-element section-3--image-2">
<img src="img/11-000-Schweineohrmarken-eines-Tages-in-einem-Schlachthof_low.jpg" alt="11-000-Schweineohrmarken-eines-Tages-in-einem-Schlachthof_low" width="" height="" >
	</div>
</div>
</div>


<div class="section section-4 ">
	<div class="stapel">
		
			<div class="bild-element section-4--image-1"><img  src="img/Schweinetransporter_low.jpg"></div>
			<div class="text-element section-4--text-1"><?php zeige_text($content[3]);?></div>
			<div class="bild-element section-4--image-2"><img  src="img/Schornsteine-auf-einem-sehr-großen-Schweineschlachthaus_low.jpg"></div>
			<div class="text-element section-4--text-2"><?php zeige_text($content[4]);?></div>

	</div>	
	
</div>	



<div class="section section-5">
	<div class="stapel">
				<div class="bild-element section-5--image-1"><img  src="img/Kaelbchen-in-der-Tierkoerperverwertungsanstalt-II_low.jpg"></div>
				<div class="text-element section-5--text-1"><?php zeige_text($content[5]);?></div>
				<div class="bild-element section-5--image-2"><img  src="img/Haut-waehrend-des-ersten-Gerbevorganges_low.jpg"></div>
				<div class="bild-element section-5--image-3"><img  src="img/Moschusenten_low.jpg"></div>

		
	</div>	
	
</div>	


<div class="section section-6">
	<div class="stapel">
				<div class="text-element section-6--text-1"><?php zeige_text($content[6]);?></div>
				<div class="bild-element section-6--image-1"><img  src="img/J1_MG_3984-Kopie_low.jpg"></div>
				<div class="bild-element section-6--image-2"><img  src="img/_MG_3887-Kopie_low.jpg"></div>
				<div class="bild-element section-6--text-2"><?php zeige_text($content[7]);?></div>

	</div>
	
</div>

<div class="section section-7">
	<div class="stapel">
				<div class="bild-element section-7--image-1"><img  src="img/Aufgehaengt-zur-Schlachtung-VI_low.jpg"></div>
				<div class="bild-element section-7--image-2"><img  src="img/_MG_4855-Kopie_low.jpg"></div>
				
				<div class="text-element section-7--text-1"><?php zeige_text($content[8]);?></div>

	</div>
</div>











<div class="legende">
	<?php echo zeige_text($content[9]); ?>
<p class="erschienen">
	<?php echo zeige_text($content[10]); ?>
 </p>

</div>



</div>



</div>

<?php zeige_footer(); ?>

</body>
</html>