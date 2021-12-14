<?php

require_once 'db_connect.php';

if (isset($_POST["submit"])){
    if (isset($conn)){
        $title = $_POST["title"];
        $price = $_POST["ar"];
        $category = $_POST["category"];
        $image= isset($_FILES["image"]["tmp_name"]) ? $_FILES["image"]["tmp_name"] : "";
        
        if (isset($_POST["submit"])){
            if (isset($conn)){
                $sql = "INSERT INTO products (title, price, category, image)
                        VALUES ('$title', '$price', '$category', '$image')";
                if ($conn->query($sql)){
                    echo "Success!";
                    echo "<a href='listing.php'>Listing</a>";
                    $conn->close();
                }
                else{
                    echo "Error: " . $conn->error;
                }
            }
        }
    }
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    Title: <input type="Text" name="title">
    <br>
    Price: <input type="Text" name="price">
    <br>
    Category: <input type="Text" name="category">
    <br>
    Image: <input type="file" name="image" accept="image/png, image/jpeg">
    <br>
    <input type="Submit" name="submit" value="Add">
</form>