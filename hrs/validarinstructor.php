
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM instructores WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			echo "<script>location.href='index.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM instructores WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){

		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['nombre']." ".$f2['apellido'] ;

			$_SESSION['rol']=$f['rol'];

			header("Location: instructor.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='logueoinstructor.php'</script>";	

	}

?>