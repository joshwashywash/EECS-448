<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo '<table border=\"1\">';
  for ($r = 1; $r < 101; $r++){
    echo '<tr>';
    for ($c = 1; $c < 101; $c++)
      echo '<td>'.$r*$c.'</td>';
    echo '</tr>';
  }
  echo '</table>';
?>
