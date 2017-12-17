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
  
  
    <div class="card border-danger mb-3 delete-message" style="max-width: 20rem;">
      <div class="card-header">Delete Image</div>
      <div class="card-body text-danger">
        <p class="card-text">Are you sure you want to delete this image?</p>
        <div class="modal-button-group">
        <?php 
            echo '<a href="../php/delete_image_proccess.php?category='.$_GET['category'].'&id='. $_GET['id'].'">';
            echo	'<button type="button" class="btn btn-danger">Yes</button>';
            echo '</a>';
            echo '<a href="category_details.php?category='.$_GET['category'].'">';
            echo	'<button type="button" class="btn btn-secondary">No</button>';
            echo '</a>';
         ?>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendors/jquery/jquery-slim.min.js"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>