<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["username"]) ){
    header("location: login.php");

}
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


  <?php
  require '../../database/db.php';
   ?>

  <!-- Top container -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>

    <a href="logout.php"><span class="w3-bar-item w3-right">Logout <i class="fa fa-sign-out"></i></span></a>
    <span class="w3-bar-item w3-right">Logo</span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar  w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="images/img_avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong></span><br>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <a href="houses.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-building fa-fw"></i>  Houses</a>
      <a href="tenants.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Tenants</a>
      <a href="payments.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-credit-card fa-fw"></i>  Payments</a>
      <a href="invoices.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Invoices</a>
      <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a> -->
      <br><br>
    </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-blue w3-padding-16">
          <div class="w3-left"><i class="fa fa-building w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
            <?php
            $sql = 'select * from houses';
            $result = mysqli_query($con, $sql);
            $num_rows = mysqli_num_rows($result);
            echo $num_rows;
             ?>
            </h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Houses</h4>
        </div>
      </div>
      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-green w3-padding-16">
          <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3><?php
            $sql = 'select * from tenants';
            $result = mysqli_query($con, $sql);
            $num_rows = mysqli_num_rows($result);
            echo $num_rows;
             ?></h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Tenants</h4>
        </div>
      </div>
      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-orange w3-padding-16">
          <div class="w3-left"><i class="fa fa-credit-card w3-text-white w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3 class="w3-text-white"><?php
            // start of php invoice number calculation section
            $num_rows = 0;
            $query= "select * from payments ";
            $result=mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)){
              // if condition will check for balance
              if ($row["paid_amount"] < $row["expected_amount"]) {
                $num_rows = $num_rows + 1;
              }
            } echo $num_rows;
            // end of php invoice number calculation section
             ?>
           </h3>
          </div>
          <div class="w3-clear"></div>
          <h4 class="w3-text-white">Invoices</h4>
        </div>
      </div>
      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-red w3-text-white w3-padding-16">
          <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3><?php
          $sql = 'select * from payments';
          $result = mysqli_query($con, $sql);
          $num_rows = mysqli_num_rows($result);
          echo $num_rows;
           ?></h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Payments</h4>
        </div>
      </div>

      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-green w3-padding-16">
          <div class="w3-left"><i class="fa fa-briefcase w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
            <?php
            $paid_amounts_total = 0 ;
            $month = date("F", strtotime("-1 month"));
            $sql = "SELECT * from payments WHERE month='$month'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)){
              $paid_amounts_total = $row['paid_amount'] + $paid_amounts_total;
            }
            echo $paid_amounts_total;
             ?>
            </h3>
          </div>
          <div class="w3-clear"></div>
          <h4>  <?php echo date("F", strtotime("-1 month")); ?> amount paid</h4>
        </div>
      </div>

      <div class="w3-quarter w3-padding">
        <div class="w3-container w3-red w3-padding-16">
          <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
            <?php
            $diff_btwn_expected_paid_amount = 0 ;
            $sum_of_balance = 0;
            $month = date("F",strtotime("-1 month"));
            $sql = "SELECT * from payments WHERE month='$month'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)){
              $diff_btwn_expected_paid_amount = $row['expected_amount'] - $row['paid_amount'];
              $sum_of_balance = $diff_btwn_expected_paid_amount + $sum_of_balance;
            }
            echo "-". $sum_of_balance;
             ?>
            </h3>
          </div>
          <div class="w3-clear"></div>
          <h4> <?php echo date("F", strtotime("-1 month")); ?> Balances</h4>
        </div>
      </div>
    </div>


    <div class="w3-panel">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
          <div class="w3-card-4 w3-padding " >
            <header class="w3-container w3-pale-red">
              <h5>Payments not yet</h5>
            </header>

            <table class="w3-table w3-striped w3-border w3-white">
              <?php
              // this variable will hold value of the difference btwn expected_amount and paid_amount = balances
              $diff_btwn_expected_paid_amount = 0;
              $query= "SELECT * FROM payments WHERE expected_amount > paid_amount  ";
              $result=mysqli_query($con, $query);
              while ($row = mysqli_fetch_array($result)){
                // if ($row['expected_amount'] >  $row['paid_amount']) {
                $diff_btwn_expected_paid_amount = $row['expected_amount'] - $row['paid_amount'];
                ?>
                <tr>
                  <td> <i class="fa fa-home w3-text-blue w3-large"></i> <?php echo $row["house_number"]; ?></td>
                  <td> <i class="fa fa-credit-card w3-text-green w3-large"></i> - <?php echo $diff_btwn_expected_paid_amount; ?></td>
                </tr>
            <?php } ?>

            </table>

          </div>


        </div>

        <div class="w3-twothird">
          <div class="w3-card-4 w3-padding">
            <header class="w3-container w3-pale-green">
              <h5>Recent Payments</h5>
            </header>

            <table class="w3-table w3-striped w3-border w3-white">
              <?php
              $query= "SELECT * from payments order by id desc limit 5";
              $result=mysqli_query($con, $query);
              while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                  <td> <i class="fa fa-home w3-text-blue w3-large"></i> <?php $row["house_number"]; ?></td>
                  <td> <i class="fa fa-credit-card w3-text-green w3-large"></i> <?php echo $row["paid_amount"]; ?></td>
                </tr>
              <?php }  ?>

            </table><br>
            <a href="payments.php"<button class="w3-button w3-dark-grey">More Payments  <i class="fa fa-arrow-right"></i></button></a>
          </div>

        </div>
      </div>
    </div>
    <hr>

    <!-- <div class="w3-panel">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
          <h5>Regions</h5>
          <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
        </div>
        <div class="w3-twothird">
          <h5>Feeds</h5>
          <table class="w3-table w3-striped w3-white">
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td>New record, over 90 views.</td>
              <td><i>10 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
              <td>Database error.</td>
              <td><i>15 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
              <td>New record, over 40 users.</td>
              <td><i>17 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
              <td>New comments.</td>
              <td><i>25 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
              <td>Check transactions.</td>
              <td><i>28 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
              <td>CPU overload.</td>
              <td><i>35 mins</i></td>
            </tr>
            <tr>
              <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
              <td>New shares.</td>
              <td><i>39 mins</i></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>General Stats</h5>
      <p>New Visitors</p>
      <div class="w3-grey">
        <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
      </div>

      <p>New Users</p>
      <div class="w3-grey">
        <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
      </div>

      <p>Bounce Rate</p>
      <div class="w3-grey">
        <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
      </div>
    </div>
    <hr>

    <div class="w3-container">
      <h5>Countries</h5>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
          <td>United States</td>
          <td>65%</td>
        </tr>
        <tr>
          <td>UK</td>
          <td>15.7%</td>
        </tr>
        <tr>
          <td>Russia</td>
          <td>5.6%</td>
        </tr>
        <tr>
          <td>Spain</td>
          <td>2.1%</td>
        </tr>
        <tr>
          <td>India</td>
          <td>1.9%</td>
        </tr>
        <tr>
          <td>France</td>
          <td>1.5%</td>
        </tr>
      </table><br>
      <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Recent Users</h5>
      <ul class="w3-ul w3-card-4 w3-white">
        <li class="w3-padding-16">
          <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Mike</span><br>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Jill</span><br>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Jane</span><br>
        </li>
      </ul>
    </div>
    <hr>

    <div class="w3-container">
      <h5>Recent Comments</h5>
      <div class="w3-row">
        <div class="w3-col m2 text-center">
          <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">
        </div>
        <div class="w3-col m10 w3-container">
          <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
        </div>
      </div>

      <div class="w3-row">
        <div class="w3-col m2 text-center">
          <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">
        </div>
        <div class="w3-col m10 w3-container">
          <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
        </div>
      </div>
    </div>
    <br>
    <div class="w3-container w3-dark-grey w3-padding-32">
      <div class="w3-row">
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-green">Demographic</h5>
          <p>Language</p>
          <p>Country</p>
          <p>City</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-red">System</h5>
          <p>Browser</p>
          <p>OS</p>
          <p>More</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-orange">Target</h5>
          <p>Users</p>
          <p>Active</p>
          <p>Geo</p>
          <p>Interests</p>
        </div>
      </div>
    </div> -->

    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
      <h4>FOOTER</h4>
      <p>Powered by <a href="#" target="_blank">Alex</a></p>
    </footer>

    <!-- End page content -->
  </div>

  <script>
  // Get the Sidebar
  var mySidebar = document.getElementById("mySidebar");

  // Get the DIV with overlay effect
  var overlayBg = document.getElementById("myOverlay");

  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open() {
      if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
    } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
  }
  </script>

</body>
</html>
