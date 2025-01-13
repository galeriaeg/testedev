<?php

$notas = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "outros" => 19849.53
];

$total = array_sum($notas);

echo "SP:".floor($notas['SP']/$total*100)."%"."<br/>";
echo "RJ:".floor($notas['RJ']/$total*100)."%"."<br/>";
echo "MG:".floor($notas['MG']/$total*100)."%"."<br/>";
echo "ES:".floor($notas['ES']/$total*100)."%"."<br/>";
echo "Outros:".floor($notas['outros']/$total*100)."%";

?>
