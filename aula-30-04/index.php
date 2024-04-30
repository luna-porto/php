<?php

echo "exemplo - 01";
echo "<br>";

$var = array (2,5,7,9,11);
echo $var[0];
echo "<br>";
echo $var[1];
echo "<br>";
echo $var[2];
echo "<br>";
echo $var[3];
echo "<br>";
echo $var[4];
echo "<br>";
echo "<br>";

echo "exemplo - 02";
echo "<br>";

$var1 = array ("Antonio","João","Zeca");
echo $var1[0];
echo "<br>";
echo $var1[1];
echo "<br>";
echo $var1[2]; 
echo "<br>"; 
echo "<br>";           

echo "exemplo - 03";
echo "<br>";

$var2 = array ("Windows", 10 , 2024 ,"V1.2021");
echo $var[0];
echo "<br>";
echo $var2[1];
echo "<br>";
echo $var2[2]; 
echo "<br>";
echo $var2[3]; 
echo "<br>";
echo "<br>";

echo "exemplo - 04";
echo "<br>";

$var3 = array ("Italo"=>30, "Hubert"=>20, "Luna"=>18);
echo "<br>";
echo " A idade de Italo é " .$var3['Italo'];
echo "<br>";
echo " A idade de Hubert é " .$var3['Hubert'];
echo "<br>";
echo " A idade de Luna é " .$var3['Luna'];
echo "<br>";
echo "<br>";

echo "exemplo - 05";
echo "<br>";

$num = array (2 => 7, 3 => 8, 9 => 5);
$num [1] = 4;
$num [8] = 40;
$num [3] = 9;
echo "<br>";
echo $num[2];
echo "<br>";
echo $num[3];
echo "<br>";
echo $num[9];
echo "<br>";
echo $num[1];
echo "<br>";
echo $num[8];
echo "<br>";
echo $num[3];
echo "<br>";

echo "exemplo funçao count"
$num = array("x", 3, 1, 4, 5, 6, 7, "hubert");
$qnt = count($num);
?>