<?php 
   include_once("../functions.php"); 
   zeige_header("filamenta");
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


/*
section 1
*/

.section-1 .stapel{
	    flex-direction: column;

}

.section-1__bild-1 {
    width: 835px;
    margin-left: 280px;
    margin-bottom: 35px;
}

.section-1__text-1 {
    margin-left: 750px;
}

.section-1__bild-2 {
    margin-top: -25px;
    width: 360px;
    margin-left: 63px;
    z-index: 1;
}

.section-1__bild-3 {
    margin-top: -105px;
    width: 430px;
    margin-left: 390px;
    margin-bottom: 190px;
}



/* section 2 */

.section-2 .stapel{
	flex-direction: row;
}

.section-2__text-1 {
    margin-left: 60px;
}

.section-2__bild-1 {
    width: 540px;
    margin-left: 585px;
    margin-top: -130px;
}

.section-2__bild-2 {
    width: 480px;
    margin-left: 60px;
    margin-top: -100px;
    margin-bottom: 125px;
}

.section-2__bild-3 {
    width: 440px;
    margin-left: 700px;
    margin-bottom: 30px;
}


.section-2__bild-4 {
    width: 300px;
    margin-left: 65px;
}


.section-2__bild-5 {
    width: 300px;
    margin-left: 40px;
    margin-bottom: 35px;
}

.section-2__bild-6 {
    width: 540px;
    margin-left: 500px;
    margin-bottom: 120px;
}


/* section 3 */

.section-3 .stapel{
	flex-direction: row;
}

.section-3__bild-1 {
    width: 700px;
    margin-left: 210px;
    margin-bottom: 30px;
}

.section-3__bild-2 {
    width: 410px;
    margin-left: 700px;
    margin-bottom: 120px;
}


.section-3__bild-3 {
    width: 420px;
    margin-left: 60px;
}

.section-3__bild-4 {
    width: 420px;
    margin-left: 35px;
    margin-bottom: 260px;

}


/* section 4 */

.section-4 .stapel{
	flex-direction: column;
}


.section-4__text-1 {
    margin-left: 215px;
}

.section-4__bild-1 {
    width: 370px;
    margin-top: -200px;
    margin-left: 750px;
    margin-bottom: 116px;
}

.section-4__bild-2 {
    width: 450px;
    margin-left: 150px;
    z-index: 1;
}

.section-4__bild-3 {
    width: 630px;
    margin-top: -30px;
    margin-left: 500px;
    margin-bottom: 40px;
}

.section-4__text-2 {
    margin-left: 200px;
    margin-bottom: 100px;
}




/* section 5 */

.section-5 .stapel{
	flex-direction: row;
}

.section-5__bild-1 {
    width: 320px;
    margin-left: 60px;
}

.section-5__bild-2 {
    width: 320px;
    margin-left: 50px;
}

.section-5__text-1 {
    margin-top: 410px;
    margin-left: 45px;
    margin-bottom: 90px;
}

.section-5__text-2 {
    margin-left: 500px;
    margin-bottom: 50px;
}
.section-5__text-3 {
    margin-left: 325px;
    width: 530px;
    margin-bottom: 65px;
}

.section-5__text-4 {
    margin-left: 430px;
    margin-bottom: 100px;
}


.section-5__text-5 {
    width: 550px;
    margin-left: 390px;
    margin-bottom: 130px;

}

/* section 6 */

.section-6 .stapel{
	flex-direction: row;
}

.section-6__text-1 {
	    margin-left: 103px;
    margin-top: 335px;
}

.section-6__bild-2 {
    width: 740px;
    margin-left: 80px;
}










</style>
</head>

<body>


<div class="page filamenta">
	<div class="grid">
 		<img src="03_Site_filamenta_Gestaltung final_01_28.jpg" alt="layout" width="" height="" > 
	</div>


