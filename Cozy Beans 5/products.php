<?php
require 'db.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>

<h1>Products</h1>

<a href="add_product.php">Add Product</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['category']; ?></td>
            <td><?= $row['price']; ?></td>
            <td>
                <a href="edit_product.php?id=<?= $row['id']; ?>">Edit</a> |
                <a href="delete_product.php?id=<?= $row['id']; ?>"
                   onclick="return confirm('Delete this product?');">
                    Delete
                </a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
