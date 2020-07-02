
<?php
require('../../database/db.php');
// If form submitted , insert values into the database.
if (isset($_REQUEST['username'])){
  $username = trim($_REQUEST['username']);
  $password = trim($_REQUEST['password']);
  $password = md5($password);



  // check if record exists in db
  $query= "SELECT * from users WHERE username='$username' and password='$password' ";
  $result=mysqli_query($con, $query);
  $row_cnt = mysqli_num_rows($result);

  if ($row_cnt) {
    session_start();
    $_SESSION["username"] = $username;
    header ("Location: dashboard.php");

  }else {
    // echo "housenumber was not set";
    // echo "housenumber ->".$housenumber;
    echo "name and password was not found";
    sleep(5);
    echo "string";

  }

  // if($result){
  //
  //   echo "<div class='form'>
  //   <h3>You have paid successfully.</h3>  </div>";
  //   sleep(2);
  //   header ("Location: http://localhost/websites/rentalms/try/1/dashboard.php");
  // }
}


?>
