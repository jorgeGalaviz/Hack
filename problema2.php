<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Problema 2</title>
<style>
.tabla,
.tabla thead,
.tabla td{
	border:solid 1px #000;
}
.tabla td{
	padding:10px 20px;
}
</style>
</head>

<body>
<?php
	include("cabezera.php");
	
	$direccion = "localhost";
	$usuario = "root";
	$password = "";
	$conexion = mysql_connect($direccion,$usuario,$password)
	or die('No se pudo conectar con el servidor');
	
	$baseDatos="hack";
	mysql_select_db($baseDatos)
	or die ("No se pudo conectar con la base de datos");
	
	$sql = "SELECT * FROM `PadreHijo`";
	$resultaods = mysql_query($sql, $conexion)
		or die("Fallo en la consulta");
	
	$tablaPadre = '<table class="tabla" cellpadding="0" cellspacing="0">';
	$tablaPadre .= '<thead>
			<td>Padre</td>
			<td>Hijo</td></thead>';
	
	$tablaAbuelo = '<table class="tabla" cellpadding="0" cellspacing="0">';
	$tablaAbuelo .= '<thead>
			<td>Abuelo</td>
			<td>Nieto</td></thead>';
			
	while($row = mysql_fetch_array($resultaods)){
		$tablaPadre .= '<tr>
				<td>'.$row["padre"].'</td>
				<td>'.$row["hijo"].'</td>
				</tr>';
				
				
		$idPadre = $row['ID_hijo'];
		$sql = "SELECT * FROM `PadreHijo` WHERE `ID` = $idPadre;";
		
		$abuelos = mysql_query($sql, $conexion)
			or die("Fallo en la consulta");
		while($rowA = mysql_fetch_array($abuelos)){
			$tablaAbuelo .= '<tr>
				<td>'.$row["padre"].'</td>
				<td>'.$rowA["hijo"].'</td>
				</tr>';
		}
	}
	
	$tablaPadre .= '</table>';
	$tablaAbuelo .= '</table>';
?>
<p>Escribe una consulta a una base de datos que regrese una tabla con la relación Abuelo Nieto de una tabla de Padre Hijo.!</p>

<?php
 echo $tablaPadre."</br>";
 echo $tablaAbuelo;
?>
</body>
</html>