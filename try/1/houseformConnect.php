<?php
require('../../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $features = ucwords(trim($_REQUEST['features']));
  $rent = ucwords(trim($_REQUEST['rent']));
  $status = ucwords(trim($_REQUEST['status']));


  $query = "INSERT  into `houses` (house_number, features, rent, status ) VALUES ('$housenumber','$features','$rent','$status')";
  $result = mysqli_query($con, $query);

  if($result){

    echo "<div class='form'>
    <h3>You have paid successfully.</h3>  </div>";
    sleep(2);
    header ("Location: http://localhost/websites/rentalms/try/1/houses.php");
  }
}else {
  echo "housenumber was not set";
  echo "housenumber ->".$housenumber;
}
