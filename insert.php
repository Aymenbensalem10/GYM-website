
<?php
        include "connexion.php";
        if (isset($_POST['Valider']))
        {   
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sexe = $_POST['gender'];
            $sql = "INSERT INTO users (nom,prenom,date_naissance,adresse,tel,email,password,sexe) VALUES ('$nom','$prenom','$date_naissance','$adresse','$tel','$email','$password','$sexe')";
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "there is problem in insert New rec. ".mysqli_error($conn);
                exit();
            }
            else 
            {
                header("location:login.html");
            }
        }
        ?>