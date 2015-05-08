<?php
//iniciamos sessiones
session_start();

//hacemos nuestro arreglo de datos
$_SESSION['rasgos'] = array();

for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
	{
		settype($_POST["cantidad_dato_rasgo_$i"],"integer");
		$_SESSION['rasgos']["$i"] = array("nombre" => $_POST["nombre_rasgo_$i"], "tipo" => $_POST["tipo_dato_rasgo_$i"], "cantidad" =>  $_POST["cantidad_dato_rasgo_$i"]);
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>Paso 3</title>
</head>

<body>
<div id="container">
<form action="04_criterio_comparacion.php" method="post" class="niceform">
<fieldset>
<legend>03. Define los Valores Admisibles</legend>
<table width="600" border="0" cellspacing="1">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">Nombre del Rasgo</th>
    <th scope="col">Tipo de dato</th>
    <th scope="col">Valores Admisibles</th>
    <th scope="col">Conjunto de Pertenencia</th>
  </tr>
<?php

	
if (isset($_SESSION["cantidad_rasgos"]))
	{ 
	for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<tr>";
    	echo "<th scope=\"row\"> $i </th>\n";
    	echo "<td align=\"center\">".$_POST["nombre_rasgo_$i"]."</td>";
		echo "<td align=\"center\">".$_POST["tipo_dato_rasgo_$i"]."</td>";
    	echo "<td align=\"center\">";
		for($j = 1; $j <= $_POST["cantidad_dato_rasgo_$i"]; $j++)
			{
				if($_POST["tipo_dato_rasgo_$i"] == "Booleano")
					echo "<dd><input type=\"text\" name=\"valoradmisible$i$j\"/></dd>\n";
				if($_POST["tipo_dato_rasgo_$i"] == "Kvalente")
					echo "<dd><input type=\"text\" name=\"valoradmisible$i$j\"/><dd>\n";
				if($_POST["tipo_dato_rasgo_$i"] == "Real")
					{
					echo "<dl><dd><input type=\"checkbox\" name=\"cerrado_a$i$j\" value=\"cerrado\"/></dd></dl>\n";
					echo "<dd><input type=\"text\" name=\"valoradmisible_a$i$j\" size=\"5\"/></dd><dd><input type=\"text\" name=\"valoradmisible_b$i$j\" size=\"5\"/></dd>\n";
					echo "<dd><input type=\"checkbox\" name=\"cerrado_b$i$j\" value=\"cerrado\"/></dd></dl>\n<br>";
					}
			}
		echo "</td><td>";
		for($j = 1; $j <= $_POST["cantidad_dato_rasgo_$i"]; $j++)
			{
			echo "<dd><input type=\"text\" name=\"conjunto_$i$j\"/></dd>\n";
			}
  		echo "</td></tr>";
		}
	}
?>
</table>
</fieldset>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Siguiente >>" />
</fieldset>
</form>
</div>
</body>
</html>