<div class="section section-1">
	<div class="stapel">
				
		<div class="section-1__bild-1">
			<img src="img/A_EC14Gram_089-Kopie-10-Maerz-Kopie_low.jpg" />
		</div>
		
		<div class="section-1__text-1">
				<?php zeige_text($content[1]); ?> 
		</div>

		
		<div class="section-1__bild-2">
			<img src="img/B_MG_6758-Kopie_low.jpg" />			
		</div>
		
		<div class="section-1__bild-3">
			<img src="img/C_DSC_6736-Kopie-Kopie_low.jpg" />			
		</div>	
		
	</div>		

</div>	


<div class="section section-2">
	<div class="stapel">
				
		
		<div class="section-2__text-1">
				<?php zeige_text($content[2]); ?> 
		</div>

		
		<div class="section-2__bild-1">
			<img src="img/D_286A1596-Kopie_low.jpg" />			
		</div>
		
		<div class="section-2__bild-2">
			<img src="img/E_286A8910_low.jpg" />			
		</div>		

		<div class="section-2__bild-3">
			<img src="img/F_MG_6372-Kopie_low.jpg" />			
		</div>		

		<div class="section-2__bild-4">
			<img src="img/G_286A2148-Kopie_low.jpg" />			
		</div>	

		<div class="section-2__bild-5">
			<img src="img/H_286A2209-Kopie_low.jpg" />			
		</div>	
		
		<div class="section-2__bild-6">
			<img src="img/I_DSC_4126_d-Kopie_low.jpg" />			
		</div>								

	</div>

</div>	


<div class="section section-3">
	<div class="stapel">
				
				
		<div class="section-3__bild-1">
			<img src="img/J_DSC9786-Fischbuch-Kopie_low.jpg" />			
		</div>
		
		<div class="section-3__bild-2">
			<img src="img/K_MG_6744-Kopie_low.jpg" />			
		</div>		

		<div class="section-3__bild-3">
			<img src="img/L_286A0263-Kopie_low.jpg" />			
		</div>		

		<div class="section-3__bild-4">
			<img src="img/M_286A8394-Kopie_low.jpg" />			
		</div>		
								

	</div>

</div>	


<div class="section section-4">
	<div class="stapel">
				
		<div class="section-4__text-1">
				<?php zeige_text($content[3]); ?> 
		</div>
		
				
		<div class="section-4__bild-1">
			<img src="img/N_286A9389-Kopie_low.jpg" />			
		</div>
		
		<div class="section-4__bild-2">
			<img src="img/O_MG_1500-Kopie_low.jpg" />			
		</div>		

		<div class="section-4__bild-3">
			<img src="img/P_DSC_5986-Kopie_low.jpg" />			
		</div>		

		<div class="section-4__text-2">
				<?php zeige_text($content[4]); ?> 
		</div>
								

	</div>

</div>	


<div class="section section-5">
	<div class="stapel">
				
		
				
		<div class="section-5__bild-1">
			<img src="img/Q_DSC_6556-Kopie_low.jpg" />			
		</div>
		
		<div class="section-5__bild-2">
			<img src="img/R_286A4488-Kopie_low.jpg" />			
		</div>		

		<div class="section-5__text-1">
				<?php zeige_text($content[5]); ?> 
		</div>

		<div class="section-5__text-2">
				<?php zeige_text($content[6]); ?> 
		</div>		

		<div class="section-5__text-3">
				<?php zeige_text($content[7]); ?> 
		</div>		

		<div class="section-5__text-4">
				<?php zeige_text($content[8]); ?> 
		</div>		

		<div class="section-5__text-5">
				<?php zeige_text($content[9]); ?> 
		</div>		

	</div>

</div>	


<div class="section section-6">
	<div class="stapel">
				
		
		<div class="section-6__text-1">
				<?php zeige_text($content[10]); ?> 
		</div>	
		
		<div class="section-6__bild-2">
			<img src="img/S_EC14Gram_011-Kopie-5-Maerz-Kopie_low.jpg" />			
		</div>			

	</div>

</div>	


<div class="legende">
	<?php echo zeige_text($content[11]); ?>

<p class="erschienen">	<?php echo zeige_text($content[12]); ?></p>

</div>



</div>