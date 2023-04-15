<?php

$message = "";
use PHPMailer\PHPMailer\PHPMailer;
   function sendmail($content){
         
   }
include("../../db/db.php");
$etat = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // formation form 
   
   $nom = $_POST['nom'];
   $cin = $_POST['cin'];
   $adresse = $_POST['adresse'];
   $tel = $_POST['tel'];
   $niveau = $_POST['niveau'];
   $choix = $_POST['choix'];
   $email = $_POST['email'];
   $Typeformation = 'Formation';
   $type = 'encoure';
   $date = date("Y-m-d ");
   $heure = date("h:i:s");
   $img = 'img';
   $query = "INSERT INTO inscription values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,null,null,null)";
   
   $pdo_statement = $pdo_conn->prepare($query);
   // File name
$filename1 = $_FILES['files1']['name'];
$filename2 = $_FILES['files2']['name'];


$target_file1 = '../Images/Inscription/'.$filename1;
$target_file2 = '../Images/Inscription/'.$filename2;


   // file extension
$file_extension1 = pathinfo($target_file1, PATHINFO_EXTENSION);
$file_extension1 = strtolower($file_extension1);
   // file extension
$file_extension2 = pathinfo($target_file2, PATHINFO_EXTENSION);
$file_extension2 = strtolower($file_extension2);



   // Valid image extension
$valid_extension = array("png","jpeg","jpg","PNG","JPEG","JPG");

if(in_array($file_extension1 ,$valid_extension)
and in_array($file_extension2 ,$valid_extension)

){
   // Upload file
if(move_uploaded_file($_FILES['files1']['tmp_name'],$target_file1) 
and move_uploaded_file($_FILES['files2']['tmp_name'],$target_file2)
){
   // Execute query
   $pdo_statement->bindParam(1, $nom);
   $pdo_statement->bindParam(2, $cin);
   $pdo_statement->bindParam(3, $adresse);
   $pdo_statement->bindParam(4, $tel);
   $pdo_statement->bindParam(5, $niveau);
   $pdo_statement->bindParam(6, $choix);
   $pdo_statement->bindParam(7, $Typeformation);
   $pdo_statement->bindParam(8, $email);
   $pdo_statement->bindParam(9, $type);
   $pdo_statement->bindParam(10, $date);
   $pdo_statement->bindParam(11, $heure);
   $pdo_statement->bindParam(12, $filename1);
   $pdo_statement->bindParam(13, $filename2);
   $pdo_statement->execute();
   $etat = true;
}
}
   $content =
      "<h1>Formation  </h1>
         <table border='1px' cellpadding='0' cellspacing='0' style='text-align:center'>
            <tr>
               <th>
                     Nom Complet 
                 </th>
                <td>"
      . $nom .
      "</td>
            </tr>
            <tr>
                <th>
                    Numéro Carte d'Identité National 
                </th>
                <td>"
      . $cin .
      "</td>
            </tr>
            <tr>
                <th>
                    Adresse 
                </th>
                <td>"
      . $adresse .
      "</td>
            </tr>
            <tr>
                <th>
                    Numéro de téléphone 
                </th>
                <td>"
      . $tel .
      "</td>
            </tr>
            <tr>
                <th>
                    Niveau Scolaire 
                </th>
                <td>"
      . $niveau .
      "</td>
            </tr>
            <tr>
                <th>
                    Diplôme Choisi
                </th>
                <td>"
      . $choix .
      "</td>
            </tr>
            
            <tr>
                <th>
                    Email 
                </th>
                <td>"
      . $email .
      "</td>
            </tr>
         </table>
         ";
   $name = "Ecole JAH Marrakech";  // Name of your website or yours
   $to = "nvabdouamanu@gmail.com";  // mail of reciever
   $subject = "Inscription FEDE";
   $body = $content;
   $from = "vodkaayoub1@gmail.com";  // you mail  vodkaayoub1@gmail.com"
   $password = "qlipazmcsezqwwfg";  // your mail password   qlipazmcsezqwwfg

   // Ignore from here
   require '../../PHPMailer/src/Exception.php';
   require '../../PHPMailer/src/PHPMailer.php';
   require '../../PHPMailer/src/SMTP.php';
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
   $mail->addAttachment($target_file1);
   $mail->addAttachment($target_file2);

   $mail->Subject = ($subject);
   $mail->Body = $body;

   if ($mail->send()) {
      $message = "Inscription bien envoyer";
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
   <title>Inscription Formation</title>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

   <!--  bootstrap  link  -->
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- incos page link -->
   <link rel="shortcut icon" href="../../images/LOGO.jpg" type="image/x-icon">
      <!-- toast links -->
      <link rel="stylesheet" href="../../toast/beautyToast.css">
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../assets/css/style.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
         $(".sel_depart").click(function(){
            var deptid = $(this).val();
            $.ajax({
               url: '../getFormation.php',
               type: 'post',
               data: {depart:deptid,Etat:"etat3"},
               dataType: 'json',
               success:function(response){
                     var len = response.length;
                     $(".sel_user").empty();
                     for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $(".sel_user").append("<option value='"+name+"'>"+name+"</option>");
                     }
               }
            });
         });
         });
    </script>
