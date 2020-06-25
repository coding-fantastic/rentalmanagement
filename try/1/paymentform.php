
    <?php
      include 'navbar.php';
     ?>
     <div class="w3-main" style="margin-left:100px;margin-top:43px;">
       <br>
       <div class="w3-container ">
         <form class="w3-container w3-card-4" action="paymentsformConnect.php" method="post">
          <h2 class="w3-text-blue">New payment</h2>
          <p>You can add a new payment on the form below.</p>
          <p>
          <label class="w3-text-blue"><b>House number</b></label>
          <input class="w3-input w3-border" name="housenumber" type="text" placeholder="A1" required></p>
          <p>
          <label class="w3-text-blue"><b>Year</b></label>
          <select class="w3-input w3-border" name="year" >
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
          </select>
        </p>
          <p>
          <label class="w3-text-blue"><b>Month</b></label>
          <select class="w3-input w3-border" name="month" >
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
          </p>
          <p>
          <label class="w3-text-blue"><b>Expected amount</b></label>
          <input class="w3-input w3-border" name="expected_amount" placeholder="5000" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Paid amount</b></label>
          <input class="w3-input w3-border" name="paid_amount" placeholder="5000" type="text"></p>
          <p>
          <label class="w3-text-blue"><b>Comments</b></label>
          <textarea class="w3-input w3-border" name="comments" placeholder="comments" rows="3" cols="80" ></textarea></p>
          <p>
          <button class="w3-btn w3-blue">Register</button></p>
        </form>
       </div><br>


      </div>

  </body>
</html>
