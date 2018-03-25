<?php
//PDO



try{
    $conexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');

   $statement = $conexion->prepare('select * from estudiante');
    $statement->execute();

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}


?>