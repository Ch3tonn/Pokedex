<?php
$inc = include("ConBD.php");
if ($inc) {
    if (isset($_POST['BUSCAR'])) {
        if (strlen($_POST['Buscar']) >= 1){
            $Buscar = trim($_POST['Buscar']);
            $consulta = "SELECT NumeroP, nombre, Tipo1, Tipo2, Altura, Peso, Descripcion FROM datos WHERE NumeroP = $Buscar";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?> 
	    	        <h3 class="ok">¡POKEMON ENCONTRADO!</h3>
                <?php
                while ($row = $resultado->fetch_array()) {
                    $num = $Buscar;
                    $numero = $row['NumeroP'];
                    $nombre = $row['nombre'];
                    $tipo1 = $row['Tipo1'];
                    $tipo2 = $row['Tipo2'];
                    $altura = $row['Altura'];
                    $peso = $row['Peso'];
                    $desc = $row['Descripcion'];
                    ?>
        <div id = "todos">
            <div class = "pokemon-todos" id = "listaPokemon">
                <div class = "pokemon">
                <div class = "contenedor">
                    <?php 
                    if($num < 10){
                        ?> <p class = "pokemon-id-back"> #00<?php echo $num; ?> </p> <?php
                    } else if ($num < 100) {
                        ?> <p class = "pokemon-id-back"> #0<?php echo $num; ?> </p> <?php
                    } else if ($num >= 100) {
                        ?> <p class = "pokemon-id-back"> #<?php echo $num; ?> </p> <?php
                    }
                    ?>
        	        <div class = "pokemon-imagen">
                        <?php
                        if ($num < 10){
                        ?>
                        <img src = 'https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_00<?php echo $row['NumeroP'];?>.png' alt = '<?php $nombre ?>'>
                        <?php
                        }else if ($num < 100){
                            ?>
                            <img src = "https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_0<?php echo $row['NumeroP']; ?>.png" alt = '<?php $nombre ?>'>
                            <?php
                        }else if ($num >= 100){
                            ?>
                            <img src = "https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_<?php echo $row['NumeroP']; ?>.png" alt = '<?php $nombre ?>'>
                            <?php
                        }
                ?>
                </div>
        		<div class = "pokemon-info">
                    <div class = "nombre-contenedor">
                        <p class = "pokemon-id"> <?php 
                            if($num < 10){
                                echo "#00"; echo $num; 
                            } else if($num < 100){
                                echo "#0"; echo $num; 
                            } else if($num >= 100){
                                echo "#"; echo $num;
                            }
                            ?>
                        </p>
        		        <h2 class = "pokemon-nombre"><?php echo $nombre; ?> </h2>
                    </div>
                        <div class = "pokemon-tipos">
                            <p class = "<?php echo $tipo1; ?> tipo"> <?php echo $tipo1; ?> </p>
                            <p class = "<?php echo $tipo2; ?> tipo"> <?php echo $tipo2; ?> </p>
                        </div>  
                        <div class = "pokemon-stats">
                            <p class = "stat"> <?php echo $altura; ?> M </p>
                            <p class = "stat"> <?php echo $peso; ?> Kg </p>
                        </main>
                        </div>
                    </div>
                    
                </div>
                <p class = "pokemon-info"> <?php echo $desc; ?> </p>

            </div>
        </div>
    </div>
    <?php
                }
            }
        }
    }
}
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conexion,$consulta);
    ?>
    <div class = "contenedor">
    <?php
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $num = $row['NumeroP'];
	    $nombre = $row['nombre'];
	    $tipo1 = $row['Tipo1'];
	    $tipo2 = $row['Tipo2'];
        $altura = $row['Altura'];
        $peso = $row['Peso'];
        $desc = $row['Descripcion'];
	    ?>
        <div id = "todos">
            <div class = "pokemon-todos" id = "listaPokemon">
                <div class = "pokemon">
                <div class = "contenedor">
                    <?php 
                    if($num < 10){
                        ?> <p class = "pokemon-id-back"> #00<?php echo $num; ?> </p> <?php
                    } else if ($num < 100) {
                        ?> <p class = "pokemon-id-back"> #0<?php echo $num; ?> </p> <?php
                    } else if ($num >= 100) {
                        ?> <p class = "pokemon-id-back"> #<?php echo $num; ?> </p> <?php
                    }
                    ?>
        	        <div class = "pokemon-imagen">
                        <?php
                        if ($num < 10){
                        ?>
                        <img src = 'https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_00<?php echo $row['NumeroP'];?>.png' alt = '<?php $nombre ?>'>
                        <?php
                        }else if ($num < 100){
                            ?>
                            <img src = "https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_0<?php echo $row['NumeroP']; ?>.png" alt = '<?php $nombre ?>'>
                            <?php
                        }else if ($num >= 100){
                            ?>
                            <img src = "https://www.pokencyclopedia.info/sprites/gen3/spr_firered-leafgreen/spr_frlg_<?php echo $row['NumeroP']; ?>.png" alt = '<?php $nombre ?>'>
                            <?php
                        }
                ?>
                </div>
        		<div class = "pokemon-info">
                    <div class = "nombre-contenedor">
                        <p class = "pokemon-id"> <?php 
                            if($num < 10){
                                echo "#00"; echo $num; 
                            } else if($num < 100){
                                echo "#0"; echo $num; 
                            } else if($num >= 100){
                                echo "#"; echo $num;
                            }
                            ?>
                        </p>
        		        <h2 class = "pokemon-nombre"><?php echo $nombre; ?> </h2>
                    </div>
                        <div class = "pokemon-tipos">
                            <p class = "<?php echo $tipo1; ?> tipo"> <?php echo $tipo1; ?> </p>
                            <p class = "<?php echo $tipo2; ?> tipo"> <?php echo $tipo2; ?> </p>
                        </div>  
                        <div class = "pokemon-stats">
                            <p class = "stat"> <?php echo $altura; ?> M </p>
                            <p class = "stat"> <?php echo $peso; ?> Kg </p>
                        </main>
                        </div>
                    </div>
                    
                </div>
                <p class = "pokemon-info"> <?php echo $desc; ?> </p>

            </div>
        </div>
    </div>
        <?php
	    }  
	}
?>