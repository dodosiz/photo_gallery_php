<?php 
    require './constants.php';
    require CONNECT_SERVICE.'connect.php'; 
    if(!file_exists('./images/')){
        mkdir('./images/');
    }
    
    # success message
    if(isset($_GET['success'])){
        if($_GET['success']=='true'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_GET['type'].' '.$_GET['action'].' successfully.';
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
    <link rel="stylesheet" href="./vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/photo.css">
  </head>
  <body>
  
  	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navBar">
      <a class="navbar-brand" href="index.php">Photo Gallery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <?php echo '<a class="nav-link" href="'.FORM_VIEW.'add_category_form.php?previous=index">Add Category</a>' ?>
          </li>
        </ul>
      </div>
    </nav>
  
    <div class="container content">
    	<?php require LOAD_SERVICE.'load_categories.php';?>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./vendors/jquery/jquery-slim.min.js"></script>
    <script src="./vendors/popper/popper.min.js"></script>
    <script src="./vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>