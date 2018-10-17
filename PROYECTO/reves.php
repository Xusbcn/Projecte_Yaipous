<!DOCTYPE html>
<html>
<head>
	<title>Qui es Qui Harry Potter</title>
	<script type="text/javascript" defer src="imagendelreves.js"></script>

</head>
<body>
	<h2>Qui es Qui - Versió Harry Potter</h2>

<?php


$array_lineas = array(); //aray con las lineas del txt
$array_nombres = array(); //aray con los nombres de las fotos

//string fgets (resource $handle [, int $length ])

//codigo para sacar el nombre de las fotos:

$fp = fopen("imatges.txt", "r");
while (!feof($fp)){
    $linea = fgets($fp);
    $linea_split = explode(":", $linea);
    array_push(($array_lineas),$linea_split);
    //echo $linea_split;
    //echo("<br><br><br>");
}

for ($i=0;$i<count($array_lineas);$i++) {
	$nom_imatge = $array_lineas[$i][0];
	array_push(($array_nombres),$nom_imatge);

}

//echo "<pre>";
//print_r($array_nombres);
//echo "</pre>";
fclose($fp);

$x=rand(1,9);
	echo "<img escollida=" . $array_nombres[$x] . " width='150' height='130' src='./img/" . $array_nombres[$x] . "''>";


shuffle($array_nombres); //mezcla el array

echo "<table align='center'>";
echo "<tr>";

for ($i=0;$i<count($array_nombres);$i++) {
	if ($i%4==0) {
		echo "</tr>";
		echo "<br>";
		echo "<tr>";
	}
	echo "<td>";
	echo "<img nom=" . $array_nombres[$i] . " width='150' height='130' src='./img/" . $array_nombres[$i] . "''>";
	echo "</td>";
}
echo "</tr> </table>";






?>

</body>
</html>