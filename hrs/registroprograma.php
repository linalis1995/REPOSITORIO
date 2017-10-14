<?php
$parametro=$_post['select'];
	
	include_once("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM programa WHERE nombre='$parametro'");
	$check_mail=mysqli_num_rows($checkemail);
		if($parametro==$parametro){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el programa");</script> ';
			}else{				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
mysqli_query($mysqli,"INSERT INTO programa VALUES('','parametro')");
				//echo 'Se ha registrado con exito
				echo ' <script language="javascript">alert("programa registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>