<?php
    include('../db/db.php');
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($content){
        
    }
    $email = "";
    $errors = array();
    if(isset($_POST['check-email'])){
        $email = $_POST['email'];
       
        // ------------------
        $Sql ="SELECT * FROM compte WHERE Email = ? ";
        $pdo_statement = $pdo_conn->prepare($Sql);
        $pdo_statement -> bindParam(1,$_POST['email']);
      
        $pdo_statement->execute();
        $compte = $pdo_statement->fetch();
        $n = $pdo_statement->rowCount();

        if ($n != 0)
        {
            
            if(!empty($compte))
            {
                $code = rand(99999,11111);
                $sql2 = "UPDATE compte SET code = $code WHERE Email = ?";
                $pdo_statement = $pdo_conn->prepare($sql2);
                $pdo_statement -> bindParam(1,$_POST['email']);
                $result =$pdo_statement->execute();
                if($result)
                {
                    $content ="Your password reset code is $code";
                    $name = "Ecole JAH Marrakech";  // Name of your website or yours
                    $to = "$email";  // mail of reciever
                    $subject = "Password Reset Code";
                    $body = $content;
                    $from = "vodkaayoub1@gmail.com";  // you mail  vodkaayoub1@gmail.com"
                    $password = "qlipazmcsezqwwfg";  // your mail password   qlipazmcsezqwwfg

                    // Ignore from here
                    require '../PHPMailer/src/Exception.php';
                    require '../PHPMailer/src/PHPMailer.php';
                    require '../PHPMailer/src/SMTP.php';
                    $mail = new PHPMailer();

                    // To Here

                    //SMTP Settings
                    $mail->isSMTP();
                    // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
                    $mail->Host = "smtp.gmail.com"; // smtp address of your email
                    $mail->SMTPAuth = true;
                    $mail->Username = $from;
                    $mail->Password = $password;
                    $mail->Port = 587;  // port
                    $mail->SMTPSecure = "tls";  // tls or ssl
                    $mail->smtpConnect([
                        'ssl' => [
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        ]
                    ]);

                    //Email Settings
                    $mail->isHTML(true);
                    $mail->setFrom($from, $name);
                    $mail->addAddress($to); // enter email address whom you want to send
                    
                    $mail->Subject = ($subject);
                    $mail->Body = $body;

                    if ($mail->send()) {
                        $info = "Nous avons envoyé un otp de réinitialisation de mot de passe à votre adresse e-mail- $email";
                        $_SESSION['info'] = $info;
                        $_SESSION['email'] = $_POST['email'];
                        header('location: reset-code.php');
                        exit();
                    } else {
                        $errors['otp-error'] = "Failed while sending code!";
                    }

                    
                }else{
                    $errors['db-error'] = "Something went wrong!";
                }
            }
        }
        else
        {
            $errors['email'] = "Cette adresse e-mail n'existe pas !";
        }    
        //----------
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Mot de passe oublié</h2>
                    <p class="text-center">Entrez votre adresse email</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>