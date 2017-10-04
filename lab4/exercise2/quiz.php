<?php
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
    echo "Question ".($key+1).": {$question} Your Answer: {$_POST[$key]}.";
    if ($_POST[$key] === "Blue")
      echo "<b> Correct</b>";
    else {
      echo "<b> Incorrect</b>";
      $score--;
    }
    echo "<br>";
  }
  echo "You got {$score} out of 5 right. Your percentage is ".($score*20)."%.";
?>
