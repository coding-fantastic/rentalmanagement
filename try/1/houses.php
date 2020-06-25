<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Payments Form</title>

      <!-- datatables cdn -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/w3.css">

  </head>
  <body class="w3-light-gre">
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:100px;margin-top:43px;">
      <br>
      <div class="w3-container ">
          <h3>Houses Page</h3>
      </div><br>


      <div class="w3-container ">
        <a href="houseform.php"><button class="w3-btn w3-green">Add a house</button></a>

      </div></br>


      <!-- display current payments -->
      <div class="w3-container ">
        <!--  datatable  start-->
        <div class="w3-responsive">
          <table id="paymentsTbl" class="w3-table w3-striped w3-bordered">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>House number</td>
                    <td>Features</td>

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
                          
                          <td>'.$row["status"].'</td>
                        </tr>';
                }
                 ?>
          </table>
        </div>

      <!-- datatable end -->
      </div><br>

    </div>

    <script>
      $(document).ready(function() {
        $('#paymentsTbl').DataTable();
      } );

    </script>

  </body>
</html>
