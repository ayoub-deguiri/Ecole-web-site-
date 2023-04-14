<?php
              // Include the database configuration file
                include 'db/db.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Albums</title>

   <!-- swiper file link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- awesome file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

   <!-- incos page link -->
   <link rel="shortcut icon" href="images/LOGO.jpg" type="image/x-icon">
   
   <!-- css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

   <!-- bootstrap file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      data-tag="font"
    />

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/zoom-in.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
     <div id="menu-btn"></div>
  </div>
</div>

   <div class="container-md diplomes-ct albumes">
    <div class="row">
        <div class="col-md-8" >
            <div class="diplome-partie01">
                    
                <h1 style="text-align: center; margin-top: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                    </svg>
                        NOS ALBUMS
                    </h1>
                    <p id="des">
                        Bienvenue sur notre page d'albums scolaires ! Parcourez nos souvenirs
                         les plus précieux en photos, de moments de camaraderie aux
                          réalisations académiques.
                    </p>
                    <p id="des" lang="ar" dir="rtl">
                        مرحباً بكم في صفحتنا للألبومات المدرسية!
                         استمتعوا بتصفح أغلى الذكريات لدينا في صور،
                         من لحظات الصداقة إلى الإنجازات الأكاديمية.
                    </p>
            </div>
        </div>
        <div class="col-md-4" >
            <div class="carousel slide" data-bs-ride="carousel"> 
            <div id="carousel-inner22" class="carousel-inner">
                <div class="carousel-item active">
                <img src="./images/QOS.png" alt="gestion" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="./images/gestion.png" alt="gestion" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="./images/TGI.png" alt="QOS" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="./images/fedeFlayer.jpeg" alt="fede" class="d-block w-100">
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
       <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">
    <?php
                // Get images from the database

                $statement1 = $pdo_conn->prepare('SELECT * FROM images where type = "Diplome"');
                $statement1->execute();
                $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

                // 
                $statement2 = $pdo_conn->prepare('SELECT * FROM images where type = "Secourisme"');
                $statement2->execute();
                $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                //
                $statement3 = $pdo_conn->prepare('SELECT * FROM images where type = "Hijama"');
                $statement3->execute();
                $result3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
                 //
                $statement4 = $pdo_conn->prepare('SELECT * FROM images where type = "Engins"');
                $statement4->execute();
                $result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
                //
                $statement5 = $pdo_conn->prepare('SELECT * FROM images where type = "Préparateur"');
                $statement5->execute();
                $result5 = $statement5->fetchAll(PDO::FETCH_ASSOC);
                //
                $statement6 = $pdo_conn->prepare('SELECT * FROM images where type = "Modéliste"');
                $statement6->execute();
                $result6 = $statement6->fetchAll(PDO::FETCH_ASSOC);
                //
                $statement7 = $pdo_conn->prepare('SELECT * FROM images where type = "Pâtisserie"');
                $statement7->execute();
                $result7 = $statement7->fetchAll(PDO::FETCH_ASSOC);
                ?>
        <div class="container-fluid" id="Myportfolio" data-aos="fade-up" data-aos-delay="200">
           <h1 class="heading headingH4" > <i class="fa fa-chevron-circle-right" style="font-size:40px;color:blue"></i> NOS ALBUMS </h1>
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" class="myyPort">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Diplome">Les Diplomes</li>
              <li data-filter=".filter-Secourisme">Secourisme</li>
              <li data-filter=".filter-Hijama">Hijama</li>
              <li data-filter=".filter-Engins">Engins de Chantiers</li>
              <li data-filter=".filter-Préparateur">Préparateur Physique</li>
              <li data-filter=".filter-Modéliste">Modéliste et Styliste</li>
              <li data-filter=".filter-Pâtisserie">Pâtisserie Confiserie et Chocolaterie</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row g-0 portfolio-container">
             <!-- partiiiiiie 1 -->
             

             <?php
            if(!empty($result1))
            {
            foreach($result1 as $row1)
                     {           
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['type']; ?>">
                <img src = "Admin/<?php echo $row1['image']; ?>"  class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row1['image']; ?>" data-gallery="portfolio-gallery<?php echo $row1['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }       }
              ?>
             <?php
            if(!empty($result2))
            {
            foreach($result2 as $row2)
                     {          
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row2['type']; ?>">
                <img src = "Admin/<?php echo $row2['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row2['image']; ?>" data-gallery="portfolio-gallery<?php echo $row2['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }       }
              ?>
            <?php
            if(!empty($result3))
            {
            foreach($result3 as $row3)
                     {            
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row3['type']; ?>">
                <img src = "Admin/<?php echo $row3['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row3['image']; ?>" data-gallery="portfolio-gallery<?php echo $row3['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }    }   
              ?>
              <?php
            if(!empty($result4))
            {
            foreach($result4 as $row4)
                     {          
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row4['type']; ?>">
                <img src = "Admin/<?php echo $row4['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row4['image']; ?>" data-gallery="portfolio-gallery<?php echo $row4['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }  }     
              ?>
              <?php
            if(!empty($result5))
            {
            foreach($result5 as $row5)
                     {           
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row5['type']; ?>">
                <img src = "Admin/<?php echo $row5['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row5['image']; ?>" data-gallery="portfolio-gallery<?php echo $row5['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }      } 
              ?>
              <?php
            if(!empty($result6))
            {
            foreach($result6 as $row6)
                     {            
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row6['type']; ?>">
                <img src = "Admin/<?php echo $row6['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row6['image']; ?>" data-gallery="portfolio-gallery<?php echo $row6['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }     }  
              ?>
              <?php
            if(!empty($result7))
            {
            foreach($result7 as $row7)
                     {         
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $row7['type']; ?>">
                <img src = "Admin/<?php echo $row7['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="Admin/<?php echo $row7['image']; ?>" data-gallery="portfolio-gallery<?php echo $row7['type']; ?>" class="glightbox preview-link"><i class="fa-solid fa-magnifying-glass-plus" style="color: red;"></i></a>
              </div>
              </div>
                  <?php         
                  }    }   
              ?>
              <!-- partiiiiiie 1 -->
  
             
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
    </section>
        
      <!-- End Portfolio Section -->
    <div>
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
                  <div class="box" >
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