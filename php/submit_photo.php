<?php
    require 'connect.php';

    echo $_POST['title'].'<br/>';
    echo $_POST['category_name'].'<br/>';
    echo $_POST['description'].'<br/>';
    
    $res = $mysqli->query("SELECT id FROM categories WHERE category_name='".$_POST['category_name']."';");
    $row = $res->fetch_assoc();
    
    $uploaddir = '../images/'.$_POST['category_name'].'/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    
    if(!$mysqli->query("INSERT INTO photos (title,description,directory_saved,category_id)".
        " VALUES ('".$_POST['title']."','".$_POST['description']."','".$uploadfile."',".$row['id'].");")){
        echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    header("Location: ../views/admin.php?success=true&type=Photo");
    
?>