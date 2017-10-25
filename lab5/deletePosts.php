<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>",
    '<title>Delete Posts</title>';
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  $result = $DB->query('SELECT * FROM Posts');
  if ($result->num_rows > 0) {
      echo "<form action='deleteConfirm.php' method='post'>",
        "<table border='1'><tr><th>Post</th><th>Author</th><th>Delete?</th></tr>";
      while ($row = $result->fetch_assoc()) {
          echo "<tr><td>{$row['content']}</td><td>{$row['author']}</td>",
            "<td><input type='checkbox' name='delete[]' value='{$row['ID']}'></td></tr>";
      }
      echo "</table><br><input type='submit' value='Submit'></form>";
  } else {
      echo 'There are no Posts within the database.';
  }
  $result->free();
  $DB->close();
  echo "<br><button onclick='window.history.back();'>Back</button>";
