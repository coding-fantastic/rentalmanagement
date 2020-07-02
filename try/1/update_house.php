
    <?php
      include 'navbar.php';
     ?>
     <?php
     $id = trim($_REQUEST['id']);

     $query= "select * from houses ";
     $result=mysqli_query($con, $query);
     while ($row = mysqli_fetch_array($result)){
       if ($id == $row["id"]) {
         $house_number = $row["house_number"];
         $features = $row["features"];
         $status = $row["status"];
         break;
       }
     }

      ?>
     <div class="w3-main" style="margin-left:100px;margin-top:43px;">
       <br>
       <div class="w3-container ">
         <form class="w3-container w3-card-4" action="update_house_connect.php" method="post">
          <h2 class="w3-text-blue">Update a house</h2>
          <p>You can update a house on the form below.</p>
          <p>
          <label class="w3-text-blue"><b>ID</b></label>
          <small class="w3-text-blue">This is a read only field</small>
          <input class="w3-input w3-border" name="id" type="text"  value="<?php echo $id ?>" readonly></p>
          <p>
          <label class="w3-text-blue"><b>House number</b></label>
          <input class="w3-input w3-border" name="housenumber" type="text" value="<?php echo $house_number ?>"></p>
          <p>
          <label class="w3-text-blue"><b>Features</b></label>
          <input class="w3-input w3-border" name="features" type="text" value="<?php echo $features ?>"></p>
          <!-- <p>
          <label class="w3-text-blue"><b>Status</b></label>
          <select class="w3-input w3-border" name="status" value="<?php echo $status ?>">
            <option value="Vacant">Vacant</option>
            <option value="Occupied">Occupied</option>
          </select>
          </p> -->
          <p>
          <button class="w3-btn w3-blue">Update</button></p>
        </form>
       </div><br>

       <div class="w3-container">

       </div>


      </div>


  </body>
</html>
