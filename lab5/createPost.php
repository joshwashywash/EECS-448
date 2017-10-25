<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>",
    '<title>Post Creation Confirmation</title>';
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  if (empty($_POST['post'])) {
      echo 'Post can not be empty.';
  } else {
      if ($DB->query(sprintf("SELECT * FROM Users WHERE ID = '%s'", $DB->real_escape_string($_POST['username'])))->num_rows > 0) {
          $DB->query(sprintf("INSERT INTO Posts (content, author) VALUES ('%s', '%s')", $DB->real_escape_string($_POST['post']), $DB->real_escape_string($_POST['username'])));
          echo 'Your post was saved to the database.';
      } else {
          echo "{$_POST['username']} was not found in the database. Post rejected.";
      }
  }
  $DB->close();
  echo "<br><button onclick='window.history.back();'>Back</button>";
