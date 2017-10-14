<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
	header("Location:index2.php");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<link href="bootstrap/css/bootstrap.min.as.css" rel="stylesheet" media="screen" >
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body > 

<div class="container"> 
<nav class="navbar navbar-inverse" > 
<div class="container-fluid"style="background-color:
#FC3"> 
<div class="navbar-header" > 
<a class="navbar-brand"style="background-color:
#FC3" >HRSS </a> 
</div> 
<ul class="nav navbar-nav"> 
<li><a class="navbar-brand" >  BIENVENIDO</li>
	
<li><a class="navbar-brand" > <span class="glyphicon glyphicon-user"></span> APRENDIZ </a></li>

<li><a class="navbar-brand" > </span> <?php echo $_SESSION['user'];?> </a></li>

</UL> 
<ul class="nav navbar-nav navbar-right"> 

<li><a href="desconectar.php"><span class="glyphicon glyphicon-log-in"></span>SALIR</li> 
</ul> 
</div> 
</nav> 
</div> 
</strong></em></a></li></ul></a>
</body> 
</html>