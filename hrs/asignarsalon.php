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

  sede  
       <select name="" id="" >
        <option  value="">  colombia </option>
        <option  value="">  restrepo </option>
  </select>
       
      
        <br />
        <label for="salon"> salon </label>	
		<input type="text	" placeholder="numero de salon" name="salon" id="" class="active" />
       
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