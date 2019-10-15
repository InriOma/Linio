<?php

$num = 100;
$multiplo3 = 3;
$multiplo5 = 5;
$cnt3 = 0;
$cnt5 = 0;
$cnt35 = 0;

for($i = 1; $i <= $num; $i++) {
  print "Número: ". $i . "\n";

  if ($i % $multiplo3 == 0) {
    print $i . " es múltiplo del número: " . $multiplo3 . " - Linio. \n";
    $cnt3++;
  }

  if ($i % $multiplo5 == 0) {
    print $i . " es múltiplo del número: " . $multiplo5 . " - IT. \n";
    $cnt5++;
  }

  if (($i % $multiplo3) == 0 && ($i % $multiplo5) == 0) {
    print $i . " es múltiplo de: " . $multiplo3 . " y es multiplo de: " . $multiplo5 . " - Linianos. \n";
    $cnt35++;
  }

}

print "Multiplos de 5 son: " . $cnt5 . "\n";
print "Multiplos de 3 son: " . $cnt3 . "\n";
print "Multiplos de 3 y 5 son: " . $cnt35 . "\n";

?>