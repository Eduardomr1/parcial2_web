<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php
		
		$numero= rand(1,4);
		$color = ["#e1bdff", "#f44336", "#335a63", "#f8b414"];
		$numcolor = rand(0,3);
		echo "Numero generado = " . $numero ."<br>"; 
		echo "<div style='color:".$color[$numcolor]."'>color generado</div>";

		if ($numero == 1) {	
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?> "> pagina</h1>

	<?php } elseif($numero == 2) { ?>


		<h2 style="color: <?php echo $color[$numcolor]; ?> "> pagina 2</h2>

	<?php }elseif ($numero == 3) { ?>
	
		<h3 style="color: <?php echo $color[$numcolor]; ?> "> pagina 3</h3>

	<?php }else {?>

			<h4 style="color: <?php echo $color[$numcolor]; ?> ">pagina 4</h4>

	<?php }
	echo "<h1>Nombre: Maytorena Ruvalcaba Eduardo</h1>"; ?>
</body>
</html>