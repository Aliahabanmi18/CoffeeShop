<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'];
    $category = $_POST['category'];
    $price    = $_POST['price'];

    $sql = "INSERT INTO products (name, category, price)
            VALUES ('$name', '$category', '$price')";
    mysqli_query($conn, $sql);

    header("Location: products.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>

<h1>Add Product</h1>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Category: <input type="text" name="category" required><br><br>
    Price: <input type="number" step="0.01" name="price" required><br><br>
    <button type="submit">Save</button>
</form>

</body>
</html>
