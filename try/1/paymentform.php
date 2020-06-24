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
         <form class="w3-container w3-card-4" action="/action_page.php">
          <h2 class="w3-text-blue">Input Form</h2>
          <p>Use any of the w3-text-color classes to color your labels.</p>
          <p>
          <label class="w3-text-blue"><b>House number</b></label>
          <input class="w3-input w3-border" name="house_number" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Year</b></label>
          <input class="w3-input w3-border" name="year" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Month</b></label>
          <input class="w3-input w3-border" name="month" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>expected_amount</b></label>
          <input class="w3-input w3-border" name="expected_amount" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Paid amount</b></label>
          <input class="w3-input w3-border" name="paid_amount" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Comments</b></label>
          <input class="w3-input w3-border" name="comments" type="text"></p>
          <p>
          <button class="w3-btn w3-blue">Register</button></p>
        </form>
       </div><br>


      </div>

  </body>
</html>
