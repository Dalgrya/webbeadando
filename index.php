<?php
include_once('includes/config.inc.php');

$keres=$oldalak['/'];
if(isset($_GET['page'])){
    if(isset($oldalak[$_GET['page']]) && 
    file_exists("./pages/{$oldalak[$_GET['page']]['fajl']}.pgs.php")){
        $keres=$oldalak[$_GET['page']];
    }else {
        $keres=$hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }
    
}

include('./pages/index.pgs.php');

?>

