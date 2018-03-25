<?php 

include("connec.php");

$query = "INSERT into estudiante VALUES ('angelica','UGM-MINA')";
$datos = mysqli_query($conn, $query);

if ($datos) {
	echo "Datos ingresados en la base de datos";
}else{
	echo "error";
}

 ?>
