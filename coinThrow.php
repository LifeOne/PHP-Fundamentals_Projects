<?php

$heads = 0;
$tails = 0;

echo "Starting the program! <br><br>";

for($i = 0; $i <= 5000; $i++) {
  $r = rand(1,2);
  $counter = 0;
  $display = 'no';
  if($r == 1) {
    $counter = 1;
    $display = 'heads';
    $heads++;
  } else if($r == 2) {
    $counter = 2;
    $display = 'tails';
    $tails++;
  }

  echo "Attempt #$i: Throwing a coin... It's a $display! ... Got $heads head(s) so far and $tails tail(s) so far. <br>";
}
echo "<br>Ending the program. Thanks!"

 ?>
