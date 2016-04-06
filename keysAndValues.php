<?php

function array_details($array) {
  $count = count($array);

  echo "There are $count keys in this array: ";
  foreach($array as $key => $value) {
    echo "$key ";
  }
  echo "<br>";
  foreach($array as $key => $value) {
    echo "The value in the key '$key' is '$value'.<br>";
  }
}



$users = ["first_name" => "Michael", "last_name" => "Choi"];
array_details($users);


 ?>
