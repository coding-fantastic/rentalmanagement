<?php
require('../../database/db.php');
?>
<?php
  require 'navbar.php';
 ?>

<?php
// If form submitted , insert values into the database.
if (isset($_REQUEST['housenumber'])){
  $housenumber = trim($_REQUEST['housenumber']);
  // uppercase first character of each word in a string
  $housenumber = ucwords($housenumber);
  $features = ucwords(trim($_REQUEST['features']));
  $id = trim($_REQUEST['id']);
  $status = ucwords(trim($_REQUEST['status']));

  // echo $id."<br>". $housenumber."<br>".$features."<br>".$status;



  $query = "UPDATE   `houses` SET house_number='$housenumber', features='$features', status='$status' WHERE id=$id";
  $result = mysqli_query($con, $query);

  if($result){

    // echo "<div class='form'>
    // <h3>You have paid successfully.</h3>  </div>";
    // sleep(2);
    ?>
    <div class="w3-panel w3-pale-green w3-border">
      <p> Record updated successfully.</p>
    </div>
    <?php
    // sleep(5);

    // header ("Location: http://localhost/websites/rentalms/try/1/houses.php");
  }
}else {
  echo "<br>housenumber was not set thats why you didn't get results as expected<br>";
  echo "housenumber ->".$housenumber;
}
