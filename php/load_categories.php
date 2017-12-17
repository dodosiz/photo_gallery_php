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
    
    while ($row = $res->fetch_assoc()) {
        /*echo '<div class="row">';
            echo '<div class="col-8">';
                echo '<a href="./views/category_details.php?category='. $row['id'] .'">';
                echo '<button type="button" class="btn btn-primary btn-lg btn-block category-button">' . $row['category_name'] . '</button>';
                echo '</a>';
            echo '</div>';
        echo '</div>';*/
        echo '<tr>';
            echo '<td>'.$row['category_name'].'</td>';
            echo '<td><a href="./views/category_details.php?category='. $row['id'] .'"><button type="button" class="btn btn-primary">View</button></a></td>';
            echo '<td><a href="./views/delete_category.php?category='. $row['id'] .'"><button type="button" class="btn btn-danger">Delete</button></a></td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
?>  