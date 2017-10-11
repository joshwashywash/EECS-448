<?php
  if (empty($_POST['username'])) {
      echo 'Username can not be empty.';
      exit();
  }
  $mysqli = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s", $mysqli->connect_error);
      exit();
  }
  if ($mysqli->query("SELECT * FROM Users WHERE ID = '{$_POST['username']}'")->num_rows) {
      echo 'Username already exists in the database.';
  } else {
      $mysqli->query("INSERT INTO Users (ID) VALUES ('{$_POST['username']}')");
      echo 'Username has been added to the database.';
  }
  $mysqli->close();
