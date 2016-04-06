<?php
/*
Display a drop-down menu in HTML (using select tag and option tag) that displays the different states.
Create this drop-down menu using for loops. Create another identical drop-down menu but, this time, use foreach statement.

Once you're done with above exercise, insert three new states in the array $states: 'NJ', 'NY', 'DE'.
Display a new drop-down menu with the eight unique states.
*/
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
$statesExtended = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

echo "<select name='State-forloop'>";
for($i = 0; $i < count($states); $i++) {
  echo "<option value='$states[$i]'>$states[$i]</option>";
}
echo "</select>";

echo "<br><br><br>";
echo "<select name='State-foreach'>";
foreach($states as $state) {
  echo "<option value='$state'>$state</option>";
}
echo "</select>";

echo "<br><br><br>";
echo "<select name='StateExtended-foreach'>";
foreach($statesExtended as $stateExt) {
  echo "<option value='$stateExt'>$stateExt</option>";
}
echo "</select>";


?>