</head>
<body>
   
 <!-- header section starts  -->
 <header class="HeaderTop"> 
   <span class="link"><i class="fa-solid fa-location-dot"></i> &nbsp; Lo Houssna 2 Mhamid (coté de mosquéé al mouhcinine Marrakech) </span>
   <span class="link"><i class="fa-solid fa-envelope"></i>&nbsp; jah.informatique@gmail.com </span>
   <span class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 5 24 37 16 19</span>
   <span class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 6 61 72 98 87</span>
</header>
<div class="header">
   <div class="logo">  
      <img src="../../images/LOGO.jpg" alt=""> 
   </div>
   <h6 class="home-header99">
      JAH INFORMATIQUE PLUS
   </h6>
   <nav class="navbar">
      
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="../../index.php"> <i class="fas fa-home"></i> Acceuil </a>
      <a href="../../diplomes.html"><i class="fa-solid fa-certificate"></i> Diplômes</a>
      <a href="../../formations.html"> <i class="fa-solid fa-book"></i> Formations</a>
      <a href="../../albums.php"> <i class="fa-solid fa-image"></i> Albums</a>
      <a href="../../contact.php"> <i class="fa-solid fa-comment"></i> Contactez nous</a>
   </nav>
   <div class="icons">
        
        <div id="account-btn" ></div>
        <div id="menu-btn" class="fas fa-bars" ></div>
     </div>
</div>

<!-- header section ends -->

