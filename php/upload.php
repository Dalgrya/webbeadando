<?php
$target_dir = "uploads/"; // A feltöltött fájlok mappája
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Ellenőrizzük, hogy a fájl egy kép-e vagy sem
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "A fájl egy kép - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "A fájl nem egy kép.";
        $uploadOk = 0;
    }
}

// Ellenőrizzük, hogy a fájl már létezik-e
if (file_exists($target_file)) {
    echo "Sajnáljuk, ez a fájl már létezik.";
    $uploadOk = 0;
}

// Ellenőrizzük a fájl méretét
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sajnáljuk, a fájl túl nagy.";
    $uploadOk = 0;
}

// Engedélyezzük bizonyos fájltípusokat
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sajnáljuk, csak JPG, JPEG, PNG és GIF fájlokat lehet feltölteni.";
    $uploadOk = 0;
}

// Ha minden ellenőrzés sikeres, feltöltjük a fájlt
if ($uploadOk == 0) {
    echo "Sajnáljuk, a fájl nem lett feltöltve.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "A fájl ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " sikeresen feltöltve.";
    } else {
        echo "Sajnáljuk, hiba történt a fájl feltöltése közben.";
    }
}
?>