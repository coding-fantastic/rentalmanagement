<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Payments Form</title>

  </head>
  <body class="w3-light-grey">
    <!-- start of navbar -->
    <?php
    include 'navbar.php';
      ?>
    <!-- end of navbar -->

    <!-- modal div -->
    <div class="w3-col m3 w3-green">
      <!-- Trigger/Open the Modal -->
      <button onclick="document.getElementById('id01').style.display='block'"
      class="w3-button">Open Modal</button>

      <!-- The Modal -->
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <p>Some text in the Modal..</p>
            <p>Some text in the Modal..</p>
          </div>
        </div>
      </div>


    </div>

    <!-- display current payments -->
    <div class="w3-panel">


    </div>

    <div class="w3-container">
      <div class="w3-row">
        <!-- order of screen size in w3 small screen , medium and large  -->
        <div class="w3-col m10 l5 w3-green">
          <p>This is an outer div</p>
          <div class="w3-col m6 l4 w3-blue">
            <p>this is an inner div</p>

          </div>

        </div>

      </div>

    </div>

    <script type="text/javascript">


    </script>

  </body>
</html>
