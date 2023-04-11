
<?php 
        include('../db/db.php');
        session_start();
        $errors =array();
        if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $email =$_SESSION['email'];
        $sql = "SELECT * FROM compte WHERE code = ? and email =?";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement -> bindParam(1,$_POST['otp']);
        $pdo_statement -> bindParam(2,$email);
        $pdo_statement->execute();
        $result = $pdo_statement->fetch();
        if($result)
        {
            $_SESSION['email'] = $email;
            $info = "Veuillez créer un nouveau mot de passe que vous n'utilisez sur aucun autre site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Vous avez saisi un code incorrect !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Vérification des codes</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>