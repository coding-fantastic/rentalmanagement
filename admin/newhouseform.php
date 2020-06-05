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
      $features = trim($_REQUEST['features']);
      $rent = trim($_REQUEST['rent']);
      $status = trim($_REQUEST['status']);
      // echo "housenumber:".$housenumber."-features".$features."-rent".$rent."-status".$status;
      $query = "insert into `houses` (house_number, features, status, rent) VALUES ('$housenumber','$features','$status','$rent')";
      $result = mysqli_query($con, $query);

      if($result){
        echo "<div class='form'>
        <h3>You have registered successfully.</h3>
        <br>Click here to <a href='#'>dashboard</a></div>";
      }
      }else{
      ?>

    <!-- navigation bar -->

    <a href=""> Add new </a>-
    <a href=""> Print Preview </a>
    <div class="form">
      <h2>Add new house</h2>
      <form class="" action="" method="post">
        <input type="text" name="housenumber" placeholder="housenumber" required> house number<br>
        <input type="text" name="features" placeholder="features"> features <br>
        <input type="text" name="rent" placeholder="rent" > rent <br>
        <select class="" name="status" >
          <option value="vacant">vacant</option>
          <option value="occupied">occupied</option>
        </select>  <br>
        <input type="submit" name="submit" value="enter">
      </form>
    </div>

      <?php }?>

  </body>
</html>
