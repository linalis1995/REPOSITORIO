<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
 <form action="" method="POST" >

  <label for="crearprograma.php"> NOMBRE DEL PROGRAMA  </label>	
		<input type="text	" placeholder="" name="nombre" id="" class="active" />
        <br />
          <label for="">    nivel academico</label>
        <select name="nivel" >
        <option  value="tecnico"> tecnico </option>
       <option  value="tecnolo"> tecnologo</option>	
        <option  value="curso"> curso  </option>
         <option  value="especializacion"> especializacion tecnologicas </option>	
	</select> 
    <br />
        <input type="submit" name="guardar" value="guardar" />
          </article>
          
             <?php 
include_once("connect_db.php");

  if(@$_POST['guardar']){
	  
mysqli_query (" insert into programa (id,nombre,nivelacademico) values('','$_POST[nombre]' , '$_POST[nivel]' )"); 
	  }
	  
    ?>
</body>
</html>