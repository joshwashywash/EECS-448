<?php
  $mysqli = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($mysqli->connect_errno) {
      exit('Connect failed: '.$mysqli->connect_error);
  }
  $result = $mysqli->query("SELECT ID FROM Users");
  if ($result->num_rows > 0) {
    echo "<table border='1'><tbody><tr><th>Usernames in Database</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo '<tr><td>', $row['ID'], '</td></tr>';
    }
    echo '</tbody></table>';
  } else {
    echo 'There are no Usernames in the database.';
  }
?>
