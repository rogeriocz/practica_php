<?php 
include("connec.php");

error_reporting(0);

$query = "SELECT * FROM estudiante";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

echo $result['id'] . " " . $result['name'] . " " . $result['class'] . '<br />';


/*echo $total . '<br />';

if ($total != 0) {
	echo "La tabla tiene datos" . '<br />';
}else{
	echo "La tabla no tiene estudiantes";
}*/



 ?>