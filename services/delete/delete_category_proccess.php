<?php
    require '../../constants.php';
    require LAYER_2.CONNECT_SERVICE.'connect.php';
    
    $res = $mysqli->query("SELECT * FROM categories WHERE id=".$_GET['category'].";");
    $row = $res->fetch_assoc();
    
    # function to remove all files in a directory
    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
        
        if (!is_dir($dir)) {
            return unlink($dir);
        }
        
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
            
        }
        
        return rmdir($dir);
    }
    
    deleteDirectory('../../images/'.$row['category_name'].'/');
    
    if(!$mysqli->query("DELETE FROM categories WHERE id=".$_GET['category'].";")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    header("Location: ../../index.php?success=true&type=Category&action=deleted");
    
?>