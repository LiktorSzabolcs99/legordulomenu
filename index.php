<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dependent Select Box</title>
<link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>

  </head>
  <body>
    <div class="container">
<div class="row">
  <div class="col-md-4" style=" float: none;
    margin: 0 auto">
    <h1 class="text-center">Dependent Select Box</h1>

<form class="text-center">
    <div class="form-group">
      <label>Válaszd ki a márkát</label>
      <select class="form-control" id="marka">
        <option>Válaszd ki a márkát</option>
        <?php
        include ('connect.php');
        $query = "SELECT * FROM marka"
        $do = mysqli_query($conn);
        ?>

      </select>
      <br>
      <label>Válaszd ki a típust</label>
       <select class="form-control" id="tipus">
        <option>Válaszd ki a típust</option>
      </select>
    </div>
  </form>

</div>
    </div>
</div>
 
  </body>
</html>