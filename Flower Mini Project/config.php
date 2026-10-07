<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "shop_db";
$conn = "";

$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass,
                       $db_name,);

    if($conn->connect_error) {
        die("connection failed: ". $conn-> connect_error);
}

?>