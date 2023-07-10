
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../../assets/css/style.css">

<title>PHP Intro | Forms in PHP</title>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="result.php">Result</a>
    </nav>
    <?php
        session_start();

        if(isset($_POST['vorname'])) {
            $_SESSION['vorname'] = $_POST['vorname'];
        }

        if(isset($_SESSION['vorname'])) {

            echo 'Neuer Vorname: '. $_SESSION['vorname'];
        } else {
            echo 'Vorname fehlt!';
        }

        echo '<br>';

        if(isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }

        if(isset($_SESSION['name'])) {

            echo 'Neuer Nachname: '. $_SESSION['name'];
        } else {
            echo 'Vorname fehlt!';
        }
        echo '<br>';

        if(isset($_POST['nummer'])) {

            if(isset($_SESSION['nummer'])) {
                $_SESSION['nummer'] = $_SESSION['nummer'] + $_POST['nummer'];
            } else {
                $_SESSION['nummer'] = $_POST['nummer'];
            }
        }
        if(isset($_SESSION['nummer'])) {

            echo 'Neue Nummer: '. $_SESSION['nummer'];
        } else {
            echo 'Nummer fehlt!';
        }

        // print_r($_SESSION);
    ?>
</body>
</html>