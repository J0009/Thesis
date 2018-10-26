<?php
$link=mysqli_connect("localhost","root","","psu");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
    echo "open apache and mysql in xampp";
}
?>