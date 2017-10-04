<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  echo "<title>Your Results</title>";
  $score = 5;
  $questions = array(
    "What color is the sky?",
    "What color is the ocean?",
    "What color is water?",
    "What color are blueberries?",
    "What color are bluebirds?"
  );
  foreach($questions as $key => $question) {
    echo "Question ".($key+1).": {$question} Your Answer: {$_POST[$key]}. ";
    echo "<b>".($_POST[$key] === "Blue" ? "Correct" : "Incorrect")."</b><br>";
    if ($_POST[$key] !== "Blue")
      $score --;
  }
  echo "You got {$score} out of 5 right. Your percentage is ".($score*20)."%.";
?>
