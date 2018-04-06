<?php 
	require_once 'config.php';
	$result = false;
	if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$edad_min = $_POST['edad_min'];
		$edad_max = $_POST['edad_max'];
		$ptg_hombre = $_POST['ptg_hombre'];
		$ptg_mujer = $_POST['ptg_mujer'];

		$sql = 'INSERT INTO DEPARTAMENTOS(NOMBRE, EDAD_MIN, EDAD_MAX, PTG_HOMBRE, PTG_MUJER) VALUES(:nombre, :edad_min, :edad_max, :ptg_hombre, :ptg_mujer);';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'nombre'=>$nombre,
			'edad_min'=>$edad_min,
			'edad_max'=>$edad_max,
			'ptg_hombre'=>$ptg_hombre,
			'ptg_mujer'=>$ptg_mujer
		]);
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT DEPARTMENTS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>	
	<div class="container">
		<h1>Add User</h1>
		<a href="departments.php">Home</a>
		<?php 
			if ($result == true){
				echo '<div class="alert alert-success">Éxito!</div>';
			}
		?>
		<form action="departments.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
			<br>
			<label for="edad_min">Edad Mínima</label>
			<input type="text" name="edad_min">
			<br>
			<label for="edad_max">Edad Máxima</label>
			<input type="text" name="edad_max">
			<br>
			<label for="ptg_hombre">Porcentaje Hombres</label>
			<input type="text" name="ptg_hombre">
			<br>
			<label for="ptg_mujer">Porcentaje Mujeres</label>
			<input type="text" name="ptg_mujer">
			<br>
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>