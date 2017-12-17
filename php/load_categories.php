<?php
    $res = $mysqli->query("SELECT * FROM categories;");
    
    while ($row = $res->fetch_assoc()) {
        echo '<a href="./views/category_details.php?category='. $row['id'] .'">';
        echo '<button type="button" class="btn btn-primary btn-lg btn-block category-button">' . $row['category_name'] . '</button>';
        echo '</a>';
    }
?>