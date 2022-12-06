
<?php
  include "connexion.php";
      if (isset($_POST['Connexion']))
        {   
           $mail = $_POST['email'];
           $password = $_POST['password'];
        
           $sql = "select * from users where email = '$mail' AND password = '$password' limit 1";
            $result = mysqli_query($conn,$sql);
            if($result)
              {
                 header("location: index1.html");
              }  
                else 
                    {
                        echo "email ou mot de passe incorrect";
                    }
                }
?>