<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<link href="bootstrap/css/bootstrap.min.as.css" rel="stylesheet" media="screen" >
<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/estructura.css" />
</head>

<body>
<form action="#" method="post" >
         
		<center>formulario de crear horario </center>	
        <br />		
        
         <label for="ficha"> ficha </label>	
		<input type="text	" placeholder="numero de ficha " name="ficha" id="" class="active" /> 
           <label for="intructor"> instructor </label>	
		<input type="text	" placeholder="numero de cedula de instructor" name="instructor	" id="" class="active" />
       
    <br />
     jornada	
        <select name="" id="" >
        <option  value="mañana"> mañana </option>
       <option  value="tarde"> tarde </option>	
        <option  value="noche"> noche </option>
         <option  value="findesemana"> fin de semana </option>	
	</select>		
	sede
    <select name="" id="" >
        <option  value="colombia"> colombia </option>
       <option  value="restrepo"> restrepo </option>
	</select>
    <input type="text" placeholder="direccion" name="direccion"/> 
      salon   
       <select name="" id="" >
        <option  value="201"> 201 </option>
       <option  value="202"> 202 </option>
       </select> 
        <br />
        <input type="submit"  value="guardar" />			
</body>	
</body>
</html>
