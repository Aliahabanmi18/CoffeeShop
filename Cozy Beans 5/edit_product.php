<?php
require 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$product = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'];
    $category = $_POST['category'];
    $price    = $_POST['price'];

    $sql = "UPDATE products
            SET name='$name', category='$category', price='$price'
            WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: products.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form method="post">
    Name: <input type="text" name="name" value="<?= $product['name']; ?>" required><br><br>
    Category: <input type="text" name="category" value="<?= $product['category']; ?>" required><br><br>
    Price: <input type="number" step="0.01" name="price" value="<?= $product['price']; ?>" required><br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>

