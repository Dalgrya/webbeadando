<?php 
if(isset($_POST['name']) && isset($_POST["pw"]))
{
    include_once("database.php");
    require_once("database.php");
    include("database.php");

    $name=$_POST["name"];
    $pw1=$_POST["pw"];
    $username=$_POST["username"];

    if(empty($name))
    {
        echo"hiba: hiányzik a név!";
        exit;
    }
    else if(empty($pw))
    {
        echo"hiba hiányzik a jelszó";
        exit;
    }

    $sql ="INSERT INTO users()";
    $stmt=$conn->prerpare($sql);

    if(!$stmt)
    {
        echo " Hiba a lekérdezésben:" $conn-> error;
        exit;
    }

    $pw1=password_hash($pw1,PASSWORD_DEFAULT);

    $stmt->bind_param("sss",$name,$pw,$username);
    $stmt->execute();

    if($stmt->affected_rows>0)
    {
        include("index.php")
        }
        else{echo"Az e-mail már foglalt";

                }        
}
