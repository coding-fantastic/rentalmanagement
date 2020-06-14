<?php
require('../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $fullname = ucwords(trim($_REQUEST['fullname']));
  $gender = ucwords(trim($_REQUEST['gender']));
  $national_id = trim($_REQUEST['national_id']);
  $mobile_number = trim($_REQUEST['mobile_number']);
  $email = trim($_REQUEST['email']);
  $registration_date = trim($_REQUEST['registration_date']);
  $status = trim($_REQUEST['status']);
  echo $housenumber." - ".$fullname." - ".$gender." - ".$national_id." - ".$mobile_number;
  $query = "INSERT  INTO `tenants` (fullname, gender, national_id, mobile_number, email , registration_date, house, status) VALUES ('$fullname','$gender','$national_id','$mobile_number', '$email', '$registration_date', '$housenumber', '$status')";
  $result = mysqli_query($con, $query);

  if($result){
    echo "<div class='form'>
    <h3>You have registered successfully.</h3>  </div>";
    echo "we here";
    sleep(2);
    header ("Location: http://localhost/websites/rentalms/try/tenantsform.php");
  }
}else {
  echo "housenumber was not set";
  echo "housenumber ->".$housenumber;
}
