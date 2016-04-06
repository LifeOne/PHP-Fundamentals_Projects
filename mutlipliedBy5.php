<?php


  function multiply($array, $multiplier) {
    $newArray = [];
    for($i = 0; $i < count($array); $i++) {
      $newArray[$i] = $array[$i] * $multiplier;
    }
    return $newArray;

  }

  $A = [2,4,10,16];
  $B = multiply($A, 5);
  var_dump($B);

 ?>
