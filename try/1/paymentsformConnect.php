<?php
require('../../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $year = ucwords(trim($_REQUEST['year']));
  $month = ucwords(trim($_REQUEST['month']));
  $expected_amount = trim($_REQUEST['expected_amount']);
  $paid_amount = trim($_REQUEST['paid_amount']);
  $comments = ucfirst(trim($_REQUEST['comments']));


  $query = "INSERT  into `payments` (house_number, year, month, expected_amount, paid_amount , comments) VALUES ('$housenumber','$year','$month','$expected_amount', '$paid_amount','$comments')";
  $result = mysqli_query($con, $query);

  if($result){

    echo "<div class='form'>
    <h3>You have paid successfully.</h3>  </div>";
    sleep(2);
    header ("Location: http://localhost/websites/rentalms/try/1/payments.php");
  }
}else {
  echo "housenumber was not set";
  echo "housenumber ->".$housenumber;
}
header ("Location: http://localhost/websites/rentalms/try/1/payments.php");
