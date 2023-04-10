<?php
session_start();
include('db/db.php');
$erreur="";
if($_SERVER['REQUEST_METHOD'] == "POST" )
{ 
    if(isset($_POST['seConnecter']))
    {
        $Sql = "SELECT * from compte  WHERE UserName=? and Password=? ";
        $pdo_statement = $pdo_conn->prepare($Sql);
        $pdo_statement -> bindParam(1,$_POST['UserName']);
        $pdo_statement -> bindParam(2,$_POST['Password']);
        $pdo_statement->execute();
        $compte = $pdo_statement->fetch();
        $n = $pdo_statement->rowCount();
        if ($n != 0)
        {
            if(!empty($compte))
            {
                $_SESSION['Role'] = $compte['Role'];
                $_SESSION['Id'] = $compte['Id'];
                $_SESSION['Nom'] = $compte['Nom'];
                $_SESSION['Prenom'] = $compte['Prenom'];
                    header("location:Admin/acceuil.php");
                
            }
        }
        else
        {
            $erreur =" password or user name are incoreecrt";
        }    
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST"  >
        <div class="card">
            <a class="login">Login </a>
            <div class="inputBox">
                <input type="text" required="required" name="UserName" autocomplete="off">
                <span class="user">Username</span>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="inputBox">
                <input type="password" required="required" id="Password" name="Password">
                <span>Password</span>
                <i class="fa-solid fa-lock" ></i>

                <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                
            </div>
            <a href="forgot-password.php" id="forgot-ps"> forgot password ?</a>
            <input type="submit" value="login" name="seConnecter" class="enter">
            <?php
            echo $erreur;
            
            ?>

        </div>
    </form>
    </div>
    <script>
       
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#Password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type); 
            this.classList.toggle("fa-eye");
        });
    </script>
</body>
</html>