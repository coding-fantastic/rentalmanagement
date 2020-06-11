<?php
require('../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $features = trim($_REQUEST['features']);
  // uppercase first character of each word in a string
  $features = ucwords($features);
  $rent = trim($_REQUEST['rent']);
  $status = trim($_REQUEST['status']);
  // echo "housenumber:".$housenumber."-features".$features."-rent".$rent."-status".$status;
  $query = "insert into `houses` (house_number, features, status, rent) VALUES ('$housenumber','$features','$status','$rent')";
  $result = mysqli_query($con, $query);

  if($result){
    echo "<div class='form'>
    <h3>You have registered successfully.</h3>
    ";
  }
  }
