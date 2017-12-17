<?php
    require 'connect.php';
    
    $res = $mysqli->query("SELECT * FROM photos WHERE id=".$_GET['id'].";");
    $row = $res->fetch_assoc();
    
    unlink($row['directory_saved']);
    
    if(!$mysqli->query("DELETE FROM photos WHERE id=".$_GET['id'].";")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    header("Location: ../views/category_details.php?category=".$_GET['category']."&success=true&type=Photo");
    
?>