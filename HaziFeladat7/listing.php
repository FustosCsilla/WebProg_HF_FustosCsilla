<?php

require_once 'db_connect.php';

$sql = "SELECT * FROM products";

if (isset($conn)) {
    $results = $conn->query($sql);
    echo "<br>" . "<a href='insert.php'>New product</a>" . "<br><br>";
    
    if ($results->num_rows > 0){
        echo "<table border = '1'";
        while($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            $src = $row["image"];
            echo "<td><a href = \"update.php?id=" . $row["id"] ."\">Update</a></td>";
            echo "<td><a href = \"delete.php?id=" . $row["id"] ."\">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
        echo "Empty table!";
    }
    
    $conn->close();
}

