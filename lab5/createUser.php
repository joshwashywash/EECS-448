<?php
  if (empty($_POST['username'])) {
      exit('Username can not be empty.');
  }
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connect failed: ' . $DB->connect_error);
  }
  if ($DB->query("SELECT * FROM Users WHERE ID = '{$_POST['username']}'")->num_rows) {
      echo 'Username already exists in the database.';
  } else {
      $DB->query("INSERT INTO Users (ID) VALUES ('{$_POST['username']}')");
      echo 'Username has been added to the database.';
  }
  $DB->close();
