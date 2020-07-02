
    <?php
      include 'navbar.php';
     ?>
     <div class="w3-main" style="margin-left:100px;margin-top:43px;">
       <br>
       <div class="w3-container ">
         <form class="w3-container w3-card-4" action="houseformConnect.php" method="post">
          <h2 class="w3-text-blue">New house</h2>
          <p>You can add a house on the form below.</p>
          <p>
          <label class="w3-text-blue"><b>House number</b></label>
          <input class="w3-input w3-border" name="housenumber" type="text" placeholder="A1" required></p>
          <p>
          <label class="w3-text-blue"><b>Features</b></label>
          <textarea class="w3-input w3-border" name="features" placeholder="Features" rows="3" cols="80" ></textarea></p>
          <!-- <p>
          <label class="w3-text-blue"><b>Status</b></label>
          <select class="w3-input w3-border" name="status" >
            <option value="Vacant">Vacant</option>
            <option value="Occupied">Occupied</option>
          </select>
          </p> -->
          <p>
          <button class="w3-btn w3-blue">Register</button></p>
        </form>
       </div><br>


      </div>

  </body>
</html>
