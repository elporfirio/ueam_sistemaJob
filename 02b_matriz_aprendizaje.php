<?
session_start();

if (empty($_SESSION["cantidad_rasgos"]))
	{
	//cambiamos la cadena a entero
	settype($_POST['no_rasgos'],"integer");
	settype($_POST['no_objetos'],"integer");

	//metemos el valor en una session para futuros usos
	$_SESSION["cantidad_rasgos"] = $_POST['no_rasgos'];
	$_SESSION["cantidad_objetos"] = $_POST['no_objetos'];
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
  	<? 
	var_dump ($_SESSION["cantidad_objetos"]);
	for($x = 1; $x <= $_SESSION["cantidad_objetos"]; $x++)
	{
    echo "<tr>";
    echo "<th scope=\"row\">Clase</th>";
	  for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
		{		
		echo "<th scope=\"row\"> Rasgo X$i </th>\n";
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><label for="textfield"></label>
      <input type="text" name="nombre_clase" /></th>
      <?
		for($i = 1; $i <= $_SESSION["cantidad_rasgos"]; $i++)
			{		
			echo "<td><input type=\"text\" name=\"valor_rasgo_$i\" /></td>";
			}
	  ?>
    </tr>
    <? } ?>
  </table>
  <input name="" type="submit" value="Agregar Dato" />
</form>
</body>
</html>