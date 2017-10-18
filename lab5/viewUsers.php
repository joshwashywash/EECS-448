<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>";
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  $result = $DB->query('SELECT ID FROM Users');
  if ($result->num_rows > 0) {
      echo "<table border='1'><tbody><tr><th>Usernames in Database</th></tr>";
      while ($row = $result->fetch_assoc()) {
          echo '<tr><td>', $row['ID'], '</td></tr>';
      }
      echo '</tbody></table>';
  } else {
      echo 'There are no Usernames within the database.';
  }
  $result->free();
  $DB->close();
