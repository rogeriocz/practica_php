<?php 

include("connec.php");
error_reporting(0);
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insertar datos</title>
 </head>
 <body>
 <h1>Bienvenido</h1>

 <form action="" method="GET">
 	ID # <input type="text" name="id" value="" /><br><br>
 	Name <input type="text" name="studenname" value="" /><br><br>
 	Class <input type="text" name="class" value="" /><br><br>
 	<input type="submit" name="submit" value="Guardar">
 	
 </form>
<?php 

if ($_GET['submit']) {

	$id = $_GET['id'];
	$name = $_GET['studenname'];
	$cl = $_GET['class'];

	if ($id!="" && $name!="" && $cl!="") {
		
		$query = "INSERT INTO estudiante VALUES ('$i','$name','$cl')";
		$datos = mysqli_query($conn, $query);

			if ($datos) {
				echo "Datos ingresados en la base de datos";
			}

			}else{
				echo "Todos los campos deben ser llenados";
			}
}
// echo $id;
// echo $name;
// echo $cl;



 ?>



 </body>
 </html>