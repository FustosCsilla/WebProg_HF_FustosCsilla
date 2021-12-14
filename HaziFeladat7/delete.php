<?php

require_once 'db_connect.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM products
            WHERE id=$id";
    
    if(isset($conn)) {
        if ($conn->query($sql)) {
            header("Location: listing.php");
        }
        else {
            echo $conn->error;
        }
    }
}

