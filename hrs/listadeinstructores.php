<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>usuarios creados </title>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto HRSS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>
<body>
<?php
	include("cabeceraasignador.php");
	?>
 
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
        
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<center><h2> Administración de usuarios registrados</h2>	
		<div class="well well-small ">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM instructores");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>numero de identificacion</td>";
						echo "<td>nombre</td>";
						echo "<td>apellido</td>";
						echo "<td>email</td>";
						echo "<td>telefono</td>";
						echo "<td>celular</td>";
						echo "<td>Password</td>";
						echo "<td>Password del instructor</td>";
						echo "<td>Rol</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
              		
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
						
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
						echo "<td>$arreglo[7]</td>";
						echo "<td>$arreglo[8]</td>";
						echo "<td>$arreglo[9]</td>";
						
						
							
				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
				if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM instructores WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		</center>
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		
		
		</div>
 <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
    
    
    
    
    
</body>
</html>