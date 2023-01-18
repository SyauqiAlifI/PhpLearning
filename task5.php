<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php study</title>
</head>
<body>
  <!-- ideal body weight formula -->
  <h1>Ideal body weight calculator</h1>
  <form action="task5.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <br>
    <label for="height">Height:</label>
    <input type="number" name="height" id="height">
    <br>
    <br>
    <input type="submit">
  </form>
  <?php
    // set if statement to check if the form is submitted
    if (isset($_POST["name"]) && isset($_POST["height"])) {
      // set variables
      $name = $_POST["name"];
      $height = $_POST["height"];
      $idealWeight = ($height - 100) - (($height - 100) * 0.1);
      echo "Hello, $name! Your ideal weight is $idealWeight kg.";
    }
  ?>
  <hr>
  <h1>How old are you?</h1>
  <form action="task5.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <br>
    <label for="year">Year of birth:</label>
    <input type="number" name="year" id="year">
    <br>
    <br>
    <input type="submit">
  </form>
  <?php
    // set if statement to check if the form is submitted
    if (isset($_POST["name"]) && isset($_POST["year"])) {
      // set variables
      $name = $_POST["name"];
      $year = $_POST["year"];
      $year_now = 2023;
      $age = $year_now - $year;
      echo "Hello, $name! You are $age years old.";
    }
  ?>
</body>
</html>