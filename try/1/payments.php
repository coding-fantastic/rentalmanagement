
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:100px;margin-top:43px;">
      <br>
      <div class="w3-container ">
          <h3>Payments Page</h3>
      </div><br>


      <div class="w3-container ">
        <a href="paymentform.php"><button class="w3-btn w3-green">Add Payment</button></a>

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
                    <td>Year</td>
                    <td>Month</td>
                    <td>Expected amount</td>
                    <td>Paid amount</td>
                    <td>Comments</td>
                  </tr>
                </thead>
                <?php
                $query= "select * from payments order by id desc";
                $result=mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)){
                  echo '<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["house_number"].'</td>
                            <td>'.$row["year"].'</td>
                            <td>'.$row["month"].'</td>
                            <td>'.$row["expected_amount"].'</td>
                            <td>'.$row["paid_amount"].'</td>
                            <td>'.$row["comments"].'</td>
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
