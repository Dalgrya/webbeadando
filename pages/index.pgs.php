<?php session_start();



if(file_exists('./systems'.$keres['fajl'].'.php')) {
    include_once("./systems/{$keres['fajl']}.php");
                      
}


include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>
<head>
    <link rel="stylesheet" href="./css/background.css" >
    <title><?= $title['home']; ?></title>
</head>



<div class="content">
    <?php include_once("./pages/{$keres['fajl']}.pgs.php"); ?>
</div>

