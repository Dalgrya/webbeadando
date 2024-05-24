<?php 

$dbServerName = 'localhost';
$dbUserName = 'dalgrya';
$dbPassword = 'Seria-123';
$dbName = 'dalgrya';



$title=array(
    'home' => "DalgryaxEnterghost  | HOME",
    'con' => "DalgryaxEnterghost | CONTACT",
    'Dalgrya' => "DalgryaxEnterGhost | Dalgrya",
    'DalgryaGallery' => "DalgryaxEnterGhost | DGallery",
    'DalgryaGame' => "DalgryaxEnterGhost| DGame",
    'Enterghost' => "DalgryaxEnterGhost | EnterGhost",
    'EnterGhostGallery'=>"DalgryaxEnterGhost | EGGallery",
    
);

$oldalak=array(
    '/'=> array('fajl'=>'home','szoveg'=>'home','menun'=>array(1,1)),
    'dalgrya'=> array('fajl'=>'dalgrya','szoveg'=>'dalgrya','menun'=>array(1,1)),
    'enterghost'=> array('fajl'=>'enterghost','szoveg'=>'enterghost','menun'=>array(1,1)),
    'contact'=> array('fajl'=>'contact','szoveg'=>'contact','menun'=>array(1,1)),
    'user'=> array('fajl'=>'user','szoveg'=>'user','menun'=>array(1,1)),
)
;

$hiba_oldal = array(
        'fajl'=>'404','szoveg'=>'Not found this page! Please try again later!'
);

function is_logged_in(){
    return $_SESSION['username'];
}

$conn = new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);
if($conn->connect_error){
    die("Csatlakozási problémák: ".$conn->connect_error);
}


?>