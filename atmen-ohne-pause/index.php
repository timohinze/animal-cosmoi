<?php 
   include_once("../functions.php"); 
   zeige_header("Atmen ohne Pause");
   include_once("content.php");


   var_dump($content[0]["de"]);
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


	body, html {
  height: 100%;
}
	body{
		  font-family: "GFS Didot", serif;
  font-weight: 400;
  font-style: normal;
font-size: 15px;
line-height: 1.2;

  height: 100vh;
  background: url('bg.jpg');
  background-size: cover;
	}
	

	.page {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0;
  position: relative;
}
	

	
	
	
	.grid{
		position: absolute;
		left: 0;
		right: 0;
		opacity: 0.4;
		        transform: translateY(-28px);
		        display: none;
	}
	
	.grid img{
			width: 100%;
		max-width: inherit;
	
	}
	

	
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
	display: flex;
	margin-left: 18vw;
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
    margin-left: 44vw;
    margin-top: -303px;
}

.section-6--image-2 {
    width: var(--bild-breite-1-hochformat);
    margin-left: 330px;
    padding-top: 30px;
}



.section-6--text-2 {
    margin-top: 55px;
    padding-left: 48vw;
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
    margin-left: 37vw;
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

.erschienen{
	margin-top: 70px;
	font-size: 16px;
}







	@media (max-width: 1020px) {
body{
	border-top: 1px solid yellow;
}

.stapel{
		flex-direction: column;

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
	margin-top: 50px;
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
 	margin-top: 50px; 
 	margin-left: auto;
 	margin-right: auto;
 	    justify-content: center;
}

.section-3 img{
	margin: auto;
	width: 80%;
	margin-bottom: 20px;
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
	

.legende {
    margin-left: 0;
}

.legende ul{
	    column-count: 1;
    width: auto;
}
}
}
</style>	

</head>

<body>


<div class="page">
	<div class="grid">
 	<img src="01_Site_Atmen_ohne_Pause_Gestaltung_final_01_26.jpg" alt="layout" width="" height="" > 
</div>


<br><br><br>

<div class="section section-1">

	<div class="stapel">
		<div class="section-1--image-1"><img  src="img/_MG_4901-Kuhaeute_low.jpg"></div>
		<div class="section-1--image-2"><img  src="img/Zur-Schlachtung-markiertes-Schwein_low.jpg"></div>
	</div>
	
	
	<div class="text-bild">
 			
			<img src="img/_MG_4855-Kopie_low.jpg" alt="_MG_4855-Kopie_low-jpg" width="" height="" >
		<?php zeige_text($content[1]); ?>
	</div>	
	
</div> <!-- section 1 -->


<div class="section section-2">
	
	
		<div class="stapel">

			<div class="section-2--image-1"><img  src="img/Ruhende-Kuh_low.jpg"></div>
			<div class="section-2--text">
				<?php zeige_text($content[2]);?>
			</div>

		</div>		
				
		
</div>	

<div class="section section-3">
	
	<img src="img/_MG_9649-Kopie_low.jpg" alt="_MG_9649-Kopie_low" width="" height="" >
<img src="img/11-000-Schweineohrmarken-eines-Tages-in-einem-Schlachthof_low.jpg" alt="11-000-Schweineohrmarken-eines-Tages-in-einem-Schlachthof_low" width="" height="" >
</div>


<div class="section section-4 ">
	<div class="stapel">
		
			<div class="section-4--image-1"><img  src="img/Schweinetransporter_low.jpg"></div>
			<div class="section-4--text-1"><?php zeige_text($content[3]);?></div>
			<div class="section-4--image-2"><img  src="img/Schornsteine-auf-einem-sehr-großen-Schweineschlachthaus_low.jpg"></div>
			<div class="section-4--text-2"><?php zeige_text($content[4]);?></div>

	</div>	
	
</div>	



<div class="section section-5">
	<div class="stapel">
				<div class="section-5--image-1"><img  src="img/Kaelbchen-in-der-Tierkoerperverwertungsanstalt-II_low"></div>
				<div class="section-5--text-1"><?php zeige_text($content[5]);?></div>
				<div class="section-5--image-2"><img  src="img/Haut-waehrend-des-ersten-Gerbevorganges_low.jpg"></div>
				<div class="section-5--image-3"><img  src="img/Moschusenten_low.jpg"></div>

		
	</div>	
	
</div>	


<div class="section section-6">
	<div class="stapel">
				<div class="section-6--text-1"><?php zeige_text($content[6]);?></div>
				<div class="section-6--image-1"><img  src="img/J1_MG_3984-Kopie_low.jpg"></div>
				<div class="section-6--image-2"><img  src="img/_MG_3887-Kopie_low.jpg"></div>
				<div class="section-6--text-2"><?php zeige_text($content[7]);?></div>

	</div>
	
</div>

<div class="section section-7">
	<div class="stapel">
				<div class="section-7--image-1"><img  src="img/Aufgehaengt-zur-Schlachtung-VI_low.jpg"></div>
				<div class="section-7--image-2"><img  src="img/_MG_4855-Kopie_low.jpg"></div>
				
				<div class="section-7--text-1"><?php zeige_text($content[8]);?></div>

	</div>
</div>

<div class="legende">
	<?php echo zeige_text($content[9]); ?>
</div>

<p class="erschienen">
	<?php echo zeige_text($content[10]); ?>
 </p>


</div>


<br><br><br><br><br><br><br>

</div>

</body>
</html>