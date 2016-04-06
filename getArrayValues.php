<?php

function print_lists($reviews) {

  echo "<ul>";
  foreach($reviews as $review) {
    echo "<li><p>{$review}</p></li>";
  }
  echo "</ul>";

}

$sickReviews = ["10/10 - ign", "Totally Dope - Game Informer", "Wowowowowowowowowowo - someindiereviewer"];
print_lists($sickReviews);

?>
