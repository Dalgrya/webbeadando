<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<div class="container">
        <div class="log">
        <form action="./regUsers.php" method="post">
            <label>Felhasználónév:</label>
            <input name="username" type="username" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
            <label>Email:</label>
            <input name="email" type="email" class="form-control" placeholder="proba@proba.hu" aria-label="Username" aria-describedby="basic-addon1">
            <label> Jelszó:</label>
            <input name="pw" type="password" class="form-control" placeholder="123456" aria-label="Username" aria-describedby="basic-addon1">
        <button class="btn btn-primary me-md-2" type="submit">Regisztrálás</button>
        <a href="../index.php" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Log in</a>
        </form>
</body>
</html>