<?php
$mysqli = new mysqli("127.0.0.1", "theo", "jijikos", "photo");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
