<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('Location:login-index.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo $user['name'];
        echo '<br>'."<a href='unlogin.php'>".'unlogin</a>';
        echo '<br>'."<a href='profil.php'>".'Profil</a>';
    }

?>
       
        
    
    
    <hr>


    <form action="product.php" method="post">
        <input type="text" name="name" placeholder="name " required> 
        <input type="text" name="description" placeholder="description" required>
        <input type="number" name="price" placeholder="price">
        <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
        <button type="submit">new product</button>
    </form>
</body>
</html>