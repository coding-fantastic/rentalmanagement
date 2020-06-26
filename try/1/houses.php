
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>

      <!-- this php section checks if update was successfully updated -->
      <?php
        if (isset($_REQUEST['id'])) {
          if ($_REQUEST['id'] == 1) {

          ?>
          <br>
          <div class="w3-panel w3-pale-green w3-border">
            <p> Record updated </p>
          </div>
        <?php
      }
    }?>

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
                    <!-- <a href="#" class="w3-btn w3-red" onclick="document.getElementById('id01').style.display='block'">Delete</a> -->
                  </td>
                </tr>

                <!-- <div id="id01" class="w3-modal">
                  <div class="w3-modal-content w3-card-4">
                    <header class="w3-container w3-teal">
                      <span onclick="document.getElementById('id01').style.display='none'"
                      class="w3-button w3-display-topright">&times;</span>
                      <h2>Modal Header</h2>
                    </header>
                    <div class="w3-container">
                      <p>Do you want to delete this item? </p>
                    </div>
                    <footer class="w3-container">
                      <p>Modal Footer</p>
                      <a href="houses.php" class="w3-btn w3-blue">No</a>
                      <a href="#" class="w3-btn w3-red">Yes</a>

                    </footer>
                  </div>
                </div> -->

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

    <!-- <script>
      $(document).ready(function() {
        $('#delmodal').modal('show');
      });

    </script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

  </body>
</html>
