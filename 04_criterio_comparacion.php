<?
//iniciamos sessiones
session_start();


for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
	{
		$arreglo = array();
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
		  	//lenamos nombre, tipo y cantidad de variables admisibles
			if($_SESSION["rasgos"]["$i"]["tipo"] == "Real")
				{
					
					if(($_POST["cerrado_a$i$j"] == "cerrado") && ($_POST["cerrado_b$i$j"] == "cerrado"))
						$valor_real = "[".$_POST["valoradmisible_a$i$j"]."-".$_POST["valoradmisible_b$i$j"]."]";
					if(($_POST["cerrado_a$i$j"] == "cerrado") && ($_POST["cerrado_b$i$j"] == NULL))
						$valor_real = "[".$_POST["valoradmisible_a$i$j"]."-".$_POST["valoradmisible_b$i$j"].")";
					if(($_POST["cerrado_a$i$j"] == NULL) && ($_POST["cerrado_b$i$j"] == "cerrado"))
						$valor_real = "[".$_POST["valoradmisible_a$i$j"]."-".$_POST["valoradmisible_b$i$j"]."]";
					//$valor_real = "".$_POST["valoradmisible_a$i$j"]."-".$_POST["valoradmisible_b$i$j"]."";
					$arreglo["rasgo_$j"] = $valor_real;
				}
			else
				{
				$arreglo["rasgo_$j"] = $_POST["valoradmisible$i$j"];
				}
		  	//$_SESSION['rasgos']["$i"]["valores_admisibles"] = array("rasgo_$j" => "".$_POST["valoradmisible$i$j"]."");
    		}
		$_SESSION['rasgos']["$i"]["valores_admisibles"] = $arreglo;
	}
		
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
	{
	//var_dump ($_SESSION['rasgos']["$i"]["valores_admisibles"]);	
	}


	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>paso 4</title>
</head>

<body>
<div id="container">
<form action="05_funcion_semejanza.php" method="post" class="niceform">
<fieldset>
<legend>04. Define los criterios de Comparación</legend>
<table width="600" border="0" cellspacing="1">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">Nombre del Rasgo</th>
    <th scope="col">Tipo de dato</th>
    <th scope="col">Valores Admisibles</th>
    <th scope="col">Conjunto de Pertenencia</th>
    <th scope="col">Criterio Comparacion</th>
  </tr>
  
<?

	
if (isset($_SESSION["cantidad_rasgos"]))
	{ 
	for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "<tr>";
    	echo "<th scope=\"row\"> $i </th>\n";
    	echo "<td align=\"center\">".$_SESSION["rasgos"]["$i"]["nombre"]."</td>";
		echo "<td align=\"center\">".$_SESSION["rasgos"]["$i"]["tipo"]."</td>";
		echo "<td align=\"center\">";
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
		echo "".$_SESSION['rasgos']["$i"]["valores_admisibles"]["rasgo_$j"]."<br>";
			}
		echo "</td>";
		//echo "<td>"$_SESSION["rasgos"].$_POST["criterio_comparacion$i"]."</td>";
		echo "<td>";
		echo "</td>";
		echo "<td>";
		
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
				if($_SESSION['rasgos']["$i"]["tipo"] == "Booleano")
					{
					echo "<select size=\"1\" name=\"criterio$i$j\" id=\"select\">";
  					echo "<option value=\"Similaridad\">Similaridad</option>";
  					echo "<option value=\"Disimilaridad\">Disimilaridad</option>";
  					echo "<option value=\"Similaridad por conjunto\">Similaridad por Conjunto</option>";
					echo "</select>";
					$j = 9999;
					}
				if($_SESSION['rasgos']["$i"]["tipo"] == "Kvalente")
					{
					echo "<select size=\"1\" name=\"criterio$i$j\" id=\"select\">";
  					echo "<option value=\"Similaridad\">Similaridad</option>";
  					echo "<option value=\"Similaridad por conjunto\">Similaridad por Conjunto</option>";
					echo "<option value=\"Similaridad por conjunto\">Similaridad por Umbral</option>";
					echo "</select>";
					$j = 9999;
					}
				if($_SESSION['rasgos']["$i"]["tipo"] == "Real")
					{
					echo "<select size=\"1\" name=\"criterio$i$j\" id=\"select\">";
  					echo "<option value=\"Similaridad\">Similaridad por Intervalos</option>";
  					echo "<option value=\"Disimilaridad\">Similaridad (Max - Min)</option>";
					echo "</select>";
					$j = 9999;
					}
			}
		echo "</td>";
  		echo "</tr>";
		}
	}
	
?>
</table>
</fieldset>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Siguiente >>" />
</fieldset>
</form>
</body>
</html>