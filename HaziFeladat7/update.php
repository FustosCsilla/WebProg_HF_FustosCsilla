<?php

require_once 'db_connect.php';

if (isset($conn)) {
    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $price = $_POST["price"];
        $category = $_POST["category"];
        $image = $_FILES["image"]["tmp_name"];
        $id = $_POST["id"];

        $sql = "ÜPDATE products SET title = '$title', price='$price', category='$category', image='$image' WHERE id = '$id'";
        $results = $conn->query($sql);

        if ($results === true) {
            header("Location: listing.php");
        }
        else {
            echo "Error: " . $conn->error();
        }
    }
    else {
            $id = $_GET['id'];
            $sql = "SELECT * FROM products WHERE id =" . $id;
            $results = $conn->query($sql);
            $row = $results->fetch_assoc();
            $conn->close();
        }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    Title: <input type="Text" name="title" value="<?php echo $row["title"]; ?>">
    <br>
    Price: <input type="Text" name="price" value="<?php echo $row["price"]; ?>">
    <br>
    Category: <input type="Text" name="category" value="<?php echo $row["category"]; ?>">
    <br>
    Image: <input type="file" name="image" accept="image/png, image/jpeg" value="<?php echo $row["image"]; ?>">
    <br>
    <input type="Submit" name="submit" value="Update">
</form>