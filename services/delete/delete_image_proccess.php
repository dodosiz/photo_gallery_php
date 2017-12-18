<?php
    require '../../constants.php';
    require LAYER_2.CONNECT_SERVICE.'connect.php';
    
    $res = $mysqli->query("SELECT * FROM photos WHERE id=".$_GET['id'].";");
    $row = $res->fetch_assoc();
    
    unlink($row['directory_saved']);
    
    if(!$mysqli->query("DELETE FROM photos WHERE id=".$_GET['id'].";")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    header("Location: ".LAYER_2.PAGE_VIEW."category_details.php?category=".$_GET['category']."&success=true&type=Photo");
    
?>