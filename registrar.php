<?php 

include("ConBD.php");
if (isset($_POST['REGISTRAR'])) {
    if (strlen($_POST['NumeroP']) >= 1 && 
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['Tipo1']) >= 1 &&
    strlen($_POST['Tipo2']) >= 0 &&
    strlen($_POST['Altura']) >= 1 &&
    strlen($_POST['Peso']) >= 1 &&
    strlen($_POST['Descripcion']) >= 1){
        $num = trim($_POST['NumeroP']);
	    $nombre = trim($_POST['nombre']);
	    $tipo1 = trim($_POST['Tipo1']);
	    $tipo2 = trim($_POST['Tipo2']);
        $altura = trim($_POST['Altura']);
        $peso = trim($_POST['Peso']);
        $desc = trim($_POST['Descripcion']);
	    $consulta = "INSERT INTO datos(NumeroP, Nombre, Tipo1, Tipo2, Altura, Peso, Descripcion) 
                    VALUES ('$num', '$nombre','$tipo1','$tipo2', '$altura', '$peso', '$desc')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡EL POKEMON SE HA REGISTRADO CORRECTAMENTE!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡UPS, HA OCURRIDO UN ERROR!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡POR FAVOR COMPLETE LOS CAMPOS!</h3>
           <?php
    }
}

?>