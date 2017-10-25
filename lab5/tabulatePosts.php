<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>";
  echo "<title>Posts made by {$_POST['user']}</title>";
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  $result = $DB->query(sprintf("SELECT content FROM Posts WHERE author = '%s'", $DB->real_escape_string($_POST['user'])));
  if ($result->num_rows > 0) {
      echo "<table border='1'><tbody><tr><th>Posts made by ", $_POST['user'], "</th></tr>";
      while ($row = $result->fetch_assoc()) {
          echo '<tr><td>', $row['content'], '</td></tr>';
      }
      echo '</tbody></table>';
  } else {
      echo "No posts found for {$_POST['user']}.";
  }
  $result->free();
  $DB->close();
  echo "<br><button onclick='window.history.back();'>Back</button>";
