<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Inventory Management System</h1>

        <section id="add-product">
            <h2>Add Product</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="name" placeholder="Product Name" required>
                <input type="number" name="quantity" placeholder="Quantity" required>
                <button type="submit">Add Product</button>
            </form>
        </section>

        <section id="display-products">
            <h2>Products</h2>
            <?php include 'display_products.php'; ?>
        </section>
    </div>
</body>
</html>