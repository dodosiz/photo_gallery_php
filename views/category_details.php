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
  
    <div class="container">
    	<?php 
    	$res = $mysqli->query("SELECT category_name FROM categories WHERE id=".$_GET['category'].";");
    	echo "You are viewing category ";
    	$row = $res->fetch_assoc();
    	echo $row['category_name'];
    	echo '<br />';
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