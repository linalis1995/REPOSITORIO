<?php

	$numerodeidentificacion=$_POST['numerodeidentificacion'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$mail=$_POST['nick'];
	$telefono=$_POST['telefono'];
	$celular=$_POST['celular'];
	$password= $_POST['password'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM instructores WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($password==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
mysqli_query($mysqli,"INSERT INTO instructores VALUES('','$numerodeidentificacion','$nombre','$apellido','$mail','$telefono','$celular', '$password','','2')");
				//echo 'Se ha registrado con exito
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>