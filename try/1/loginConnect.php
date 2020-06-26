<?php
require('../../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['username'])){
  $username = trim($_REQUEST['username']);
  $password = trim($_REQUEST['password']);
  $password = md5($password);

  // check if record exists in db
  $query= "select * from users ";
  $result=mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($result)){
    if ($username == $row["username"] && $password == $row["password"]) {
      header ("Location: http://localhost/websites/rentalms/try/1/dashboard.php");
    }
  }

  // if($result){
  //
  //   echo "<div class='form'>
  //   <h3>You have paid successfully.</h3>  </div>";
  //   sleep(2);
  //   header ("Location: http://localhost/websites/rentalms/try/1/dashboard.php");
  // }
}
else {
  // echo "housenumber was not set";
  // echo "housenumber ->".$housenumber;
  echo "name and password was not found";
}


?>
