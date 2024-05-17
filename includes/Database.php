<?php

try {
    $conn = new mysqli("localhost","root","","gyak");

    if($conn-> connect_error){
        echo"Hiba a szerverhez csatlakozáskor!";
    }
} catch (PDOException $ex) {
    echo"Hiba::".$ex->getMessage();
}

?>