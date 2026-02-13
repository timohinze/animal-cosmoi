<?php 
   include_once("../functions.php"); 
   zeige_header("Datenschutz");
   include_once("content.php");



?>
<style>
	a{
		color: #c8aa50;
		text-decoration: none;
	}
	
	.section{
		max-width: 1000px;
		margin-left: auto;
		margin-right: auto;
	}
	
</style>
</head>

<body>
	
	
<?php zeige_top_bar("#c8aa50"); ?>	
	
<div class="titel">
<h1>	<?php	echo zeige_text($content[0]); ?>
</h1>
</div>

	
<div class="section">
	<div class="text-element">
	<?php	echo zeige_text($content[1]); ?>
	
		
	</div>
</div>

<?php zeige_footer(); ?>

</body>
</html>