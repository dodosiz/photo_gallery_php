<?php 
    require '../../constants.php';
    require LAYER_2.CONNECT_SERVICE.'connect.php'; 
    if(isset($_GET['success'])){
        if($_GET['success']=='true'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_GET['type'].' submitted successfully.';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Photo Gallery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/photo.css">
  </head>
  <body>
  
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../index.php">Photo Gallery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Admin <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container admin-pannel">
    	<?php echo '<a href="'.LAYER_2.FORM_VIEW.'add_category_form.php">' ?>
        	<button type="button" class="btn btn-primary btn-lg btn-block admin-options-button">Add a category</button>
        </a>
        <?php echo '<a href="'.LAYER_2.FORM_VIEW.'add_photo_form.php">' ?>
        	<button type="button" class="btn btn-primary btn-lg btn-block admin-options-button">Add a photo</button>
        </a>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../vendors/jquery/jquery-slim.min.js"></script>
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>