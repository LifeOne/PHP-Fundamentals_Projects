<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Sit and Watch the Checkerboard</title>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
      }
      body {
        /*width: 800px;*/
        margin: 0 auto;
      }
      td {
        width: 15px;
        height: 15px;
      }
      .red {
        background-color: red;
      }
      .black {
        background-color: black;
      }
      .blue {
        background-color: #1abc9c;
      }
      .green {
        background-color: #2ecc71;
      }
      .checkerboard {
        width: 25px;
        height: 25px;
        display: inline-block;
        margin-right: 5px;
      }
      #divform, tableform {
        margin: 50px;
      }
    </style>
  </head>
  <body>
    <div id="wrapper">
      <div id="divform">

        <?php
        function start_color($i) {
          $this_color = '';
          if($i % 2 == 0) {
            $this_color = 'green';
          } else {
            $this_color = 'blue';
          }
          return $this_color;
        }
        function next_color($c) {
          if($c == 'green') {
            $color = 'blue';
          } else {
            $color = 'green';
          }

          return $color;
        }

        //echo "<div class='checkerboard red'></div>";
        $divisions = 8;
        $color = '';

        for($i = 1; $i <= $divisions; $i++) {
          echo "<div class='checkboard-row'>";
          for($j = 1; $j <= $divisions; $j++) {
            if($j == 1) {
              $color = start_color($i);
            } else {
             $color = next_color($color);
            }
              echo "<div class='checkerboard $color'></div>";
          }
          echo "</div>";
        }



        ?>

      </div>

      <!-- <div id="tableform">
        <table>
        <?php /*
        $divisions = 8;
        $increment = 1;

        for($i = 1; $i <= $divisions; $i++) {
          echo "<tr>";
          for($j = 1; $j <= $divisions; $j++) {
            $color = '';
            if($j % 2 == 0) {
              if($increment == 0) {
                $color = 'green';
              } else {
                $color = 'blue';
              }
            } else {
              if($increment == 0) {
                $color = 'blue';
              } else {
                $color = 'green';
              }
            }
            echo "<td class='$color'></td>";
          }
          if($increment == 1) {
            $increment = 0;
          } else {
            $increment++;
          }
          echo "</tr>";
        }

        */
        ?>
        </table>
      </div> -->



    </div>
  </body>
</html>
