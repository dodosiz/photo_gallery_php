<?php
    $title = $description = $category = "";
    $error_message = "";
    $photo_message = "";
    $max_size_MB = 20;
    $max_size = $max_size_MB*(1024*1024); # 10 MB in bytes
    $form_validation = true;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        # title is required
        if(empty($_POST['title'])){
            $error_message = "* required";
            $form_validation = false;
        }else{
            $title = $_POST['title'];
        }
        
        # values which are not required
        if(!empty($_POST['description'])){
           $description = $_POST['description'];
        }
        
        if(!empty($_POST['category_name'])){
            $category = $_POST['category_name'];
        }
        
        if(empty($_FILES['photo'])){
            $photo_message = "Please upload an image first.";
            $form_validation = false;
        }
        
        # validate the image size
        if($_FILES['photo']['size']>$max_size){
            $photo_message = "Image should not be bigger than ".$max_size_MB." MB.";
            $form_validation = false;
        }
        
        # if the form is valid upload the data
        if($form_validation){
            $res = $mysqli->query("SELECT id FROM categories WHERE category_name='".$category."';");
            $row = $res->fetch_assoc();
            
            $uploaddir = '../../images/'.$category.'/';
            $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
            
            echo '<pre>';
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } else {
                echo "Possible file upload attack!\n";
            }
            
            if(!$mysqli->query("INSERT INTO photos (title,description,directory_saved,category_id)".
                " VALUES ('".$title."','".$description."','".$uploadfile."',".$row['id'].");")){
                echo "Operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
            
            header("Location: ../../index.php");
        }
    }
?>