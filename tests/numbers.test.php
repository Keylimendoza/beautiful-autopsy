<?php
  require "../src/numbers.php";

  $number = rand(1, 15);
  $count = 1;
  for($i = 1; $i <= $number; $i++){
    $count *= $i;
  }
  $tests["Factorial recursivo"] = $count === factorial($number);
  $tests["Siguiente primo"] = gmp_nextprime($number) === primo($number);

  $tests["Binario"] = decbin($number) === binario($number);
  $tests["Decimal"] = bindec($number) === decimal($number);

?>