<!-- start inscription formation  container -->
<h1 id="title">Formulaire d'inscription</h1>
<div class="container-md Inscription-form" >
    <h1><?= $message?></h1>
    <form action=""  method="post" enctype='multipart/form-data'>
        <div class="mb-3 mt-3">
            <label class="labelInput">Nom et Prénom </label>
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cnom" >*</span>
            
            <input type="text" class="form-control " id="nom" name="nom" placeholder="Nom et prenom">
          </div>
          <div class="mb-3 mt-3">
            <label class="labelInput" >Numéro de CIN  </label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="ccin" >*</span>
            <input type="text" class="form-control" id="cin" name="cin" placeholder="Numéro de CIN">
          </div>
          <div class="mb-3 mt-3">
            <label class="labelInput" >Adresse </label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cadresse" >*</span>
            
            <input type="text" class="form-control" id="Adresse" name="adresse" placeholder="Adresse">
          </div>
          
          <div class="mb-3 mt-3">
            <label class="labelInput">Numéro de téléphone</label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="ctel" >*</span>
            
            <input type="text" class="form-control" id="tel" name="tel" pattern="^\+212[5-7]\d{8}$|^0[5-7]\d{8}$" placeholder="Numéro de téléphone">
          </div>
          
          <div class="mb-3 radio">
            <label for="pwd" id="label">Niveau Scolaire &nbsp;</label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cniveau" >*</span>
           
            <div class="form-check">
                <input type="radio" class="form-check-input sel_depart" value="aucun" name='niveau'  id="r4" >
               <label class="form-check-label label-radio"> Aucun&nbsp; بدون</label>
              </div>
            <div class="form-check">
                <input type="radio" class="form-check-input sel_depart" value="9AEF" name='niveau'id="r3" >
                <label class="form-check-label label-radio">9AEF &nbsp; الثالثة اعدادي</label>
              </div>
            
              <div class="form-check">
                <input type="radio" class="form-check-input sel_depart" value="2BAC" name='niveau' id="r2">
               <label class="form-check-label label-radio" for="radio2">2ème Année BAC   الثانية بكالوريا</label>
              </div>
              <div class="form-check">
               <input type="radio" class="form-check-input sel_depart" value="BACOuPlus" name='niveau' id="r1">
                <label class="form-check-label label-radio" for="radio1"> BAC ou Plus &nbsp; بكالوريا فما فوق</label>
              </div>
          </div>
         
          <div class="mb-3 mt-3">
            <label class="labelInput">Formation Choisi:</label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cchoix" >*</span>
            
            <select id="choix" class="form-select sel_user" name="choix" >
                <option value="rien">Choisir Formation</option>
            </select>
          </div>
        
          
          <div class="mb-3 mt-3">
            <label class="labelInput" >Email :</label>&ensp;
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cemail" >*</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
          </div>
          <div class="mb-3 mt-3">
            <label for="name " class="labelInput">Photo de la CIN    :</label>
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cfile1" >*</span>
            <div>
               <input type="file" name="files1" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files sélectionner"  />
               <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> 
                  <span>  sélectionner un fichier&hellip;</span>
               </label>
          </div>
          </div>
          <div class="mb-3 mt-3">
            <label for="name " class="labelInput">Photo d'identité    :</label>
            <span style="color: red; font-size: 2em; padding-left: 10px;" id="cfile2" >*</span>
            <div>
               <input type="file" name="files2" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files sélectionner"  />
               <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> 
                  <span>sélectionner un fichier&hellip;</span>
               </label>
          </div>
          </div>
          <div id="check">

          </div>
          

          
          <div class="g-recaptcha" data-sitekey="6Ld32IMlAAAAAH-N-Z4nOnLi3u6SYMRqKmfaymJx" require></div>
          <input type="submit" class="btn-info" onclick="return checkform()"  value="Inscrire">
    </form>
           <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h1> <i class="fa-regular fa-credit-card"></i> Method de payment : </h1>
        </div>
        <div class="faq-list">
         <ul>
         <li data-aos="fade-up">
         <i class="fa-solid fa-circle-question icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> 1 - paiement par Rib :<i class="fa-solid fa-angle-down icon-show"></i><i class="fa-solid fa-angle-up icon-close"></i> </a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p style="    margin-left: 7em;">
              <b> Références bancaires (RIB) : <br>
                          <span style=" color: red;">    007450001016200030042318 </span> .</b>
                </p>
              </div>
            <li data-aos="fade-up" data-aos-delay="200">
            <i class="fa-solid fa-circle-question icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">2 - paiement par wafacash: <i class="fa-solid fa-angle-down icon-show"></i><i class="fa-solid fa-angle-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <b > <p style="margin-left: 7em;">
                 Nom  : <br>
                 <span style=" color: red;">
                 Nouiti jamal
                 </span>
                </p> </b>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-circle-question icon-help"></i>  <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">3 - paiement espèces :<i class="fa-solid fa-angle-down icon-show"></i><i class="fa-solid fa-angle-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
               
                <p style="margin-left: 7em;">
              <b>   Veuillez nous rendre visite à l'institution à l'adresse: <br>
              <span class="link" style="color :red"><i class="fa-solid fa-location-dot"></i> &nbsp; Lo Houssna 2 Mhamid (coté de mosquéé al mouhcinine Marrakech) </span></b>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section><!-- End F.A.Q Section -->
</div>

<!-- end  inscription container -->    



