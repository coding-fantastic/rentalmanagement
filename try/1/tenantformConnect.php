<?php
require('../../database/db.php');

include 'navbar.php';

// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $fullname = ucwords(trim($_REQUEST['fullname']));
  $gender = ucwords(trim($_REQUEST['gender']));
  $national_id = trim($_REQUEST['national_id']);
  $mobile_number = trim($_REQUEST['mobile_number']);
  $email = (trim($_REQUEST['email']));
  $registration_date = (trim($_REQUEST['registration_date']));
  $status = ucwords((trim($_REQUEST['status'])));

// echo $fullname." ".$gender." ".$national_id." ".$mobile_number." ".$email." ".$registration_date." ".$housenumber." ". $status;

  $houseExist=0;

  $query= "SELECT * from houses order by id desc ";
  $result=mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($result)){
    // check if that house exists
    if ($housenumber == $row['house_number'] ) {
      $houseExist = 1;
      // new variable to hold house id to allow usage outside the while loop
      $house_id = $row['id'];
      // new variable to hold house status to allow usage outside the while loop
      $house_status = $row['status'];
      break;
  }
}


    // if now the house exists now continue if not print no house was found
    if ($houseExist == 1) {
      // check house status if it is vacant will insert to tenants table and update house table
      if ($house_status == 'Vacant') {

        $query = "INSERT  into `tenants`
        (fullname, gender, national_id, mobile_number, email , registration_date , house_number, status)
         VALUES
        ('$fullname','$gender','$national_id','$mobile_number', '$email','$registration_date', ' $housenumber', '$status')";
        $result = mysqli_query($con, $query) or die($query);

        ?>
       <div class="w3-panel w3-pale-green w3-border">
         <p> House was vacant and it exists </p>
         <?php echo "before update house number is " .$housenumber." and house status is ".$house_status; ?>
       </div>
       <?php
       // update status in house table
       $query = "UPDATE `houses` SET status='Occupied' WHERE id=$housenumber";
       $result = mysqli_query($con, $query) or die($query);

             


        if($result){

          ?>
         <div class="w3-panel w3-pale-green w3-border">
           <p> Record inserted  and updated successfully.</p>
         </div>
         <?php

          header ("Location: http://localhost/websites/rentalms/try/1/tenants.php");
        }
      }else {

          // if the house is occupied enter value to tenants table but don't update house status
         ?>
        <div class="w3-panel w3-pale-green w3-border">
          <p> House was found but it is Occupied. Tenant registered successfully but house table not modified. </p>
        </div>
        <?php
        $query = "INSERT  into `tenants`
        (fullname, gender, national_id, mobile_number, email , registration_date , house_number, status)
         VALUES
        ('$fullname','$gender','$national_id','$mobile_number', '$email','$registration_date', ' $housenumber', '$status')";
        $result = mysqli_query($con, $query) or die($query);

        if($result){


          header ("Location: http://localhost/websites/rentalms/try/1/tenants.php");
      }

    }
      }else {
        ?>
          <div class="w3-panel w3-pale-green w3-border">
            <p> There is no <?php echo $housenumber; ?> house .</p>
          </div>
          <?php
      }

    }
else {
  ?>
    <div class="w3-panel w3-pale-green w3-border">
      <p> Housenumber not set .</p>
    </div>
    <?php
}


?>
