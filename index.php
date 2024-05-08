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
        <form action="./php/login.php" method="post">
    <label for="username">Felhasználónév:</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
    <label for="password">Jelszó:</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="123456" aria-label="Password" aria-describedby="basic-addon1">
    <button class="btn btn-primary me-md-2" type="submit">Login</button>
    <a href="./php/reg.php" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Regisztráció</a>

    
</form>
       
        </div>
</div>


</body>
</html>
