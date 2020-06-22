<?php
/**
 * This file can do crud operations on all pages
 */

 require '../../database/db.php';

class crud
{
  public $numRowsHouses;
  public $numRowsPayments;
  public $tenants;


  public function readRows()
  {

    $query= "select * from houses";
    $result=mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($results);

    $this->$numRowsHouses = $num_rows;
  }
}

$sql = 'select * from houses';
$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
echo $num_rows;



 ?>
