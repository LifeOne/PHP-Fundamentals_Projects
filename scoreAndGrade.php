<?php

$gradeInfo = [];

for($i = 0; $i < 100; $i++) {
  $number = rand(50, 100);
  if($number >= 90) {
    $gradeInfo = ["<h1>Your Score: $number/100</h1>","<h2>Your grade is A.</h2>"];
  } else if($number >= 80) {
      $gradeInfo = ["<h1>Your Score: $number/100</h1>","<h2>Your grade is B.</h2>"];
  } else if ($number >= 70) {
      $gradeInfo = ["<h1>Your Score: $number/100</h1>","<h2>Your grade is C.</h2>"];
  } else {
      $gradeInfo = ["<h1>Your Score: $number/100</h1>","<h2>Your grade is D.</h2>"];
  }
  echo $gradeInfo[0] . $gradeInfo[1];
}

?>
