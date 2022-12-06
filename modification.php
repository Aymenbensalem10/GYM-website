<?php
        include "connexion.php";
        if (isset($_POST['Modifier']))
        {   
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sexe = $_POST['gender'];
            $sql = " UPDATE users SET nom='$nom', prenom = '$prenom' , date_naissance = '$date_naissance' , adresse = '$adresse' , tel = '$tel' , email = '$email' , password = '$password' , sexe = '$sexe' WHERE id = '$id' " ;
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo '<script type="text/javascript"> alert ("data modifiées") </script>';
            }
            else 
            {
                echo '<script type="text/javascript"> alert ("data non modifiées") </script>';  
            }
        }
        ?>