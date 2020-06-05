<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require('../database/db.php');
    // If form submitted , insert values into the database.
    if (isset($_REQUEST['housenumber'])){
      $housenumber = trim($_REQUEST['housenumber']);
      // uppercase first character of each word in a string
      $housenumber = ucwords($housenumber);
      $fullname = trim($_REQUEST['fullname']); $fullname = ucwords($fullname);
      $national_id = trim($_REQUEST['national_id']);
      $mobile_number = trim($_REQUEST['mobile_number']);
      $expected_amount = trim($_REQUEST['expected_amount']); $paid_amount = trim($_REQUEST['paid_amount']); $balance = trim($_REQUEST['balance']);
      $datepicker = trim($_REQUEST['datepicker']); $comments = trim($_REQUEST['comments']);
      echo "fullname:".$fullname."-national id: ".$national_id."-mobile number: ".$mobile_number."-housenumber:".$housenumber."-expected_amount:".$expected_amount."-paid_amount:".$paid_amount."-balance:".$balance."-datepicker:".$datepicker."-comments:". $comments;
      die('@@');
      $query = "insert into `houses` (house_number, features, status, rent) VALUES ('$housenumber','$features','$status','$rent')";
      $result = mysqli_query($con, $query);

      if($result){
        // after successfully registering new tenant display available tenats
        
      }
      }else{
      ?>

    <!-- navigation bar -->

    <a href=""> Add new </a>-
    <a href=""> Print Preview </a>
    <div class="form">
      <h2>Add new house</h2>
      <form class="" action="" method="post">
        <input type="text" name="fullname" placeholder="fullname" value=""> full name <br>
        <input type="text" name="national_id" placeholder="national id" value=""> national id <br>
        <input type="text" name="mobile_number" placeholder="mobile number" value=""> mobile number <br>
        <input type="text" name="housenumber" placeholder="housenumber" required> house number<br>
        <input type="text" name="expected_amount" placeholder="expected amount" value=""> expected amount <br>
        <input type="text" name="paid_amount" placeholder="paid amount" value="0"> paid amount <br>
        <input type="text" name="balance" placeholder="ksh 0" value="0"> balance <br>
        <input type="text" name="datepicker" placeholder="datepicker" value=""> datepicker <br>
        <input type="text" name="comments" placeholder="comments" value=""> comments <br>
        <input type="submit" name="submit" value="enter"> <br>
      </form>
    </div>

      <?php }?>

  </body>
</html>
