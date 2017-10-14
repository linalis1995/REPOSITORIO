<!DOCTYPE html>
<html>
<head>
<title>formulario registro</title>
</head>
<style>
 #cabecera{
 width:500px;
 background-color:#101010;
 color:#ffffff;
 padding:13px;
 border-radius: 10px;
 border:3px; border:solid #0078D7;
 margin:50px auto;
 box-shadow: #0078D7 6px 6px 6px;
  }
body{
background-image:url(images/3.jpg);
}
spam{
color:#ffffff;
}
#formulario{
width:700px;
height:500px;
border:1px solid #0078D7;
position:absolute;
top:50%;
left:50%;
padding:80px 40px;
margin:50px auto;
transform: translate(-50%,-50%);
box-sizing: border-box;
background:rgba(0,0,0,.6);
box-shadow:#0078D7 2px 2px 2px;
}
</style>
<body>
<center>
<header id="cabecera">ACTUALIZAR DATOS</header>
 <img src="images/icono.PNG" width="50" height="60">
<form id="formulario" action="registro.php">
<spam>
<br>
 N0.Id: <input type="text" name="numeroid"  class="nuevo"><br><br>
 Nombre: <input type="text" name="nombre"  class="nuevo" ><br><br>
 Apellido: <input type="text" name="apellido"  class="nuevo" ><br><br>
 Email: <input type="text" name="Email"  class="nuevo" ><br><br>
 Contraseña: <input type="text" name="Contraseña"  class="nuevo" ><br><br>
  <input type="submit" name="guardar datos" class="Button1" a href="index.php" value="guardar"><br><br>
 <BR />
<center><a href="index.php"> VOLVER AL INICIO 
</div></CENTER>
 </spam>
 
</form>
</center>
</body>
</html>
