<?php
include 'models/conn.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
$idUser = $user['id'];

$sql = query("SELECT proizvod.* FROM user INNER JOIN proizvod ON proizvod.userId=user.id WHERE user.id=$idUser ");
$result = $sql->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <div class="d-flex justify-content-between">
        <nav>
            <ul class="nav">
                <li class="nav-items"><a class="nav-link" href="index.php">Home</a></li>
            </ul>
            <hr>
        </nav>
        <div class="d-flex">
            <p class="h5"><?php echo $user['name']; ?></p><br>
            <p><a href="unlogin.php">unlogin</a></p>
            
        </div>
    </div>
    <div class="container vw-25">
        <?php foreach ($result as $predmet) { ?>
        <div class="border border-2">
            <p class="text-center h3"><?php echo $predmet['name']; ?></p>
            <p class="text-center"><?php echo $predmet['description']; ?></p>
            <p class="fw-bold"><?php echo $predmet['price']; ?></p>
        </div>
        <?php }?>
    </div>
</body>
</html>