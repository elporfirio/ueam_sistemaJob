<?
session_start();


	//borramos las variables de session
	unset($_SESSION["cantidad_rasgos"]);
	
	unset($_SESSION["objeto"]);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>Inicio</title>
</head>

<body>
<div id="container">
<form id="form1" name="form1" method="post" action="02b_matriz_aprendizaje.php" class="niceform">
<fieldset>
	<legend>01. Ingresa el número de Objetos y Rasgos</legend>
  	<dl>
    <dt><label for="no_rasgos">Cantidad de Rasgos</label></dt>
    <dd><input type="text" name="no_rasgos" id="no_rasgos" /></dd>
    <dt><label for="no_rasgos">Cantidad de Objetos</label></dt>
    <dd><input type="text" name="no_objetos" id="no_objetos" /></dd>
    </dl>
  </fieldset>
  <fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Siguiente >>" />
   </fieldset>
</form>
</div>
<p>Sistema para algoritmo BT v.0.1<br />
Desarrollado by <strong>Porfirio Chávez y Antonio Medina</strong></p> 
</body>
</html>