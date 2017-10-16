<?php
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  $result = $DB->query('SELECT ID FROM Users');
  echo "<form action='tablePosts.php' method='post'><select name='user'>";
  while ($row = $result->fetch_assoc()) {
      echo "<option value='{$row['ID']}'>{$row['ID']}</option>";
  }
  $result->free();
  $DB->close();
  echo "</select><br><input type='submit' value='Submit'></form>";
