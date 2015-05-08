<?php
//iniciamos sessiones
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<title>Documento sin título</title>
</head>

<body>
<div id="container">
<form action="" method="post" class="niceform">
<fieldset>
<legend>05. Resultado Evaluacion</legend>
<?php
var_dump($_POST["semejanza"]);
echo "Evaluando... <br>";

if($_POST["semejanza"] == "Exacto")
	{
		echo "por exactitud<br>";
		$exactitud = $_SESSION["cantidad_rasgos"];
		$revision = 0;
		for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
				if($_POST["objeto_base_$i"] == $_POST["objeto_evaluar$i$j"])
					$revision = $revision + 1;
			}
		}
		if($exactitud == $revision)
			echo "Los objetos son Iguales";
		else
			echo "Los objetos son diferentes";
	}
	
elseif($_POST["semejanza"] == "Porcentaje")
	{
		echo "por porcentaje<br>";
		settype($_POST['cant_porcentaje'],"integer");
		$exactitud = $_SESSION["cantidad_rasgos"];
		$porcentaje = ($exactitud * $_POST['cant_porcentaje']) / 100;
		$revision = 0;
		for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
				if($_POST["objeto_base_$i"] == $_POST["objeto_evaluar$i$j"])
					$revision = $revision + 1;
			}
		}
		echo "porcentaje: $porcentaje exac: $revision";
		if($revision >= $porcentaje)
			echo "Los objetos son Iguales";
		else
			echo "Los objetos son diferentes";
	}
/*
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		echo "Objeto Base: ".$_POST["objeto_base_$i"]."";
		}
		
echo "<br>";
for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{	
		for($j = 1; $j <= $_SESSION['rasgos']["$i"]["cantidad"]; $j++)
			{
				if (isset($_POST["objeto_evaluar$i$j"]))
				echo "Objeto a Evaluar:".$_POST["objeto_evaluar$i$j"]."";
			}
		}
*/



?>
</fieldset>
</form>
</div>
</body>
</html>