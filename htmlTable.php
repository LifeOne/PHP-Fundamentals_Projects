
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>HTML Table</title>
    <link rel="stylesheet" type="text/css" href="htmltable.css"></link>
  </head>
  <body>
    <div id="htmltable">
      <h1>Standard HTML table</h1>
      <table>
        <tr>
          <td><span>User #</span></td>
          <td><span>First Name</span></td>
          <td><span>Last Name</span></td>
          <td><span>Full Name</span></td>
          <td><span>Full Name in upper case</span></td>
          <td><span>Length of full name (without spaces)</span></td>
        </tr>
        <tr>
          <td><span>1</span></td>
          <td>Michael</td>
          <td>Choi</td>
          <td>Michael Choi</td>
          <td>MICHAEL CHOI</td>
          <td>11</td>
        </tr>
        <tr>
          <td><span>2</span></td>
          <td>John</td>
          <td>Supsupin</td>
          <td>John Supsupin</td>
          <td>JOHN SUPSUPIN</td>
          <td>12</td>
        </tr>
        <tr>
          <td><span>3</span></td>
          <td>Michael</td>
          <td>Choi</td>
          <td>Michael Choi</td>
          <td>MICHAEL CHOI</td>
          <td>11</td>
        </tr>
        <tr>
          <td><span>4</span></td>
          <td>John</td>
          <td>Supsupin</td>
          <td>John Supsupin</td>
          <td>JOHN SUPSUPIN</td>
          <td>12</td>
        </tr>
      </table>
    </div>
    <div id="phptable">
      <h1>PHP HTML Tables</h1>
      <?php
      $users = [
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot'),
        array('first_name' => 'Super', 'last_name' => 'Hot')
      ];
       ?>
      <div id="foreachloop">

        <!-- FOREACH LOOP -->
        <h3>Made with foreach loops.</h3>
        <table>
          <tr>
            <td><span>User #</span></td>
            <td><span>First Name</span></td>
            <td><span>Last Name</span></td>
            <td><span>Full Name</span></td>
            <td><span>Full Name in upper case</span></td>
            <td><span>Length of full name (without spaces)</span></td>
          </tr>
        <?php
        $count = 0;

        foreach($users as $user) {
          $count++;
          $tr_class = '';
          if($count % 5 == 0) {
            $tr_class = 'tr-alt';
          } else {
            $tr_class = 'tr-def';
          }

          echo "<tr class='$tr_class'>";
          echo "<td><span>$count</span></td>";
          foreach($user as $value) {
            echo "<td>$value</td>";
          }
          $full_name = $user["first_name"] . ' ' . $user["last_name"];
          $full_name_UC = strtoupper($full_name);
          $name_length = strlen(str_replace(' ', '', $full_name));

          echo "<td>" . $full_name . "</td>";
          echo "<td>" . $full_name_UC . "</td>";
          echo "<td>" . $name_length . "</td>";

          ?></tr><?php
        }
        ?>
        </table>

      </div>

      <!-- FOR LOOP -->

      <div id="forloopTable">
        <h1>Made with for loops.</h1>
        <table>
          <tr>
            <td><span>User #</span></td>
            <td><span>First Name</span></td>
            <td><span>Last Name</span></td>
            <td><span>Full Name</span></td>
            <td><span>Full Name in upper case</span></td>
            <td><span>Length of full name (without spaces)</span></td>
          </tr>
          <?php
            $count = 0;
            for($i = 0; $i < count($users); $i++) {
              $count++;
              $tr_class = '';

              $full_nameFL = $users[$i]["first_name"] . ' ' . $users[$i]["last_name"];
              $full_name_UCFL = strtoupper($full_nameFL);
              $name_lengthFL = strlen(str_replace(' ', '', $full_nameFL));

              if(($i + 1) % 5 == 0) {
                $tr_class = 'tr-alt';
              } else {
                $tr_class = 'tr-def';
              }


              echo "<tr class='$tr_class'><td>" . $count . "</td>";
              echo "<td>" . $users[$i]["first_name"] . "</td>";
              echo "<td>" . $users[$i]["last_name"] . "</td>";
              echo "<td>" . $full_nameFL . "</td>";
              echo "<td>" . $full_name_UCFL . "</td>";
              echo "<td>" . $name_lengthFL . "</td>";

              echo "</tr>";
            }

          ?>
        </table>
      </div>
    </div>
  </body>
</html>
