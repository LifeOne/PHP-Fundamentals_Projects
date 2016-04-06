<?php

  $numbers = array(1,2,5,10,255,3);
  $sum = $numbers[0];
  $avg = $numbers[0];

  for($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
  }
  $avg = $sum / count($numbers);
  echo $avg;

?>
