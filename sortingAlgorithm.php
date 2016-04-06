<?php
//start at beginning of array find lowest number - bring it to front
  function sort_array($arr) {
    for($i = 0; $i < count($arr); $i++) {
      for($j = 0; $j < count($arr); $j++) {
        if($arr[$i] < $arr[$j]) {
          $min = $arr[$i];
          $arr[$i] = $arr[$j];
          $arr[$j] = $min;
        } else if($arr[$i] > $arr[$j]) {
          $max = $arr[$i];
        }
      }
    }
    return $arr;
  }
  function array_fetch($int) {
    $array = [];
    for($i = 0; $i < $int; $i++) {
      $array[$i] = mt_rand(0,10000);
    }
    return $array;
  }
  $time_start = microtime(true);

  $array = array_fetch(100);
  var_dump(sort_array($array));

  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo 'Time to execute: ' . $time;

 ?>
