<?php

$valores = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "outros" => 19849.53
];

echo "Total mensal: R$ " . $total = array_sum($valores);
echo "<p>";
echo "SP:".floor($valores['SP']/$total*100)."%"."<br/>";
echo "RJ:".floor($valores['RJ']/$total*100)."%"."<br/>";
echo "MG:".floor($valores['MG']/$total*100)."%"."<br/>";
echo "ES:".floor($valores['ES']/$total*100)."%"."<br/>";
echo "Outros:".floor($valores['outros']/$total*100)."%";
echo "</p>";

?>
