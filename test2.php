<?php
$erreur="";
$message="";


    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($content){
        
    }
 if($_SERVER['REQUEST_METHOD']=='POST')
 {  


        $content="<table>
                <tr>
                <td>test1</td>
                <td>test1</td>
                </tr>
                <tr>
                <td>test1</td>
                <td>test1</td>
                </tr>
                <tr>
                <td>test1</td>
                <td>test1</td>
                </tr>
        </table> ";
        $name = "Ecole JAH Marrakech";  // Name of your website or yours
        $to = "nvabdouamanu@gmail.com";  // mail of reciever
        $subject = "Inscription FEDE";
        $body = $content;
        $from = "vodkaayoub1@gmail.com";  // you mail  vodkaayoub1@gmail.com"
        $password = "qlipazmcsezqwwfg";  // your mail password   qlipazmcsezqwwfg

        // Ignore from here
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
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

        //$mail->addAttachment("images/1.jpg"); // for CIN
      

        $mail->Subject = ($subject);
        $mail->Body = $body;
        
        if ($mail->send()) {
            $message="Inscription bien envoyer";

        } else {
            echo "<script>alert('Something is wrong')</script> " . $mail->ErrorInfo;
        }
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $message ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>nom</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>prenom</td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td>date</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="valider" name="valider"></td>
            </tr>
        </table>
    </form>
</body>
</html>