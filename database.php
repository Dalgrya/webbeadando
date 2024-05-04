<?php

try {
    $conn = new mysql("localhost","root","gyak")

    if($conn-> connect_error)
    {
echo"Hiba a szerverhez"
    }
} catch (\Throwable $th) {
    //throw $th;
}
