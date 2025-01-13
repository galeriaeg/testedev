<?php

$valorDia = [588, 340, 855, 889, 300, 298];
$tam = count($valorDia);
$soma = 0;
$j = 0;
$qtde = 0;

for($i=0;$i<$tam;$i++){
$soma = $soma + $valorDia[$i];
$mediaMensal = floor($mediaMensal = $soma / $tam);  	 
}

for($j=0;$j<$tam;$j++){
 if($mediaMensal<$valorDia[$j]){
  $qtde = $qtde + 1; 
 }
}

$maiorValor = max($valorDia);
$menorValor = min($valorDia);

echo "Menor faturamento no mês:" . $menorValor."<br />";
echo "Maior faturamento no mês:" . $maiorValor."<br />";;
echo "Em ".$qtde." dias o faturamento diário foi maior que a media.";


?>
