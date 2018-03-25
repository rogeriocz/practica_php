<?php 
include("connec.php");

error_reporting(0);

$query = "SELECT * FROM estudiante";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


if ($total != 0)
{
	?>

<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Universidad</th>
	</tr>


	<?php

	while ($result = mysqli_fetch_assoc($data)) 
	{

		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['class']."</td>
				
			</tr>";

	 }

}else{
	echo "La tabla no tiene estudiantes";
}



 ?>
 </table>