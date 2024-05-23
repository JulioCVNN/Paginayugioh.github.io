<?php

$inc = include("conexion.php");

if($inc){
$consulta = "SELECT * FROM datos";
$resultado = mysqli_query($conex,$consulta);
if ($resultado) {
    while($row = $resultado->fetch_array()){
        $Nombre = $row['Nombre'];
        $Atributo = $row['Atributo'];
        $Nivel = $row['Nivel'];
        $AD = $row['Ataque/Defensa'];
        $Tipo = $row['Tipo'];
        $Detalles = $row['Detalles'];
        $Imagen = $row['Imagen'];


        ?>

    
       <div class="box">
        <h3 class="Nombre"><?php echo $Nombre; ?></h3><h3 class="Atributo"><img src ="Images/<?php echo $Atributo; ?>" width="10%" alt=""></h3>
        <h3 class="Nivel"><img src ="Images/<?php echo $Nivel; ?>" alt=""></h3> 
         <img src="images/<?php echo $Imagen; ?>" width="100%" alt="images">
            <div class="card_body">
               <div class="card_body_content">
                    <h3 class="Tipo"><?php echo $Tipo; ?></h3>
                    <h3 class="AD"><?php echo $AD; ?></h3>
                    <h3 class="Detalle"><?php echo $Detalles; ?></h3>
                </div>
            </div>
            </div>

    

            


        <?php

    }

}

}

?>