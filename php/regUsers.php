<?php 
if(isset($_POST['email']) && isset($_POST["pw"]))
{
    include_once("database.php");

    $email=$_POST["email"];
    $pw=$_POST["pw"];
    $username=$_POST["username"];

    if(empty($email))
    {
        echo "Hiba: hiányzik az e-mail cím!";
        exit;
    }
    else if(empty($pw))
    {
        echo "Hiba: hiányzik a jelszó";
        exit;
    }
    $check_sql = "SELECT * FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if($result->num_rows > 0) {
        echo "Az e-mail cím már foglalt";
        exit;
    }

    // Jelszó hashelése
    $hashed_pw = password_hash($pw, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, pw, username) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        // Error handling
        echo "Error: " . $conn->error;
        exit;
    }

    $stmt->bind_param("sss", $email, $hashed_pw, $username);
    $stmt->execute();

    if($stmt->affected_rows > 0)
    {
        include("../index.php");
    }
    else {
        echo "Az e-mail cím már foglalt";
    }        
}
?>