<?php
//PART 1
/*
function draw_stars($a) {

  for($i = 0; $i < count($a); $i++) {
    for($j = 0; $j < $a[$i]; $j++) {
      echo "*";
    }
    echo "<br>";
  }
}

$x = [4, 6, 1, 3, 5, 7, 25];
draw_stars($x);
*/
//PART 2
function draw_stars($a) {

  foreach($a as $b => $c) {
    $value = 0;
    $repeat = 0;

    if(is_integer($c)) {
      $value = "*";
      $repeat = $c;

    } else {
      $value = strtolower($c[0]);
      $repeat = strlen($c);
    }

    for($i = 0; $i < $repeat; $i++) {
      echo $value;
    }
    echo "<br>";
  }
}

$no = array("Tom", "Bill", "Kys");
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($x);

?>
