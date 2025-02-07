<!Doctype>
<html>
<head>
<meata http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Activity 2 - Expansion Project </title>
</head>
<body>
<center><h1 style="color:blue"><b>Public Library Expansion Project</b></h1></center>
<br>
<center><h2 style="color:red"><b>Cost Estimates</b></h2></center>
<?php
$name = "Lumber";
$Lumber_cost = 150000;
$lumber=number_format($Lumber_cost,2);
$lumber= "$".$lumber;

$increase_10 = $Lumber_cost + $Lumber_cost * 0.10;
$increase_10=number_format($increase_10,2);
$increase_10= "$".$increase_10;

$increase_15 = $Lumber_cost + $Lumber_cost * 0.15;
$increase_15=number_format($increase_15,2);
$increase_15= "$".$increase_15;

$increase_20 = $Lumber_cost + $Lumber_cost * 0.20;
$increase_20=number_format($increase_20,2);
$increase_20= "$".$increase_20;


$name_2 = "Concrete";
$concete_cost = 78000;
$conrete=number_format($concrete_cost,2);
$concrete= "$".$concrete;

$increase2_10 = $concrete_cost + $concrete_cost * 0.10;
$increase2_10=number_format($increase2_10,2);
$increase2_10= "$".$increase2_10;

$increase2_15 = $concrete_cost + $concrete_cost * 0.15;
$increase2_15=number_format($increase2_15,2);
$increase2_15= "$".$increase2_15;

$increase2_20 = $concrete_cost + $concrete_cost * 0.20;
$increase2_20=number_format($increase2_20,2);
$increase2_20= "$".$increase2_20;

echo "<table width='100%' border='5' align='center' cellpadding='10'>"; 
echo "<tr>";
echo "<th>Expenditures</th>";
echo "<th>Estimated Cost</th>";
echo "<th>10% Increase</th>";
echo "<th>15% Increase</th>";
echo "<th>20% Increase</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$name</td>";
echo "<td>$lumber</td>";
echo "<td>$increase_10</td>";
echo "<td>$increase_15</td>";
echo "<td>$increase_20</td>";

echo "<tr>";
echo "<td>$name_2</td>";
echo "<td>$concrete_cost</td>";
echo "<td>$increase2_10</td>";
echo "<td>$increase2_15</td>";
echo "<td>$increase2_20</td>";

echo "</table>";

?>

</body>
</html>