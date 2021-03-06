<?php 
    require '../php/connect.php'; 
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
    <link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/photo.css">
  </head>
  <body>
  
    <div class="container">
    	<?php 
    	
    	$res = $mysqli->query("SELECT * FROM photos WHERE category_id=".$_GET['category']);
    	
    	while ($row = $res->fetch_assoc()) {
    	    $date_published = substr ( $row['published'] , 0, 10);
    	    echo '<div class="row photo-collection">';
        	    echo '<div class="col-sm">';
            	    echo '<img src="'.$row['directory_saved'].'" alt="'.$row['description'].'" class="img-fluid">';
            	    echo '<div class="image-details">';
            	    echo '<a href="./delete_image.php?id='.$row['id'].'&category='.$_GET['category'].'"><button type="button" class="btn btn-danger delete-button">Delete</button></a>';
                	    echo '<h1 class="display-4">'.$row['title'].'</h1>';
                	    echo '<p class="lead">'.$row['description'].'<br />';
                	    echo '<small class="text-muted">Date published: '.$date_published.'</small>';
                	    echo '</p>';
            	    echo '</div>';
        	    echo '</div>';
    	    echo '</div>';
    	}
    	?>
    	<a href="../index.php"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendors/jquery/jquery-slim.min.js"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>