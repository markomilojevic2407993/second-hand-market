<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'style-layout.php'; ?>
</head>
<body>
    <div class="bg-info" >
        <a class="bg-dark text-white h1  vw-15" href="register-index.php" type="button">Register</a>
    </div>
    <div class="vh-100 vw-100 bg-info d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-items-center ">
            <form action="controller/login.php" method="post">
                <input type="text" name="name" required placeholder="your name" size="60" class="text-center h3"><br>
                <input type="text" name="pass" required placeholder="your pass" size="60" class="text-center h3"><br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-secondary">Login</button>
                </div>
            </form>
        </div>
     </div>
</body>
</html>