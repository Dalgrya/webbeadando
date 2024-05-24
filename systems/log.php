<?php
//include_once('./includes/header.php');
//session_start();

//Adatbázis meghívása:
include_once("../includes/config.inc.php");

//Login fülről adatok bekérése:
if(isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Felhasználó ellenőrzése az adatbázisban
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    //Ellenőrizzük a Jelszót (Adatbázisból is)
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['pw'])) {
            // Sikeres bejelentkezés
            $_SESSION['username'] = $row['username'];
            // Redirect to home page
            header("Location: ../pages/index.pgs.php"); 
            exit;
        } else {
            // Hibás jelszó

            echo var_dump(include_once("./includes/config.inc.php"));//"<script>alert('Hibás jelszó!');</script>";
        }
    } else {
        // Hibás felhasználónév
        echo "<script>alert('Hibás felhasználónév!');</script>";
    }
    //Lezárjuk
    $stmt->close();
}

?>