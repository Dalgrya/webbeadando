<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
    <div class="container">
        <div class="log">
        <form action="" method="post">
            <label>Felhasználónév:</label>
            <input type="username" class="form-control" placeholder="dickmaster" aria-label="Username" aria-describedby="basic-addon1">
            <label> Jelszó:</label>
            <input type="password" class="form-control" placeholder="123456" aria-label="Username" aria-describedby="basic-addon1">
        <button class="btn btn-primary me-md-2" type="button">LogIn</button>
        <a href="./php/reg.php" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Regisztráció</a>
        </form>
       
        </div>
</div>


</body>
</html>
