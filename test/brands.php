<?php 
	require_once 'config.php';
	$result = false;
	if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$edad_min = $_POST['edad_min'];
		$edad_max = $_POST['edad_max'];
		$ptg_hombres = $_POST['ptg_hombres'];
		$ptg_mujeres = $_POST['ptg_mujeres'];

		$sql = 'INSERT INTO MARCAS(NOMBRE, EDAD_MIN, EDAD_MAX, PTG_HOMBRE, PTG_MUJER) VALUES(:name, :edad_min, :edad_max, :ptg_hombres, :ptg_mujeres);';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'name'=>$nombre,
			'edad_min'=>$edad_min,
			'edad_max'=>$edad_max,
			'ptg_hombres'=>$ptg_hombres,
			'ptg_mujeres'=>$ptg_mujeres
		]);
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT BRANDS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>	
	<div class="container">
		<h1>Add Brand</h1>
		<a href="index.php">Home</a>
		<?php 
			if ($result == true){
				echo '<div class="alert alert-success">Éxito!</div>';
			}
		?>
		<form action="brands.php" method="POST">
			<label for="nombre">Marca</label>
			<input type="text" name="nombre">
			<br>
			<label for="edad_min">Edad Mínima</label>
			<input type="number" name="edad_min">
			<br>
			<label for="edad_max">Edad Máxima</label>
			<input type="number" name="edad_max">
			<br>
			<label for="ptg_hombres">Porcentaje de Hombres</label>
			<input type="number" name="ptg_hombres">
			<br>
			<label for="ptg_mujeres">Porcentaje Mujeres</label>
			<input type="number" name="ptg_mujeres">
			<br>
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>