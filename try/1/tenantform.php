<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'navbar.php';
     ?>
     <div class="w3-main" style="margin-left:100px;margin-top:43px;">
       <br>
       <div class="w3-container ">
         <form class="w3-container w3-card-4" action="tenantformConnect.php" method="post">
          <h2 class="w3-text-blue">New tenant</h2>
          <p>You can add a new payment on the form below.</p>
          <p>
          <label class="w3-text-blue"><b>Full name</b></label>
          <input class="w3-input w3-border" name="fullname" type="text" placeholder="Full name" ></p>
          <p>
          <label class="w3-text-blue"><b>Gender</b></label>
          <select class="w3-input w3-border" name="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </p>
          <p>
            <label class="w3-text-blue"><b>National ID</b></label>
            <input class="w3-input w3-border" name="national_id" type="text" placeholder="National ID" maxlength="8" ></p>
            <p>
            <label class="w3-text-blue"><b>Mobile number</b></label>
            <input class="w3-input w3-border" name="mobile_number" type="text" placeholder="mobile number" maxlength="12"></p>
            <p>
            <label class="w3-text-blue"><b>Email</b></label>
            <input class="w3-input w3-border" name="email" type="email" placeholder="Email" ></p>
            <p>
            <label class="w3-text-blue"><b>Registration date</b></label>
            <input class="w3-input w3-border" type="date" name="registration_date"> </p>
            <p>
            <label class="w3-text-blue"><b>House number</b></label>
            <input class="w3-input w3-border" name="housenumber" type="text" placeholder="House number" required></p>
          <p>
          <label class="w3-text-blue"><b>Status</b></label>
          <select class="w3-input w3-border" name="status" >
            <option value="Tenant In">Tenant In</option>
            <option value="Tenant Out">Tenant Out</option>
          </select>
          </p>

          <p>
          <button class="w3-btn w3-blue">Register</button></p>
        </form>
       </div><br>


      </div>

  </body>
</html>
