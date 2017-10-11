<?php
  if (empty($_POST['post'])) {
      exit('Post can not be empty.');
  }
  $mysql = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($mysql->connect_errno) {
      exit('Connect failed: '.$mysql->connect_error);
  }
  if ($mysql->query("SELECT * FROM Users WHERE ID = '{$_POST['username']}'")->num_rows) {
      $mysql->query("INSERT INTO Posts (content, author) VALUES ('{$_POST['post']}', '{$_POST['username']}')");
      echo 'Your post was saved in the database.';
  } else {
      echo 'Username was not found in the database. Post rejected.';
  }
  $mysql->close();
?>
