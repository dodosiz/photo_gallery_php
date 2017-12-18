<?php
    $res = $mysqli->query("SELECT * FROM categories;");
    
    while ($row = $res->fetch_assoc()) {
        echo '<option value=' . $row['category_name'] . '>' . $row['category_name'] . '</option>';
    }
?>