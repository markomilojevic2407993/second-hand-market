
<?php

include 'models/conn.php';

issetEmpty($_GET['id']);

$id = $_GET['id'];

$select = $conn->query("SELECT * FROM proizvod WHERE id=$id");
$product = $select->fetch_assoc();

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
            <form action="controller/update.php" method="get">
                <input type="text" name="name" value="<?php echo $product['name']; ?>" required> <br><br>
                <input type="text" name="description" value="<?php echo $product['description']; ?>" required><br><br>
                <input type="number" name="price" value="<?php echo $product['price']; ?>"><br><br>
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                 <input type="hidden" name="userId" value="<?php echo $user['id']; ?>"> 
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>