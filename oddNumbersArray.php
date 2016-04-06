<?php

  $odd_numbers = [];

  for($i = 0; $i <= 20000; $i++) {
    if($i % 2 == 1) {
      $odd_numbers[] = $i;
    }
  }
  var_dump($odd_numbers);

 ?>
