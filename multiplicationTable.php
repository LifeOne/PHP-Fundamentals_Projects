<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Multiplication Table</title>
    <style type="text/css">
      * {
        font-size: 16px;
        color: black;
        font-weight: normal;
      }
      h5 {
        font-size: 18px;
        color: red;
        font-weight: bold;
        margin: 2px;
      }
      td {
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <table>
      <?php
        $countX = 9;
        $countY = 9;
        for($tablerow = 0; $tablerow < $countY + 1; $tablerow++) {
          ?><tr><?php
          for($tablecell = 0; $tablecell < $countX + 1; $tablecell++) {
            ?>
            <td><?php
              if($tablecell == 0 && $tablerow == 0) {
                echo "";
              } else if($tablecell == 0) {
                echo "<h5>" . $tablerow . "</h5>";
              } else if($tablerow == 0) {
                echo "<h5>" . $tablecell . "</h5>";
              } else {
                echo $tablecell * $tablerow;
                //echo "life";
              }
            ?></td>
            <?php
          }


          ?></tr><?php
        }

      ?>
    </table>
  </body>
</html>
