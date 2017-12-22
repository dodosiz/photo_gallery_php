<?php
    $res = $mysqli->query("SELECT * FROM categories;");
    
    echo '<table class="table">';
    echo '<thead>';
        echo '<tr>';
            echo '<th scope="col">Category Name</th>';
            echo '<th scope="col">View</th>';
            echo '<th scope="col">Delete</th>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    # the category rows
    while ($row = $res->fetch_assoc()) {
        echo '<tr>';
            echo '<td>'.$row['category_name'].'</td>';
            echo '<td><a href="'.PAGE_VIEW.'category_details.php?category='. $row['id'] .'"><button type="button" class="btn btn-primary">View</button></a></td>';
            echo '<td><a href="'.WARNING_VIEW.'delete_category.php?category='. $row['id'] .'"><button type="button" class="btn btn-danger">Delete</button></a></td>';
        echo '</tr>';
    }
    
    # the add category button
    echo '<tr>';
        echo '<td><a href="'.FORM_VIEW.'add_category_form.php?previous=index"><button type="button" class="btn btn-success">Add Category</button></a></td>';
        echo '<td></td>';
        echo '<td></td>';
    echo '</tr>';
    
    echo '</tbody>';
    echo '</table>';
?>  