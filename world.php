<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>world</title>
</head>
<body>
  <h1>hello world</h1>
  <p>Today is : <?php echo date("d.m.Y");?></p>
  <p>
  <?php
    $now = time();
    $newYear = strtotime("31-12-2018");

    $sec_left = $newYear - $now;
    echo floor($sec_left / (60 * 60 * 24));
    // echo $newYear;
  ?>
  day before new year.
  </p>
</body>
</html>