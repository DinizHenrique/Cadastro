<?php
include __DIR__.'/../recibo/vendor/autoload.php';
  use WGenial\NumeroPorExtenso\NumeroPorExtenso;
  $extenso = new NumeroPorExtenso;
  $n1 = 6120;
  echo $n1 ."\n";
  $extenso_n1 = $extenso->converter($n1);
  echo $extenso_n1 ."\n\n";
  


?>
