<?php

  function get_max_and_min($array) {
    $maxmin = ["max" => $array[0], "min" => $array[0]];
    for($i = 0; $i < count($array); $i++) {
      if($array[$i] > $maxmin["max"]) {
        $maxmin["max"] = $array[$i];
      } else if($array[$i] < $maxmin["min"]) {
        $maxmin["min"] = $array[$i];
      }
    }
    return $maxmin;
  }

  $test = [5,6,6,100,4];
  $output = get_max_and_min($test);
  var_dump($output);

 ?>
