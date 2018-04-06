<?php 
	require_once 'config.php';
	$result = false;
	if(!empty($_POST)){
		$promocion = $_POST['promocion'];
		$fecha_inicio = $_POST['fecha_inicio'];
		$fecha_fin = $_POST['fecha_fin'];

		$sql = 'INSERT INTO DESCUENTOS(PROMOCION, FECHA_INICIO, FECHA_FIN) VALUES(:promocion, :fecha_inicio, :fecha_fin);';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'promocion'=>$promocion,
			'fecha_inicio'=>$fecha_inicio,
			'fecha_fin'=>$fecha_fin,
		]);
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT USERS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>	
	<div class="container">
		<h1>Add Discount</h1>
		<a href="index.php">Home</a>
		<?php 
			if ($result == true){
				echo '<div class="alert alert-success">Éxito!</div>';
			}
		?>
		<form action="discounts.php" method="POST">
			<label for="promocion">Promocion</label>
			<input type="text" name="promocion">
			<br>
			<label for="fecha_inicio">Fecha Inicio</label>
			<input type="text" name="fecha_inicio">
			<br>
			<label for="fecha_fin">Fecha Fin</label>
			<input type="text" name="fecha_fin">
			<br>
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>