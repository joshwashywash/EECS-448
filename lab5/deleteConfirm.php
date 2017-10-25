<?php
  echo "<link rel='stylesheet' type='text/css' href='../../stylesheet.css'>";
  echo '<title>Delete Confirmation</title>';
  $DB = new mysqli('mysql.eecs.ku.edu', 'joertel', 'P@$$word123', 'joertel');
  if ($DB->connect_errno) {
      exit('Connection failed: ' . $DB->connect_error);
  }
  if (empty($_POST)) {
      echo 'You didn\'t select any posts to delete.';
  } else {
      foreach ($_POST['delete'] as $ID) {
          echo 'Deletion of: "', $DB->query("SELECT content FROM Posts where ID = {$ID}")->fetch_assoc()['content'], '"... ',
              $DB->query("DELETE FROM Posts where ID = {$ID}") ? 'Success' : 'Failure', '<br>';
      }
  }
  $DB->close();
  echo "<button onclick='window.history.back();'>Back</button><br>",
    '<b>Please be sure to reload the webpage by hitting F5 after using the back button.</b>';
