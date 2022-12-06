<?php
include "connexion.php" ;
if (isset($_POST['Supprimer']))
{
    $id = $_POST["id"];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $req = "DELETE FROM users WHERE id = '$id' ";
    $result = mysqli_query($conn,$req) ;
    if($result)
    {
        header("location:index.html");
    }
    else
    {
        echo "erreur Suppression";
    }
}