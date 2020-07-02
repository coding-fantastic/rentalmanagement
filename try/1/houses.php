
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

                    <td>House number</td>
                    <td>Features</td>
                    <td>Actions</td>
                    </tr>
                </thead>
                <?php
                $query= "SELECT * from houses order by id desc ";
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
                  <td><?php echo $row["house_number"]; ?></td>
                  <td><?php echo $row["features"]; ?></td>
                  <td>
                    <a href="update_house.php?id=<?php echo $row['id']; ?>" class="w3-btn w3-blue">Edit</a>
                    <!-- <a href="#" class="w3-btn w3-red">Delete</a> -->
                    <input type="button" class="w3-btn w3-red"  onclick="deleteme(<?php echo $row['id'] ?>)" name="Delete" value="Delete">

                  </td>
                </tr>


              <?php } ?>


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

    <!-- JavaScript function for deleting data -->
    <script type="text/javascript">
      function deleteme(delid){
        if(confirm("Press OK if you want to delete this record!")){
          window.location.href='delete.php?del_id='+delid;

          return true;
        }
      }

    </script>

  </body>
</html>
