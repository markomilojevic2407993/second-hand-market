<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'style-layout.php'; ?>
</head>
<body>
    <?php echo $user['name']; ?>
    <div>
        <a href="index.php">Home</a>
    </div>
    <div class=" vh-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="product.php" method="post">
                <input type="text" name="name" placeholder="name " required> <br><br>
                <input type="text" name="description" placeholder="description" required><br><br>
                <input type="number" name="price" placeholder="price"><br><br>
                <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
                <button type="submit">new product</button>
            </form>
        </div>
    </div>
</body>
</html>