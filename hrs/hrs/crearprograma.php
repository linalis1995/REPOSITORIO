<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hrs</title>




<link href="bootstrap/css/bootstrap.min.as.css" rel="stylesheet" media="screen" >
<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/estructura.css" />


</head>

<body>
<header>
<?php include_once('cabeceraasignador.php')  ?>

  </header>
  
  <section id ="contenido">
  <article>
  <form action="verificar.php" method="post" >

  <label for="nombre"> NOMBRE DEL PROGRAMA  </label>	
		<input type="text	" placeholder="" name="nombre" id="" class="active" />
        <br />
          <label for="">   nivel academico</label>
        <select name="nivel" >
        <option  value="1"> tecnico </option>
       <option  value="2"> tecnologo</option>	
        <option  value="3"> curso  </option>
         <option  value="4"> especializacion tecnologicas </option>	
	</select> 
    <br />
        <input type="submit" name="guardar" value="guardar" />
         <?php if(@$_POST['guardar']){
	 mysqli_query ("insert into programa (nombre,nivelacademico) values('$nombre', '$nivel')"); 
	  }
	  
    ?>

          </article>
          
        
  </section>
  <aside>
           <?php
	include("menuadministrador.php");
	?>
  </aside>
   
           <?php 
require("connect_db.php");
?>

</body>
</html>