
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <a href="login.php">Login</a>
    <form action="controller/registrat.php" method="post">
        <input type="text" name="name" placeholder="unesi svoje ima " required> 
        <input type="text" name="pass" placeholder="unesi svoj password" required>
        <button type="submit">Unesi podatke u bazu</button>
    </form>
    <hr>


    <form action="product.php" method="post">
        <input type="text" name="name" placeholder="name " required> 
        <input type="text" name="description" placeholder="description" required>
        <input type="number" name="price" placeholder="price">
        <input type="hidden" name="userId" value="1">
        <button type="submit">new product</button>
    </form>
</body>
</html>