<?php

include 'navbar.php';
if (isset($_REQUEST['del_id'])){
  $del_id = $_REQUEST['del_id'];
  $query = "DELETE from houses where id='$del_id'" ;
  $result = mysqli_query($con, $query) or die($query);
  ?>
  <div class="w3-panel w3-pale-green w3-border">
    <p> Record deleted successfully.</p>
  </div>
  <?php
  sleep(10);
  header ("Location: houses.php");


}else {
  echo  "del_id not set";
}

 ?>
