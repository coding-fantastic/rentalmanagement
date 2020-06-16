<?php

  include '../database/db.php';
  $query= "select * from payments order by id desc";
  $result=mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $datentime = $row["datentime"];
  $dateArry = (date_parse($datentime));

  print_r($dateArry["month"]);
  print_r($dateArry["month"] + $dateArry["month"]);
  print_r("<br>hello".$dateArry["year"]);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>



  </body>
</html>
