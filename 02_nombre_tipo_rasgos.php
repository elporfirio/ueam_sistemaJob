<?
session_start();

//cambiamos la cadena a entero
settype($_POST['no_rasgos'],"integer");

//metemos el valor en una session para futuros usos
$_SESSION["cantidad_rasgos"] = $_POST['no_rasgos'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>paso 2</title>
</head>

<body>
<div id="container">
<form action="03_datos_admisibles.php" method="post" class="niceform">
<fieldset>
	<legend>02. Define los Rasgos</legend>

<table width="600" border="0" cellspacing="1">
  <tr>
  	<th scope="col"></th>
    <th scope="col">Nombre del Rasgo</th>
    <th scope="col">Cantidad de Rasgos</th>
    <th scope="col">Tipo de Dato</th>
  </tr>
<?
if (isset($_SESSION["cantidad_rasgos"]))
	{ 
	for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{		
  			echo "<tr>\n";
  			echo "<th scope=\"row\"> $i </th>\n";
    		echo "<td>\n";
    		echo "<input type=\"text\" name=\"nombre_rasgo_$i\"/>\n";
			echo "</td>\n";
    		echo "<td>\n";
    		echo "<input type=\"text\" name=\"cantidad_dato_rasgo_$i\"/>\n";
			echo "</td>\n";
    		echo "<td>\n";
      		echo "<select size=\"1\" name=\"tipo_dato_rasgo_$i\">\n";
        	echo "<option value=\"Booleano\">Booleano</option>\n";
        	echo "<option value=\"Kvalente\">K-valente</option>\n";
        	echo "<option value=\"Real\">Real</option>\n";
    		echo "</select></td></tr>\n";
		}
	}

?>
</table>
</fieldset>
<? //var_dump	($_SESSION["cantidad_rasgos"]); ?>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Siguiente >>" />
   </fieldset></form>
</div>
</body>
</html>