<?php require '../php/connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Photo Gallery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/photo.css">
  </head>
  <body>
    
    <div class="container admin-form">
    	<form method="post" action="../php/submit_category.php">
          <div class="form-group">
            <label for="categoryName">Category: </label>
            <input name="category" type="text" class="form-control" id="categoryName">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="./admin.php">
          	<button type="button" class="btn btn-primary">Back</button>
          </a>
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendors/jquery/jquery-slim.min.js"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>