<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    if(isset($_POST['valider']))
    {
        $mail = new PHPMailer(true);
        $mail -> Host = 'stpm.gmail.com';
        $mail ->SMTPAuth =true;
        $mail ->Username ='vodkaayoub1@gmail.com';
        $mail ->Password ='qlipazmcsezqwwfg';
        $mail -> SMTPSecure ='ssl';
        $mail ->Port =465;

        $mail -> setFrom('vodkaayoub1@gmail.com');

        $mail -> addAddress('vodkaayoub1@gmail.com');
        $mail ->isHTML(true);

        $mail ->Subject ='test message';
        $mail -> Body = 'body';
        $mail ->send();
        echo "
            <script>
            alert('ggof')
            </script>
        ";

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