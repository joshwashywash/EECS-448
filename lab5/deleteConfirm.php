<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>";
  echo '<title>Delete Confirmation</title>';
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  if (empty($_POST)) {
      exit('You didn\'t select any posts to delete.');
  } else {
      foreach ($_POST['delete'] as $ID) {
          echo $DB->query("DELETE FROM Posts where ID = {$ID}") ? 'Success' : 'Failure';
      }
  }
  $DB->close();
