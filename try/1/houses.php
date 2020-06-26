
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>

      <?php
        if (isset($_SESSION['message'])) {
          ?>
          <div class="w3-panel w3-pale- <?php $_SESSION['msg_typ']  ?> w3-border">
            <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);

             ?>
          </div>
        <?php } ?>



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
                    <td>Actions</td>
                    </tr>
                </thead>
                <?php
                $query= "select * from houses ";
                $result=mysqli_query($con, $query);

                // to check an array use this
                // pre_r($result);
                // eg pre_r(mysqli_fetch_array($result));
                // a function to print an array in a readable format
                // function pre_r($array)
                // {
                //   echo "<pre>";
                //   print_r($array);
                //   echo "</pre>";
                // }
                while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["house_number"]; ?></td>
                  <td><?php echo $row["features"]; ?></td>
                  <td><?php echo $row["status"]; ?></td>
                  <td>
                    <a href="update_house.php?id=<?php echo $row['id']; ?>" class="w3-btn w3-blue">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="w3-btn w3-red">Delete</a>
                  </td>
                </tr>
              <?php } ?>
                  <!-- echo '<tr>
                          <td>'.$row["id"].'</td>
                          <td>'.$row["house_number"].'</td>
                          <td>'.$row["features"].'</td>
                          <td>'.$row["status"].'</td>';

                          echo "<td>";
                          echo ' <a href="#"
                           class=""><button class="w3-btn w3-blue">edit</button></a>&nbsp';
                          echo "<a href='#' class=''><button class='w3-btn w3-red'>delete</button></a>";
                          echo "</td>";
                        echo '</tr>'; -->

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