<!-- footer section starts  -->
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
   <defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(193, 235, 226, 1)" offset="0%"></stop>
      <stop stop-color="rgba(193, 235, 226, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" 
      fill="url(#sw-gradient-0)" d="M0,50L60,43.3C120,37,240,23,360,15C480,7,600,3,720,16.7C840,30,960,60,1080,73.3C1200,87,1320,83,1440,76.7C1560,
      70,1680,60,1800,51.7C1920,43,2040,37,2160,41.7C2280,47,2400,63,2520,73.3C2640,83,2760,87,2880,73.3C3000,60,3120,30,3240,18.3C3360,7,3480,13,
      3600,20C3720,27,3840,33,3960,30C4080,27,4200,13,4320,20C4440,27,4560,53,4680,68.3C4800,83,4920,87,5040,80C5160,73,5280,57,5400,55C5520,53,5640,
      67,5760,65C5880,63,6000,47,6120,41.7C6240,37,6360,43,6480,46.7C6600,50,6720,50,6840,56.7C6960,63,7080,77,7200,78.3C7320,80,7440,70,7560,56.7C7680,
      43,7800,27,7920,30C8040,33,8160,57,8280,70C8400,83,8520,87,8580,88.3L8640,90L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,
      100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,
      5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,
      100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,
      1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z">
   </path></svg>

   <section class="footer">
      <div id="Myfooter">
         <div class="container">
            <div class="row">
                  <div class="col">
                     <div class="box">
                        <h3> <i class="fas fa-lightbulb"></i> Jah informatiques plus </h3>
                        <p>JAH INFORMATIQUE PLUS est une école de formation professionnelle privée.</p>
                        <div class="share">
                           <a href="https://www.facebook.com/EcoleJahInformatique" class="fab fa-facebook-f"></a>
                           <a href="https://www.youtube.com/@jahinformatique" class="fab fa-youtube"></a>
                        </div>
                     </div>
                  </div>
      
                  <div class="col">
                     <div class="box lien-rapid">
                        <h3>Liens rapides</h3>
                        <a href="../../index.php" class="link">acceuil</a>
                        <a href="../../diplomes.html" class="link">diplomes</a>
                        <a href="../../formations.html" class="link">formations</a>
                        <a href="../../albums.php" class="link">Albums</a>
                        <a href="../../contact.php" class="link">contact</a>
                     </div>
                  </div>
                  <div class="col">
                  <div class="box">
                     <h3> Contactez-nous</h3>
                     <span class="link"><i class="fa-solid fa-envelope"></i>&nbsp; jah.informatique@gmail.com </span>
                     <span class="link"><i class="fa-solid fa-location-dot"></i> &nbsp; Lo Houssna 2 Mhamid (coté de mosquéé al mouhcinine Marrakech) </span>
                     <span  class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 5 24 37 16 19</span>
                     <span class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 6 61 72 98 87</span>
                  </div>
                  </div>
                  <div class="col">
                     <div class="box">
                        <h3>Liens utiles</h3>
                        <a href="https://www.facebook.com/profile.php?id=100086303923903" class="link"> <i class="fab fa-facebook-f"> </i> Ecole Jah Marrakech Département Santé et Beauté</a>
                        <a href="https://www.facebook.com/EcoleJahModeliste" class="link">  <i class="fab fa-facebook-f"> </i> Ecole JAH Marrakech Modélisme Stylisme</a>  
                        <a href="https://www.facebook.com/EcoleJahEPS" class="link">   <i class="fab fa-facebook-f"> </i>Ecole JAH Education Physique et Sportive</a>
                        <a href="https://www.facebook.com/profile.php?id=100086481996373" class="link">  <i class="fab fa-facebook-f"> </i>Ecole JAH des Métiers Marrakech</a>
                  
                     </div>
                     </div>
            </div>
         </div>
         <div class="credit"> Copyright &copy; 2023 Jah Informatique Plus  -all right reserved by - ayoub-deguiri/abdelghafour-lahnida
         </div>
      </div>
   </section>


<!-- footer section ends -->



<script src="../../assets/js/fileInput.js">

</script>
<script src="../../assets/js/formvalidation3.js"> </script>
<script src="../../../assets/js/navMobile.js"></script>

<!-- TOAST LINK-->
<script src="../../toast/beautyToast.js"></script>
<?php

                if($etat ==true){
          
          echo "<script>
          beautyToast.success({
            title: 'Success', 
            message: 'Inscription Bien Ajouter.' 
          });
          </script>";
          echo '<script>
          function greet() {
            window.location="inscriFormation.php"
           }
           setTimeout(greet, 1500); </script>';
          $etat = false;
                }
              

?>



</body>
</html>






