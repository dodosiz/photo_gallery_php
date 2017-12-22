<?php 
    require '../../constants.php';
    $category_id = $_GET['category'];
    require LAYER_2.CONNECT_SERVICE.'connect.php'; 
    if(isset($_GET['success'])){
        if($_GET['success']=='true'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_GET['type'].' deleted successfully.';
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
  
  	<div class="container-fluid">
  	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navBar">
      <a class="navbar-brand" href="index.php">Photo Gallery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <?php echo '<a class="nav-link" href="'.LAYER_2.FORM_VIEW.'add_category_form.php?previous=categories&category='.$category_id.'">Add Category</a>' ?>
          </li>
          <li class="nav-item">
            <?php 
            echo '<a class="nav-link" href="'.LAYER_2.FORM_VIEW.'add_photo_form.php?category='.$category_id.'">Add Photo</a>' ?>
          </li>
        </ul>
      </div>
    </nav>
    </div>
  
    <div class="container content">
    	<?php 
    	
    	$res = $mysqli->query("SELECT * FROM photos WHERE category_id=".$_GET['category']);
    	
    	$_SESSION['category'] = $_GET['category'];
    	
    	while ($row = $res->fetch_assoc()) {
    	    $date_published = substr ( $row['published'] , 0, 10);
    	    echo '<div class="row photo-collection">';
        	    echo '<div class="col-sm">';
            	    echo '<img src="'.$row['directory_saved'].'" alt="'.$row['description'].'" class="img-fluid category-details-image">';
            	    echo '<div class="image-details">';
            	    echo '<h1 class="display-4">'.$row['title'].'</h1>';
            	    echo '<p class="lead">'.$row['description'].'<br />';
            	    echo '<small class="text-muted">Date published: '.$date_published.'</small>';
            	    echo '</p>';
            	    echo '<a href="'.LAYER_2.WARNING_VIEW.'delete_image.php?id='.$row['id'].'&category='.$_GET['category'].'"><button type="button" class="btn btn-danger delete-button">Delete Image</button></a>';
            	    echo '</div>';
        	    echo '</div>';
    	    echo '</div>';
    	}
    	echo '<hr>';
    	echo '<a href="'.LAYER_2.FORM_VIEW.'add_photo_form.php?category='.$category_id.'"><button type="button" class="btn btn-success">Add Photo</button></a>';
    	?>
    	<a href="../../index.php"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../vendors/jquery/jquery-slim.min.js"></script>
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>