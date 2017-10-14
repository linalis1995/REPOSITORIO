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
  <form action="#" method="post" >

  <label for="intructor"> numero de ficha  </label>	
		<input type="text	" placeholder="digite numero" name="ficha" id="" class="active" />
        <br />
      seleccione programa de formacion
        <select name="" id="" >
        <option  value=""> ADSI (ANALISIS Y DESARROLLO DE SISTEMA DE FORMACION  </option>
       <option  value=""> SISTEMAS </option>		
	</select>
        <br />
         seleccione nivel de formacion
        <select name="" id="" >
        <option  value=""> tecnico  </option>
       <option  value=""> tecnologo </option>	
        <option  value=""> curso </option>
	</select>
    <br />
    jornada	
        <select name="" id="" >
        <option  value="mañana"> mañana </option>
       <option  value="tarde"> tarde </option>	
        <option  value="noche"> noche </option>
         <option  value="findesemana"> fin de semana </option>	
	</select>
    <br />
     trimestre	
        <select name="" id="" >
        <option  value="1">uno   </option>
       <option  value="2"> dos </option>	
        <option  value="3"> tres </option>
         <option  value="4"> cuatro </option>	
	</select>
    <br />
        <input type="submit"  value="guardar" />
          </article>
  </section>
  <aside>
           <?php
	include("menuadministrador.php");
	?>
  </aside>
 
   
</body>
</html>