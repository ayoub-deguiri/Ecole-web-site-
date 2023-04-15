<?php

$msg ="";
use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($content){
        
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $objet = $_POST['objet'];
  $message = $_POST['message'];

  $content = 
  "<div border='1px'>
    <h1> Contact nos :</h1>
    <h3>Nom Et Prenom : ".$nom."</h3> <br>
    <h3>Email  : ".$email."</h3> <br>
    <h3>objet de message : ".$objet."</h3> <br>
    <h3>message : </h3> <br>
    <p>".$message."</p>
  </div>";
  $name = "Ecole JAH Marrakech";  // Name of your website or yours
  $to = "Jah.informatique@gmail.com";  // mail of reciever
  $subject = "contact suport";
  $body = $content;
  $from = "jamaljahnouiti@gmail.com";  // you mail  vodkaayoub1@gmail.com"
  $password = "hifofyctbopxgkew";  // your mail password   
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
        $msg = "Inscription bien envoyer";
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
  <title>contact</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- swiper css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
      <img src="images/LOGO.jpg" alt="">
    </div>
    <h6 class="home-header99">
      JAH INFORMATIQUE PLUS
    </h6>
    <nav class="navbar">

      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php"> <i class="fas fa-home"></i> Acceuil </a>
      <a href="diplomes.html"><i class="fa-solid fa-certificate"></i> Diplômes</a>
      <a href="formations.html"> <i class="fa-solid fa-book"></i> Formations</a>
      <a href="albums.php"> <i class="fa-solid fa-image"></i> Albums</a>
      <a href="contact.php"> <i class="fa-solid fa-comment"></i> Contactez nous</a>
    </nav>
    <div class="icons">
        
        <div id="account-btn" ></div>
        <div id="menu-btn" class="fas fa-bars" ></div>
     </div>
  </div>

  <!-- header section ends -->
  <!-- account form section starts  ok -->
  <div class="profile-contact">
    <div class="profile-container09">
      <div class="profile-form">
        <h2 class="profile-text18 HeadingOne">
          <span> salut! <?=$msg?></span>
        </h2>
        <span class="profile-text20 Lead">
          Nous aimerions parler avec vous.
        </span>
        <form class="profile-form1" method="POST">
          <label class="profile-text21 Label">Mon nom est</label>
          <input type="text" placeholder="Nom et prénom" name="nom" class="profile-textinput Small input" required />
          <label class="profile-text21 Label">Email</label>
          <input type="text" placeholder="votre email" name="email" class="profile-textinput Small input" required />
          <label class="profile-text22 Label">
            Objet du message
          </label>
          <input type="text" placeholder="Objet " class="profile-textinput1 Small input" required  name="objet"/>
          <label class="profile-text23 Label">Votre message</label>
          <textarea rows="8" placeholder="Je veux dire que..." class="profile-textarea textarea Small" name="message" required></textarea>
        <div>
        <div class="g-recaptcha" data-sitekey="6Ld32IMlAAAAAH-N-Z4nOnLi3u6SYMRqKmfaymJx"></div>
        </div>
          <div class="profile-container10">
            <div class="profile-container11">
              
              <input type="submit" value="envoyer" class="primary-blue-button-button button ButtonSmall" />
            </div>
          </div>
        </form>
      </div>
      <div class="profile-info">
        <div class="profile-container12">
          <h3 class="HeadingTwo">
            <span>
              Contact
            </span>
            <span>Information</span>
          </h3>
          <span class="profile-text27 Small">
            Remplissez le formulaire et notre équipe vous répondra dans les 24
            heures.
          </span>
          <div class="profile-container13">
            <div class="profile-container14">
              <svg viewBox="0 0 1024 1024" class="profile-icon02">
                <path d="M742 460l-94-94q-18-18-10-44 24-72 24-152 0-18 12-30t30-12h150q18 0 30 12t12 30q0 300-213 513t-513 213q-18 0-30-12t-12-30v-150q0-18 12-30t30-12q80 0 152-24 24-10 44 10l94 94q186-96 282-282z"></path>
              </svg>
              <a href="tel:+40 772 100 200" class="profile-link Small">
                (+212) 6 61 72 98 87
              </a>
            </div>
            <div class="profile-container15">
              <svg viewBox="0 0 1024 1024" class="profile-icon04">
                <path d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"></path>
              </svg>
              <a href="mailto:hello@creative-tim.com?subject=" class="profile-link1 Small">
                jah.informatique@gmail.com
              </a>
            </div>
            <div class="profile-container16">
              <svg viewBox="0 0 1024 1024" class="profile-icon06">
                <path d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"></path>
              </svg>
              <a href="https://www.google.com/maps/place/Ecole+JAH+INFORMATIQUE/@31.592697,-8.052067,16z/data=!4m6!3m5!1s0xdafe8d18b749813:0x9ac46dc2e7ce5f94!8m2!3d31.592697!4d-8.0520666!16s%2Fg%2F11clyv15vr?hl=en" class="profile-link1 Small">
                jah.informatique@gmail.com
              </a>
            </div>
          </div>
        </div>
        <img alt="image" src="./images/wave-1.svg" class="profile-image1" />
        <div class="profile-container18"> </div>
      </div>
    </div>
  </div>



  <section class="contact-ct">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6797.004340106605!2d-8.052067!3d31.592697000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe8d18b749813%3A0x9ac46dc2e7ce5f94!2sEcole%20JAH%20INFORMATIQUE!5e0!3m2!1sen!2sma!4v1679574574635!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="flayer">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner test">
          <div class="carousel-item active " data-bs-interval="4000">
            <img src="flayer/gestion/image1.jpg" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="flayer/hijama/image1.jpg" class="d-block w-100 " alt="...">

          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="flayer/license/image1.jpg" class="d-block w-100" alt="...">

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </button>
      </div>
    </div>
  </section>


  <!-- footer sectionnnn  starts  -->
  <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(193, 235, 226, 1)" offset="0%"></stop>
        <stop stop-color="rgba(193, 235, 226, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L60,43.3C120,37,240,23,360,15C480,7,600,3,720,16.7C840,30,960,60,1080,73.3C1200,87,1320,83,1440,76.7C1560,
      70,1680,60,1800,51.7C1920,43,2040,37,2160,41.7C2280,47,2400,63,2520,73.3C2640,83,2760,87,2880,73.3C3000,60,3120,30,3240,18.3C3360,7,3480,13,
      3600,20C3720,27,3840,33,3960,30C4080,27,4200,13,4320,20C4440,27,4560,53,4680,68.3C4800,83,4920,87,5040,80C5160,73,5280,57,5400,55C5520,53,5640,
      67,5760,65C5880,63,6000,47,6120,41.7C6240,37,6360,43,6480,46.7C6600,50,6720,50,6840,56.7C6960,63,7080,77,7200,78.3C7320,80,7440,70,7560,56.7C7680,
      43,7800,27,7920,30C8040,33,8160,57,8280,70C8400,83,8520,87,8580,88.3L8640,90L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,
      100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,
      5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,
      100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,
      1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z">
    </path>
  </svg>

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
              <a href="index.php" class="link">acceuil</a>
              <a href="diplomes.html" class="link">diplomes</a>
              <a href="formations.html" class="link">formations</a>
              <a href="albums.php" class="link">Albums</a>
              <a href="contact.php" class="link">contact</a>
            </div>
          </div>
          <div class="col">
            <div class="box">
              <h3> Contactez-nous</h3>
              <span class="link"><i class="fa-solid fa-envelope"></i>&nbsp; jah.informatique@gmail.com </span>
              <span class="link"><i class="fa-solid fa-location-dot"></i> &nbsp; Lo Houssna 2 Mhamid (coté de mosquéé al mouhcinine Marrakech) </span>
              <span class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 5 24 37 16 19</span>
              <span class="link"> <i class="fa-solid fa-phone"></i> &nbsp; +212 6 61 72 98 87</span>
            </div>
          </div>
          <div class="col">
            <div class="box">
              <h3>Liens utiles</h3>
              <a href="https://www.facebook.com/profile.php?id=100086303923903" class="link"> <i class="fab fa-facebook-f"> </i> Ecole Jah Marrakech Département Santé et Beauté</a>
              <a href="https://www.facebook.com/EcoleJahModeliste" class="link"> <i class="fab fa-facebook-f"> </i> Ecole JAH Marrakech Modélisme Stylisme</a>
              <a href="https://www.facebook.com/EcoleJahEPS" class="link"> <i class="fab fa-facebook-f"> </i>Ecole JAH Education Physique et Sportive</a>
              <a href="https://www.facebook.com/profile.php?id=100086481996373" class="link"> <i class="fab fa-facebook-f"> </i>Ecole JAH des Métiers Marrakech</a>

            </div>
          </div>
        </div>
      </div>
      <div class="credit"> Copyright &copy; 2023 Jah Informatique Plus -all right reserved by - ayoub-deguiri/abdelghafour-lahnida
      </div>
    </div>
  </section>


  <!-- footer section ends -->
  <script src="assets/js/navMobile.js"></script>








</body>

</html>