<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>


<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="index.php">Result</a>
</nav>

<form action="result.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br>

<?php


  function yesNoQuestion($quid, $questionText, $answers, $correctAnswerIndex) {
    echo "<p>&nbsp;</p>
        <p>$questionText</p>
        <input type='radio' id='r-$quid-0' name='radio-$quid' value=$answers[0]'>
        <label for='r-$quid-0'>$ansers[0]</label><br>
        <input type='radio' id='r-$quid-1' name= radio-'$quid' value='$answers[1]'>
        <label for='r-$quid-1'>$answers[1]</label><br><br>";

        echo "<input type='hidden' name= 'correctAnswerIndex' value='$correctAnswerIndex'>";
  }


      $quid = "01";
      $questionText = "Geht es dir heute gut?";
      $answers = array("ja", "nein");
      $correctAnswerIndex = 1:
?>















</body>