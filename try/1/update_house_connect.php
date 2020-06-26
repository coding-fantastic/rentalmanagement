<?php
require('../../database/db.php');

session_start();

// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $features = ucwords(trim($_REQUEST['features']));
  $id = trim($_REQUEST['id']);
  $status = ucwords(trim($_REQUEST['status']));

  echo $id."<br>". $housenumber."<br>".$features."<br>".$status;



  $query = "UPDATE   `houses` SET house_number='$housenumber', features='$features', status='$status' WHERE id=$id";
  $result = mysqli_query($con, $query);

  if($result){

    // echo "<div class='form'>
    // <h3>You have paid successfully.</h3>  </div>";
    // sleep(2);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_typ'] = "green";
    echo $_SESSION['message'];

      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
      }


    header ("Location: http://localhost/websites/rentalms/try/1/houses.php?id=1");
  }
}else {
  echo "<br>housenumber was not set thats why you didn't get results as expected<br>";
  echo "housenumber ->".$housenumber;
}
