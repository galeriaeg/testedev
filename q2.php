<?php

$numero = 5;

$valor1 = 0;
$valor2 = 1;
$fleg = 0;

for ($i = 0; $i <= $numero; $i++ ) {
  //echo $valor1."-";
  $valor3 = $valor1 + $valor2;
  $valor1 = $valor2;
  $valor2 = $valor3;
  
  if($numero==$valor1)
      $fleg=1;
}

if($fleg==1)
echo "Número pertence a sequencia fibonacci!";
else
echo "Número NÃO pertence a sequencia fibonacci!";

?>
