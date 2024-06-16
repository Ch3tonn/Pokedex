<!DOCTYPE html>
<html>
<head>
	<title>POKEMON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>
	<header>
		<nav class = "nav">
			<img class = "nav" src="logo.png">
			<h1>REGISTRAR NUEVO POKEMON</h1>
    		<form method="post" class = "nav-list">
				<input type="text" class = "btn-header" name="NumeroP" placeholder="Numero">
    			<input type="text" class = "btn-header" name="nombre" placeholder="Nombre">
    			<input type="text" class = "btn-header" name="Tipo1" placeholder="Primer Tipo">
				<input type="text" class = "btn-header" name="Tipo2" placeholder="Segundo Tipo">
				<input type="text" class = "btn-header" name="Altura" placeholder="Altura">
				<input type="text" class = "btn-header" name="Peso" placeholder="Peso">
				<input type="text" class = "btn-header" name="Descripcion" placeholder="Descripcion">
    			<input type="submit" class = "btn-submit" name="REGISTRAR">
    		</form>
			<form method="post" class = "nav-list">
				<input type="text" class = "btn-header" name="Buscar" placeholder="Buscar por ID">
				<input type="submit" class = "btn-submit" name="BUSCAR" >
			</form>
		</nav>
	</header>

        <?php 
        include("registrar.php");
		include("Mostrar.php");
        ?>
</body>
</html>
	
