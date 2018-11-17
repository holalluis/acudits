<center>
<?php
	$acudit=$_POST['acudit'];
	if(empty($acudit)){die("Acudit en blanc");}

	if( mail ("holalluis@gmail.com", "Acudit o suggerència", $_POST['acudit']) ) {
		printf("Missatge enviat correctament. Gràcies!");
	}else{
		printf("Missatge no enviat, torna-ho a provar més tard");
	}
?>
<br>
<a href="index.php">Enrere</a>
