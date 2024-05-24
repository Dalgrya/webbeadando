

<style>
    label {
        color: white;
    }
</style>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="./css/background.css">

</head>

<div class="container">
    <div class="box col-5 mx-auto  align-items-center">
    <body> 
    <div class="container">
        <div class="log ">
            <form action="./systems/log.php" method="post">
                <label for="username">Felhasználónév:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
                <label for="password">Jelszó:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="123456" aria-label="Password" aria-describedby="basic-addon1">
                <button class="btn btn-primary me-md-2" type="submit">Login</button>
            </form>
        </div>
    </div>


</body>



<body>
    <div class="container">
        <div class="reg ">
            <form action="./systems/reg.php" method="post">
                <label>Felhasználónév:</label>
                <input name="username" type="username" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
                <label>Email:</label>
                <input name="email" type="email" class="form-control" placeholder="proba@proba.hu" aria-label="Username" aria-describedby="basic-addon1">
                <label> Jelszó:</label>
                <input name="pw" type="password" class="form-control" placeholder="123456" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-primary me-md-2" type="submit">Regisztrálás</button>
            </form>
</body>

    </div>
</div>