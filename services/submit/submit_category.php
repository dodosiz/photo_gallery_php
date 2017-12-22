<?php
    require '../../constants.php';
    require LAYER_2.CONNECT_SERVICE.'connect.php';
    
    if(!$mysqli->query("INSERT INTO categories (category_name) VALUES ('".$_POST['category']."');")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    mkdir("../../images/".$_POST['category'], 0700);
    
    header("Location: ../../index.php?success=true&type=Category&action=created");
?>