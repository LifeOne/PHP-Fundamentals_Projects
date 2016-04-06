<?php

  $time_start = microtime(true);

  function make_array($int) {
    $array = [];
    for($i = 0; $i < $int; $i++) {
      $array[$i] = mt_rand(0, 10000);
    }
    return $array;
  }

  function bubble_sort($arr) {
    for($i = count($arr) - 1; $i > 0; $i--) {
      for($j = 0; $j < $i; $j++) {
        if($arr[$j] > $arr[$j + 1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j + 1];
          $arr[$j + 1] = $temp;
        }
      }
    }
    return $arr;
  }
  $array = make_array(100);
  var_dump(bubble_sort($array));
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo 'Time to execute: ' . $time;
?>
