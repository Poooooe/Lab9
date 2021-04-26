<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;

    if ($answer1 == "12") { $totalCorrect++; }
    if ($answer2 == "January") { $totalCorrect++; }
    if ($answer3 == "Peanuts") { $totalCorrect++; }
    if ($answer4 == "A rafter") { $totalCorrect++; }
    if ($answer5 == "Backrub") { $totalCorrect++; }

    $score = $totalCorrect * 20;

    echo "<h>Question 1: What was the How many U.S. presidents have been elected for two terms?</h>";
    echo "<p>You answered: $answer1</p>";
    echo "<p>Correct answer: 12</p>"; 

    echo "<h>Question 2: In what month is Earth closest to the sun?</h>";
    echo "<p>You answered: $answer2</p>";
    echo "<p>Correct answer: January</p>"; 

    echo "<h>Question 3: Which nut is used to make dynamite?</h>";
    echo "<p>You answered: $answer3</p>";
    echo "<p>Correct answer: Peanuts</p>"; 

    echo "<h>Question 4: What is a group of turkeys called?</h>";
    echo "<p>You answered: $answer4</p>";
    echo "<p>Correct answer: A rafter</p>"; 

    echo "<h>Question 5: What was Google’s original name?</h>";
    echo "<p>You answered: $answer5</p>";
    echo "<p>Correct answer: Backrub</p>"; 

    echo "<div id='results'>$totalCorrect / 5 correct   $score%</div>";
?>