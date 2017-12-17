<?php
    require './connect.php';
    
    if(!$mysqli->query("INSERT INTO categories (category_name) VALUES ('".$_POST['category']."');")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    mkdir("../images/".$_POST['category'], 0700);
    
    header("Location: ../views/admin.php?success=true&type=Category");
?>