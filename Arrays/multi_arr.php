<?php
// Простой многомерный массив:
$arr[0][0]="Мерседес";
$arr[0][1]="Фольксваген";
$arr[1][0]="Феррари";
$arr[1][1]="Ламборгини";
$arr[1][2]="Форд";
$arr[2][0]="Мазератти";
$arr[2][1]="Бугатти вейрон";
$arr[2][2]="Альфа ромео";

//Выводим элементы массива:
echo "<h3>".$arr[0][0].":</h3>";
for ($q=0; $q<=2; $q++) {
 echo $arr[2][$q]."<br>";
}
echo "<h3>".$arr[0][1].":</h3>";
for ($w=0; $w<=2; $w++) {
 echo $arr[1][$w]."<br>";
}
?>
