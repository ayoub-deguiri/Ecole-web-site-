<?php
// Include the database configuration file
include 'db/db.php';
$pdo_statement = $pdo_conn->prepare("select * from informations where Id = '1' limit 1");
$pdo_statement->execute();
$Ourresult = $pdo_statement->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>JAH INFORMATIQUE PLUS</title>

   <!-- swiper file link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- incos page link -->
   <link rel="shortcut icon" href="images/LOGO.jpg" type="image/x-icon">

   <!-- awesome file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

   <!-- bootstrap file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

   <!-- font family link  -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" data-tag="font" />
   
   
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">

   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <link href='https://unpkg.com/css.gg@2.0.0/icons/css/zoom-in.css' rel='stylesheet'>
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
         <div id="menu-btn" class="fas fa-bars" onclick="test()"></div>
         <div id="account-btn" ></div>
         <div id="menu-btn"></div>
      </div>
   </div>
   <!-- header section ends -->
  <!-- AfterHeader section starts -->

  <div class="account-form">

<div id="close-form" class="fas fa-times"></div>

<div class="buttons">
   <span class="btn active login-btn"></span>
   <span class="btn register-btn"></span>
</div>
</div>

<!-- AfterHeader section ends -->
   <!-- carousel section starts  -->
   <div class="row">
      <div class="col-xl-3"></div>
      <div class="col-xl-6">
         <div class="carousel slide" data-bs-ride="carousel">
            <div id="carousel-inner2" class="carousel-inner">
               <div class="carousel-item active" style="width: 700px;">
                  <img src="images/1.jpg" style=" margin-top: 10px;" height="470px" alt="gestion" class="d-block w-100">
               </div>
               <div class="carousel-item " style="width: 700px;">
                  <img src="images/3.jpg" style=" margin-top: 10px;" height="470px" alt="gestion" class="d-block w-100">
               </div>
               <div class="carousel-item" style="width: 700px;">
                  <img src="images/2.JPG" style=" margin-top: 10px;" height="470px" alt="QOS" class="d-block w-100">
               </div>
               <div class="carousel-item" style="width: 700px;">
                  <img src="images/7.jpeg" style=" margin-top: 10px;" height="470px" alt="fede" class="d-block w-100">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3"></div>
   </div>
   <!-- carousel section ends -->
   <!-- About section starts  -->

   <section>
      <h1 class="heading headingH1"> <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> JAH INFORMATIQUE PLUS</h1>
      <div class="home-highlight1">
         <div class="home-content04">
            <div class="home-heading04">
               <p class="home-caption03 newcls">
                  <span>
                     Bonjour à toutes et à tous,
                     Je suis le Dr Jamal Nouiti, directeur de l'établissement Jah de la formation
                     professionnelle à Marrakech.<br />

                     Comme vous le savez, la formation professionnelle a commencé à
                     s'imposer sur le marché du travail et est devenue le principal pilier de
                     la promotion de l'économie nationale, et cela en parallèle avec le développement
                     technologique et scientifique.<br />

                     Créée en 2006 et accréditée par l'État, l'école Jah de formation
                     professionnelle délivre des diplômes qui permettent à ses étudiants
                     d'intégrer le monde du travail, que ce soit dans le secteur public ou le
                     secteur privé, ou de créer leurs propres projets tout en leur donnant tous
                     les atouts nécessaires à la réussite. <br />
                     L'établissement vous propose des diplômes agréés par l'état;
                     qualification opérateur de saisi, technicien, technicien spécialisé,
                     licence professionnelle, et master professionnel dans le domaine de
                     l'administration, de la gestion des entreprises et de l'informatique.<br />

                     L'établissement dispense également des formations professionnelles
                     dans divers domaines : informatique, gestion, développement humain
                     et accompagnement, machines de forage et excavateurs, chargeuses sur
                     pneus et chariots élévateurs, journalisme, stylisme et couture, pâtisserie,
                     secourisme, "Cupping Therapy“ ou la thérapie par les ventouses (Hijama),
                     esthétique et cosmétologie, formation de professeurs d'éducation
                     physique, préparateur physique, assistant(e) médical(e),
                     système de sécurité incendie et prévention, langues vivantes,
                     cours de soutien et de renforcement....<br />

                     L'établissement occupe une place privilégiée
                     auprès des diplômés en leur assurant le suivi et l'accompagnement nécessaires
                     pour la réalisation de leurs projets, pour ce faire, l'école diversifie les
                     moyens pour maintenir un contact permanent avec les lauréats comme elle organise
                     des réunions et des séances gratuites pour la sensibilisation et l'orientation.<br />

                     L'établissement Jah garantit aux étudiants des stages sur terrain,
                     des visites d'entreprises, et des activités culturelles , touristiques
                     et sportives.
                  </span>
               </p>
            </div>
         </div>
         <div class="home-image4">
            <img alt="image" src="images/acc.jpg" class="home-image5" />
         </div>
      </div>
      <br /><br />
      <div class="home-highlight1">
         <div class="home-image4">
            <img alt="image" src="images/acc.jpg" class="home-image5" />
         </div>
         <div class="home-content04">
            <div class="home-heading04">
               <p class="home-caption03" dir="rtl" lang="ar">
                  <span dir="rtl" lang="ar">
                     السلام عليكم و رحمة الله
                     معكم الدكتور جمال نويتي مدير مؤسسة جاه للتكوين المهني الخاص بمراكش .
                     <br />
                     كما تعلمون بأن التكوين المهني أصبح يفرض نفسه في سوق الشغل و أصبح الركيزة الأساسية للنهوض باقتصاد البلاد و خصوصا في عصر التكنولوجيا و التطوير العلمي .
                     <br />
                     فمؤسسة جاه أنشأت سنة 2006 وهي معتمدة من طرف الدولة و تعطي دبلومات تسمح لطلبتها إلى الولوج لعالم الشغل سواء في القطاع العام أو القطاع الخاص أو خلق فرص شغل و ذلك بخلق مشاريع مذرة للدخل .
                     <br />
                     فالمؤسسة تقترح عليكم دبلومات معتمدة من طرف الدولة تأهيلي، تقني، تقني متخصص، اجازة مهنية، ماستر مهني في مجال الإدارة و التسيير و الإعلاميات.
                     <br />
                     كما تقوم المؤسسة بتكوينات مهنية في مجالات متعددة : اعلاميات، تسيير، التنمية البشرية والمواكبة، الات الحفر والشحن والرافعات الشوكية، صحافة، الفصالة والخياطة، حلويات، اسعافات اولية، الحجامة العصرية، التجميل ، اساتذة تربية بدنية، معد بدني، مساعد طبي، نظام السلامة من الحرائق، لغات حية، دروس الدعم والتقوية....
                     <br />
                     وللتذكير فالمؤسسة لديها مكانة مميزة مع الخريجين من خلال تزويدهم بالمتابعة والدعم اللازمين لإنجاز مشاريعهم ، وللقيام بذلك تقوم المؤسسة بتنويع وسائل التواصل الدائم مع الخريجين حيث تنظم اجتماعات وجلسات مجانية لهم للتوعية والارشاد...
                     <br />
                     وتضمن المؤسسة للطلبة تدريبات ميدانية وزيارات لشركات و أنشطة ثقافية وتربوية.
                  </span>
               </p>
            </div>
         </div>
      </div>
   </section>

   <!-- About section ends -->

   <!-- sujets section starts ok  -->

   <section class="subjects">
      <h1 class="heading headingH2"> <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> NOS DIPLÔMES</h1>
      <div class="box-container">
         <div class="box">
            <a href="master.html">
               <img src="images/subject-icon-2.png" alt="">
               <h3>Master Professionnel Européen (FEDE) <br />(2ans)
               </h3>
            </a>
         </div>
         <div class="box">
            <a href="licence.html">
               <img src="images/subject-icon-3.png" alt="">
               <h3>Licence Professionnelle Européenne (FEDE) (1ans)</h3>
            </a>
         </div>
         <div class="box">
            <a href="Programme/Diplome/FormationProfessionnelle/programmeTSGE.html">
               <img src="images/subject-icon-4.png" alt="">
               <h3>Technicien Spécialisé en Gestion d’Entreprise (2ans)</h3>
            </a>
         </div>
         <div class="box">
            <a href="Programme/Diplome/FormationProfessionnelle/programmeTGI.html">
               <img src="images/subject-icon-5.png" alt="">
               <h3>Technicien en Gestion Informatisée<br /> (2ans)</h3>
            </a>
         </div>
         <div class="box">
            <a href="Programme/Diplome/FormationProfessionnelle/programmeQOS.html">
               <img src="images/subject-icon-6.png" alt="">
               <h3>Qualification Opérateur de Saisie <br />(1ans)
               </h3>
            </a>
         </div>
      </div>
   </section>

   <!-- sujets section ends -->

   <!-- container section starts  -->

   <section class="about">
      <div class="image">
         <img src="images/slide1.jpeg" alt="">
      </div>
      <div class="content">
         <h1 class="about-title"> <i class="fa fa-arrow-circle-right" style="font-size:36px;color:blue"></i> Objectif de l'ecole</h1>
         <p>
            Dispenser une formation de qualité aux participants motivés par une volonté d'évoluer dans leur carrière professionnelle.<br />
            Assurer des formations dans des filières sélectives et répondant aux besoins des entreprises.</p>
         <div class="icons-container">
            <div class="icons counter-box">
               <img src="images/about-icon-1.png" alt="">
               <h3 class="counter"> <?php echo $Ourresult['Formations']; ?></h3>
               <h4>Formations</h4>
            </div>
            <div class="icons counter-box">
               <img src="images/about-icon-2.png" alt="">
               <h3 class="counter"> <?php echo $Ourresult['Etudiants']; ?></h3>
               <h4>Etudiants</h4>
            </div>
            <div class="icons counter-box">
               <img src="images/about-icon-3.png" alt="">
               <h3 class="counter"> <?php echo $Ourresult['Certificates']; ?></h3>
               <h4>Certificates</h4>
            </div>
         </div>
      </div>
   </section>

   <!-- container section ends -->

   <!-- service section starts -->

   <section>

      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">

         <div id="Myfeatured" class="container">
            <h1 class="heading headingH3"> <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> CE QUI NOUS CARACTÉRISE ?</h1>
            <div class="row gy-4 classFatr">
               <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-out">
                  <div class="service-item position-relative">
                     <div class="icon"><i class="fa-solid fa-user-group" style="color: blue;"></i></div>
                     <h4><span class="stretched-link">ÉQUIPE QUALIFIÉE </span></h4>
                     <p>Une équipe ouverte , formee,motivee ,et compétente prête à relever les défis du projet pédagogique.</p>
                  </div>
               </div><!-- End Service Item -->

               <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="200">
                  <div class="service-item position-relative">
                     <div class="icon"><i class="fa fa-repeat" style="font-size:36px;color:blue"></i></div>
                     <h4><span class="stretched-link">INFRASTRUCTURE ADAPTÉE </span></h4>
                     <p>Des espaces équipés et bien agencés .</p>
                  </div>
               </div><!-- End Service Item -->

               <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="400">
                  <div class="service-item position-relative">
                     <div class="icon"><i class="fa fa-random" style="font-size:36px;color:blue"></i></div>
                     <h4><span class="stretched-link">COLLABORATION</span></h4>
                     <p>L’école encourage les élèves à travailler en équipe et à collaborer les uns avec les autres, en développant des compétences sociales.</p>
                  </div>
               </div><!-- End Service Item -->

               <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="600">
                  <div class="service-item position-relative">
                     <div class="icon"><i class="fa fa-heart" style="font-size:36px;color:blue"></i></div>
                     <h4><span class="stretched-link">RESPECT</span></h4>
                     <p>Le respect des autres, ainsi que de soi-même constitue une orientation de première importance, renforçant le savoir de vivre ensemble.</p>
                  </div>
               </div><!-- End Service Item -->

            </div>

         </div>
      </section>
      <!-- End Featured Services Section -->

   </section>

   <!-- service section ends  -->

   <!-- ======= Portfolio Section ======= -->

   <section id="portfolio" class="portfolio" data-aos="fade-up">

      <?php
      // Get images from the database

      $statement1 = $pdo_conn->prepare('SELECT * FROM flayers where type = "Secourisme"');
      $statement1->execute();
      $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
      // 
      $statement2 = $pdo_conn->prepare('SELECT * FROM flayers where type = "Gestion"');
      $statement2->execute();
      $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
      //
      $statement3 = $pdo_conn->prepare('SELECT * FROM flayers where type = "License"');
      $statement3->execute();
      $result3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
      //
      $statement4 = $pdo_conn->prepare('SELECT * FROM flayers where type = "Hijama"');
      $statement4->execute();
      $result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <div class="container-fluid" id="Myportfolio" data-aos="fade-up" data-aos-delay="200">
         <h1 class="heading headingH4"> <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> NOS ALBUMS </h1>
         <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

            <ul class="portfolio-flters">
               <li data-filter="*" class="filter-active">All</li>
               <li data-filter=".filter-Secourisme">Secourisme</li>
               <li data-filter=".filter-Gestion">Gestion Et Marketing</li>
               <li data-filter=".filter-License">License</li>
               <li data-filter=".filter-Hijama">Hijama</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row g-0 portfolio-container">

               <?php
               if (!empty($result1)) {
                  foreach ($result1 as $row1) {
               ?>
                     <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['type']; ?>">
                        <img src="Admin/<?php echo $row1['image']; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <a href="Admin/<?php echo $row1['image']; ?>" data-gallery="portfolio-gallery<?php echo $row1['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
                        </div>
                     </div>
               <?php
                  }
               }
               ?>

               <?php
               if (!empty($result2)) {
                  foreach ($result2 as $row1) {
               ?>
                     <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['type']; ?>">
                        <img src="Admin/<?php echo $row1['image']; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <a href="Admin/<?php echo $row1['image']; ?>" data-gallery="portfolio-gallery<?php echo $row1['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
                        </div>
                     </div>
               <?php
                  }
               }
               ?>
               <?php
               if (!empty($result3)) {
                  foreach ($result3 as $row1) {
               ?>
                     <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['type']; ?>">
                        <img src="Admin/<?php echo $row1['image']; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <a href="Admin/<?php echo $row1['image']; ?>" data-gallery="portfolio-gallery<?php echo $row1['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
                        </div>
                     </div>
               <?php
                  }
               }
               ?>
               <?php
               if (!empty($result4)) {
                  foreach ($result4 as $row1) {
               ?>
                     <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['type']; ?>">
                        <img src="Admin/<?php echo $row1['image']; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <a href="Admin/<?php echo $row1['image']; ?>" data-gallery="portfolio-gallery<?php echo $row1['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
                        </div>
                     </div>
               <?php
                  }
               }
               ?>
            </div><!-- End Portfolio Container -->

         </div>

      </div>
   </section>

   <!-- End Portfolio Section -->

   <!-- students reviews section starts  -->

   <section class="reviews">
      <div id="Myreviews">
         <h1 class="heading headingH5"> <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> L'AVIS DE NOS ÉTUDIANTS </h1>
         <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
               <div class="swiper-slide slide">
                  <p>Bon encadrement, formation intéressante,
                     formateurs à l’écoute, école
                     très agréable et instructive</p>
                  <img src="images/single-person.png" alt="">
                  <h3>Abdelghafour Lahnida</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <p>la formation m'a permis de développer
                     mes compétences professionnelles et ma
                     conforter dans mon projet futur..</p>
                  <img src="images/homme-daffaire.png" alt="">
                  <h3>Ayoub Deguiri</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <p>Très bonne école, avec de bons intervenants.
                     Un point est réalisé à chaque fin de période
                     pour s'assurer que les cours correspondent
                     aux attendus des apprenants.</p>
                  <img src="images/personne-celibataire.png" alt="">
                  <h3>Aya Miwal</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <p>Très bon centre de formation.
                     Locaux propres et très bien équipés,
                     avec des intervenants de qualité.
                     Mention particulière pour les responsables de
                     formation qui sont toujours à disposition pour nous aider.</p>
                  <img src="images/homme-daffaire.png" alt="">
                  <h3>Ayman kalm</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <p>Très bon centre de formation,
                     qualité des intervenants, personnel
                     encadrant à l'écoute et disponible.</p>
                  <img src="images/personne-celibataire.png" alt="">
                  <h3>Khadija moudi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <p>Jah Informatique est un bon centre de
                     formation que je recommanderais avec plaisir.</p>
                  <img src="images/single-person.png" alt="">
                  <h3>Smail Rouhi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- students reviews section ends -->
   <section class="logo-container">
      <div id="Myslider" class="swiper logo-slider">
         <h1 class="heading headingH6"> NOS PARTENAIRES </h1>
         <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src="images/cisco.png" alt=""> </div>
            <div class="swiper-slide"> <img src="images/fede.png" alt=""> </div>
            <div class="swiper-slide"> <img src="images/fppa.png" alt=""> </div>
            <div class="swiper-slide"> <img src="images/office.jpg" alt=""> </div>
            <div class="swiper-slide"> <img src="images/LOGO.jpg" alt=""> </div>
         </div>
      </div>
   </section>
   <!-- footer section starts  -->
   <div>
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
   </div>

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

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- js file link  -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>