<?php
include 'navbar.php';
 ?>

 <!-- !PAGE CONTENT! -->
 <div class="w3-main" style="margin-left:100px;margin-top:43px;">
  <br>
  <div class="w3-container ">

   <p><h3>invoices</h3></p>
   <table id="paymentsTbl" class="w3-table w3-striped w3-bordered">
         <thead>
           <tr>
             <td>House number</td>
             <td>Balance</td>
             <td>Expected amount </td>
             <td>Paid amount</td>
             <td>Year</td>
             <td>Month</td>
             </tr>
         </thead>
         <?php
         $query= "select * from payments ";
         $result=mysqli_query($con, $query);
         while ($row = mysqli_fetch_array($result)){
           // if condition will check for balance
           if ($row["paid_amount"] < $row["expected_amount"]) {
             echo '<tr>
                     <td>'.$row["house_number"].'</td>' ;
                     echo '<td>';
                     echo  $row["expected_amount"]- $row["paid_amount"] ;
                     echo '</td>';
                     echo  '<td>'.$row["expected_amount"].'</td>
                     <td>'.$row["paid_amount"].'</td>
                     <td>'.$row["year"].'</td>
                     <td>'.$row["month"].'</td>

                    </tr>';
           }

         }
          ?>
   </table>

  </div>
</div>

<script>
  $(document).ready(function() {
    $('#paymentsTbl').DataTable();
  } );

</script>

</body>
</html>
