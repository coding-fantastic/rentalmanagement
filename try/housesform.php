<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  <!-- datatable cdn start  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <!-- datatable cdn end -->
  <link rel="stylesheet" href="../try/bootstrap/css/bootstrap.min.css">
  <script src="../try/jquery/jquery.min.js"></script>
  <script src="../try/popper/popper.min.js"></script>
  <script src="../try/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="jumbotron">
  <?php include '../database/db.php'; ?>
  <!-- start of navigation bar  -->


  <!-- end of navigation bar -->


  <div class="container ">

    <div class="container">
      <h2>Houses</h2>
      <p>You can add a new house by clicking the new house button.</p>
      <button  type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-plus"></span> New house </button>
      <div id="demo" class="collapse hide">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <h2>Add new house</h2>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form class="" action="housesformConnect.php" method="post">
                  <input class="form-control" type="text" name="housenumber" placeholder="housenumber" required> <br>
                  <textarea class="form-control" name="features" placeholder="features" rows="3" cols="80" ></textarea> <br>
                  <input class="form-control" type="text" name="rent" placeholder="rent" >  <br>
                  <select class="form-control" name="status" >
                    <option value="Vacant">Vacant</option>
                    <option value="Occupied">Occupied</option>
                  </select>  <br>
                  <input class="btn btn-primary" type="submit" name="submit" value="Register" >
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>



    <div class="container">
      <div class="col-md-12 ">
        <div class="card">
          <div class="card-header">
            <h2>View available houses</h2>
          </div>
          <div class="card-body">
              <!--  datatable  start-->
            <div class="table-responsive">
              <table id="housestable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>House Number</td>
                        <td>Features</td>
                        <td>Rent</td>
                        <td>Status</td>
                      </tr>
                    </thead>
                    <?php
                    $query= "select * from houses order by id desc";
                    $result=mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($result)){
                      echo '<tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["house_number"].'</td>
                                <td>'.$row["features"].'</td>
                                <td>'.$row["rent"].'</td>
                                <td>'.$row["status"].'</td>
                            </tr>';
                    }
                     ?>
              </table>
            </div>

            <!-- datatable end -->
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
$(document).ready(function () {
  $('#housestable').DataTable();

  // check https://stackoverflow.com/questions/23101966/bootstrap-alert-auto-close for success alert
});
</script>

</body>
</html>
