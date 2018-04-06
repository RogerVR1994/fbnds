<?php 
	require_once 'config.php';
	$result = false;
	if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$edad = $_POST['edad'];
		$genero = $_POST['genero'];

		$sql = 'INSERT INTO USUARIOS(NOMBRE, APELLIDO, CORREO, EDAD, GENERO) VALUES(:nombre, :apellido, :correo, :edad, :genero);';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'nombre'=>$nombre,
			'apellido'=>$apellido,
			'correo'=>$correo,
			'edad'=>$edad,
			'genero'=>$genero
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
		<h1>Add User</h1>
		<a href="index.php">Home</a>
		<?php 
			if ($result == true){
				echo '<div class="alert alert-success">Éxito!</div>';
			}
		?>
		<form action="users.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
			<br>
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido">
			<br>
			<label for="correo">Correo</label>
			<input type="email" name="correo">
			<br>
			<label for="edad">Edad</label>
			<input type="text" name="edad">
			<br>
			<label for="genero">Género</label>
			<input type="text" name="genero">
			<br>
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>