<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FORMULARIO DE REGISTRO</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>



<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 14pt"> <b>Registro</b></legend>
    <br />
    <div class="container">
    <div class="row">
      <div class="col-xs-3">
      <label style="font-size: 14pt"><b>Ingresa numero de idenficacion</b></label>
      <input type="text" name="numerodeidentificacion" class="form-control" required placeholder="Ingresa tu numero de identificacion" />
        <div class="col-xs-3">

      <label style="font-size: 14pt; color: black;"><b>Ingresa tus nombres </b></label>
      <input type="text" name="nombre" class="form-control"  required placeholder="Ingresa nombres"/>
    
      <label style="font-size: 14pt; color: ;"><b>Ingresa tu apellidos </b></label>
      <input type="text" name="apellido" class="form-control"  required placeholder="Ingresa apellido"/>
    
          <label style="font-size: 14pt; color: black;"><b>Ingresa tu email </b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    
      <label style="font-size: 14pt"><b> ingresa tu telefono fijo</b></label>
      <input type="text" name="telefono" class="form-control" required placeholder="repite telefono" />
    
      <label style="font-size: 14pt"><b>ingresa tu celular </b></label>
      <input type="text" name="celular" class="form-control" required placeholder="repite celular" />
     
    
   
       
    
    
      <label style="font-size: 14pt; color: black;"><b>Ingresa tu Password</b></label>
      <input type="password" name="password" class="form-control"  placeholder="Ingresa contrasena" />
        <label style="font-size: 14pt"><b>Repite tu Password</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contrasena" />
    
    
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
<input type="button" onclick=" location.href='index.php' " value="volver al inicio" name="boton" />  
  </fieldset>
  
  
</form>

</fieldset>





<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
	

<!--Fin formulario registro -->



</body>
</html>
