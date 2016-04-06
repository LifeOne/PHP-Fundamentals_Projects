<?php
  $array = [1,2,5,10,255,3];
  $sum = 0;

  for($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
  }

  echo $sum;

 ?>
