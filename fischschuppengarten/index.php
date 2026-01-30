<?php 
   include_once("../functions.php"); 
   zeige_header("Fischschuppengarten");
   include_once("content.php");

?>

<style>
	
img{
	max-width: 100%;
	height: auto;
}

.stapel{
	display: flex;
	flex-wrap: wrap;
}

/* section 1 */

.section.section-1 {
    margin-bottom: 115px;
}


.section-1__text-1 {
    width: 447px;
    margin-left: 282px;
}


.section-1__bild-1 {
    width: 200px;
    margin-left: 34px;
    margin-top: -7px;
}

.section-1__bild2 {
    width: 770px;
    margin-left: 60px;
    margin-top: -25px;
}


/* section 2 */

.section.section-2 {
    margin-bottom: 150px;
}

.section-2__bild-1 {
    margin-left: 50vw;
    width: 420px;
}

.section-2__bild-2 {
    width: 375px;
    margin-left: 28vw;
    margin-top: -40px;
    margin-bottom: 30px;
}

.section-2__text-1 {
    margin-left: 390px;
    width: 415px;
    margin-bottom: 30px;
}

.section-2__bild-3 {
    width: 420px;
    margin-left: 51vw;
}


/* section 3 */
.section-3__bild-1 {
    width: 760px;
    margin-left: 26vw;
        margin-bottom: 50px;
    
}

.section-3__bild-2 {
    width: 530px;
    margin-left: 59px;
}

.section-3__bild-3 {
    width: 530px;
    margin-left: 20px;
    margin-bottom: 120px;
}


/* section 4 */

.section-4__bild-1 {
    width: 375px;
    margin-left: 260px;
}

.section-4__bild-2 {
    width: 485px;
    margin-left: -25px;
    margin-top: 160px;
    margin-bottom: 70px;
}

.section-4__bild-3 {
    width: 765px;
    margin-left: 150px;
    margin-bottom: 66px;
}

.section-4__bild-4 {
    width: 425px;
    margin-left: 49vw;
}


.section-4__bild-5 {
    width: 500px;
    margin-top: -20px;
    margin-left: 280px;
    margin-bottom: 120px;
}

/* section 5 */

.section-5__text-1 {
    margin-left: 170px;
    width: 413px;
    margin-bottom: 250px;
}


/* section 6 */

.section-6__bild-1 {
    width: 860px;
    margin-left: 280px;
    margin-bottom: 50px;
}

.section-6__text-1 {
    margin-left: 220px;
    width: 410px;

}








.legende ul{
	    column-count: 1
	    }








</style>
</head>

<body>


<div class="page Fischschuppengarten">
	<div class="grid">
 		<img src="02_Site_Fischschuppengarten_Gestaltung final_01_26.jpg" alt="layout" width="" height="" > 
	</div>


<div class="section section-1">
	<div class="stapel">
		
		<div class="section-1__text-1">
				<?php zeige_text($content[1]); ?> 
		</div>
		
		<div class="section-1__bild-1">
			<img src="img/A_MG_3532-Kopie_low.jpg" />
		</div>
		
		<div class="section-1__bild2">
			<img src="img/B_286A8612-2-Kopie_low.jpg" />			
		</div>
	</div>	
		
</div>	




<div class="section section-2">
	<div class="stapel">
			
		<div class="section-2__bild-1">
			<img src="img/C__DSC9835-Kopie_low.jpg" />			
		</div>
		
		<div class="section-2__bild-2">
			<img src="img/D_DSC9975-Kopie_low.jpg" />						
		</div>
		
		<div class="section-2__text-1">
			<?php zeige_text($content[2]); ?> 
		</div>
		
		<div class="section-2__bild-3">
			<img src="img/E_286A7205-Kopie_low.jpg" />						

		</div>		

			
	</div>
</div>	







<div class="section section-3">
	<div class="stapel">
			
		<div class="section-3__bild-1">
			<img src="img/F_286A8268_low.jpg" />						

		</div>
		
		<div class="section-3__bild-2">
			<img src="img/G_286A8926-1-Kopie_low.jpg" />						
		</div>
		
		<div class="section-3__bild-3">
			<img src="img/H_286A8865-Kopie_low.jpg" />						
		</div>		

			
	</div>
</div>	


<div class="section section-4">
	<div class="stapel">
			
		<div class="section-4__bild-1">
				<img src="img/I_286A8652-Kopie_low.jpg" />						
		</div>
		
		<div class="section-4__bild-2">
				<img src="img/J_286A8732-Kopie_low.jpg" />						
		</div>
		
		<div class="section-4__bild-3">
				<img src="img/K_286A8764-Kopie_low.jpg" />						
		</div>	

		<div class="section-4__bild-4">
				<img src="img/L_286A8404-Kopie_low.jpg" />						
		
		</div>				

		<div class="section-4__bild-5">
					<img src="img/M_286A8106.1 Kopie_low.jpg" />						
		</div>		
			
	</div>
</div>	



<div class="section section-5">
	<div class="stapel">
			

		<div class="section-5__text-1">
			<?php zeige_text($content[3]); ?> 
		</div>

			
	</div>
</div>	

<div class="section section-6">
	<div class="stapel">
			

		<div class="section-6__bild-1">
					<img src="img/N_Bildschirmfoto-2022-08-06-um-20-22-42_low.jpg" />						

		</div>


		<div class="section-6__text-1">
			<?php zeige_text($content[4]); ?> 
		</div>


			
	</div>
</div>	





</div>