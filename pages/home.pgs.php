<?php


include_once("./includes/config.php");
include_once("./includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/main.css">
    <title><?= $title['home'] ?></title>
</head>
<body style="background-color: rgb(15,15,15);text-align: center;">



<!-- array meghívás-->
<div class="topnav">

 <form action="Logout.php" >
    <button type="submit">Log out</button>

 </form>
    <script src="logout.js"></script>
</div>

<h2>Érdekes és hasznos youtube videó:</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/ABGURyOP65g?si=JDGWx8WcO7P2Rkta" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</body>
</html>