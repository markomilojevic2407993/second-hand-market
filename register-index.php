<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php include 'style-layout.php'; ?>
</head>
<body>



    <div class=" vh-100 d-flex justify-content-center align-items-center flex-wrap"> 
    <h1 class="text-center">Registraton new account</h1>
        <div class=" d-flex justify-content-center container border border-4 ">
            <form action="controller/registrat.php" method="post">
                    <input type="text" name="name" placeholder="Marko Milojevic " required  size=40 class="form-control text-center m-2 h5"> <br>
                    <input type="password" name="pass" placeholder="12345678" required size=40 class="form-control text-center m-2 h5"><br>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-lg btn-primary" type="submit">new user</button>
                    </div>
            </form>
         </div>
     </div>
</body>
</html>