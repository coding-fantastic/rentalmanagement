
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:50px;margin-top:43px;">
      <br>
      <div class="w3-container ">
          <h3>Tenants Page</h3>
      </div><br>


      <div class="w3-container ">
        <a href="tenantform.php"><button class="w3-btn w3-green">Add Tenant</button></a>

      </div></br>


      <!-- display current payments -->
      <div class="w3-container ">
        <!--  datatable  start-->
        <div class="w3-responsive">
          <table id="paymentsTbl" class="w3-table w3-striped w3-bordered">
                <thead>
                  <tr>

                    <td>House number</td>
                    <td>Full name</td>
                    <td>Gender</td>
                    <td>National Id</td>
                    <td>Mobile number</td>
                    <td>Email</td>
                    <td>Registration date</td>
                    <td>Status</td>
                  </tr>
                </thead>
                <?php
                $query= "select * from tenants order by id desc";
                $result=mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)){
                  echo '<tr>
                            
                            <td>'.$row["house_number"].'</td>
                            <td>'.$row["fullname"].'</td>
                            <td>'.$row["gender"].'</td>
                            <td>'.$row["national_id"].'</td>
                            <td>'.$row["mobile_number"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["registration_date"].'</td>
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
