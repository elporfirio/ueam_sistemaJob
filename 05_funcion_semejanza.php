<?
//iniciamos sessiones
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>Paso 5</title>
</head>

<body>
<div id="container">
<form action="06_resultado.php" method="post" class="niceform" target="_blank">
<fieldset>
<legend>05. Selecciona la Funcion y Evalua</legend>
<table width="600" border="0">
  <tr>
    <th scope="col">Objeto Base</th>
<?
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<th scope=\"col\">Rasgo: ".$_SESSION["rasgos"]["$i"]["nombre"]."</th>";
		}
echo "</tr>";
echo "<th scope=\"row\">Valor</th>";
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<td>";
		echo "<select size=\"1\" name=\"objeto_base_$i\">";
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
			echo "<option value=\"".$_SESSION['rasgos']["$i"]["valores_admisibles"]["rasgo_$j"]."\">".$_SESSION['rasgos']["$i"]["valores_admisibles"]["rasgo_$j"]."</option>";
			}
		echo "</select>";
		echo "</td>";
		}
?>
</tr>
</table>
<br />
<hr />
<br />
<table width="600" border="0">
  <tr>
    <th scope="col">Objeto a Comparar</th>
<?
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<th scope=\"col\">Rasgo: ".$_SESSION["rasgos"]["$i"]["nombre"]."</th>";
		}
echo "</tr>";
echo "<th scope=\"row\">Valor</th>";
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<td>";
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
			echo "<dd><input size=\"15\" type=\"text\" name=\"objeto_evaluar$i$j\"></dd>";
			$j = 9999;
			}
		echo "</td>";
		}
?>
</tr>
</table>
</fieldset>
<fieldset>
<dl>
<dd>
  <input type="radio" name="semejanza" id="colorBlue" value="Exacto" /><label for="colorBlue" class="opt">Exacto</label>
  <input type="radio" name="semejanza" id="colorBlue" value="Porcentaje" /><label for="colorBlue" class="opt">Porcentaje</label>
</dd>
<dd><input size="4" name="cant_porcentaje" type="text" /></dd>
</dl>
</fieldset>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Evaluar !!" />
</fieldset>
</form>
</div>
</body>
</html>