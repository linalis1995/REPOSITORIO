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
         
		<center>formulario de crear horario </center>	
        <br />		
        
         <label for="ficha"> ficha </label>	
         
		<input type="text	" placeholder="numero de ficha " name="ficha" id="" class="active" />
         
		<input type="text	" placeholder="programa" name="ficha" id="" class="active" />
       <br />
        jornada	
        <input type="text	" placeholder="aqui va la jornada" name="ficha" id="" class="active" />
        trimestre	
        <input type="text	" placeholder="aqui va la jornada" name="ficha" id="" class="active" />
        <br /> 
           <label for="intructor"> numero de cedula de instructor </label>	
		<input type="text	" placeholder="numero de cedula de instructor" name="instructor	" id="" class="active" />
               
    <br />	
    <label for="intructor"> instructor  </label>	
		<input type="text	" placeholder="nombre y apellido del instructor" name="instructor	" id="" class="active" />
     <br />
    horario de inicio de clase	
        <select name="" id="" >
        <option  value=""> 07:00 am  </option>
       <option  value=""> 08:00 am </option>	
        <option  value=""> 09:00 am  </option>
         <option  value=""> 10:00 am </option>	
	</select> 
    horario en que termina la clase	
        <select name="" id="" >
        <option  value=""> 12:00 am  </option>
       <option  value=""> 01:00 pm </option>	
        <option  value=""> 02:00 pm  </option>
         <option  value=""> 03:00 pm </option>	
	</select>
        <br />
     
    		
	sede
    <?php include_once('pruebacombo.php')  ?>


    <br />
    direccion
    <input type="text" placeholder="direccion" name="direccion" /> 
    <br />
      salon   
       <select name="" id="" >
        <option  value="201"> 201 </option>
       <option  value="202"> 202 </option>
       </select>
      
       estado del salon   
       
    <input type="text" placeholder="estado" name="direccion" />   
        
        <br /><br />
        <center><input type="submit"  value="guardar" /></center>
        
        
          </article>
  </section>
  <aside>
           <?php
	include("menuadministrador.php");
	?>
  </aside>
 
   
</body>
</html>