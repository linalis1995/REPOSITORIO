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
  <div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control">
    </div>
  </div>
  </article>
  </section>
  <aside>
           <?php
	include("menuadministrador.php");
	?>
  </aside>
 
   
</body>
</html>