<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body class="jumbotron">

  <div class="container ">
    <div class="container">
      <h2>Houses</h2>
      <p>You can add a new house by clicking the new house button.</p>
      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">New house</button>
      <div id="demo" class="collapse hide">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <h2>Add new house</h2>
            </div>
            <div class="card-body">
              <div class="form-group">
                <h2>Add new house</h2>
                <form  action="" method="post">
                  <input class="form-control" type="text" name="housenumber" placeholder="housenumber" required> <br>
                  <textarea class="form-control" name="features" placeholder="features" rows="3" cols="80"></textarea> <br>
                  <input class="form-control" type="text" name="rent" placeholder="rent" > <br>
                  <select  class="form-control" name="status" >
                    <option value="vacant">vacant</option>
                    <option value="occupied">occupied</option>
                  </select>  <br>
                  <input class="btn btn-primary" type="submit" name="submit" value="Register">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="col-md-12 ">
        <div class="card">
          <div class="card-header">
            <h2>Add new house</h2>
          </div>
          <div class="card-body">
            <h2>Houses</h2>
            <p>This table shows all the houses registered.</p>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>House number</th>
                  <th>Features</th>
                  <th>Rent</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A1</td>
                  <td>2 bedroom , kitchen and bathroom </td>
                  <td>15000</td>
                  <td>Occupied</td>
                </tr>
                <tr>
                  <td>A2</td>
                  <td>2 bedroom , kitchen garden , bathroom and toilet separate</td>
                  <td>20000</td>
                  <td>Empty</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>




  </div>


</body>
</html>
