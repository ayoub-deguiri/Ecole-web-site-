<?php
        session_start();
        if (!isset($_SESSION['Role']))  {
            header("location:../../login.php");
        }
?>
<?php
        include('../../db/db.php');
        $pdo_statement = $pdo_conn->prepare("SELECT * FROM compte where Id = ?");
        $pdo_statement->bindParam(1, $_SESSION['Id']);
        $pdo_statement->execute();
        $compte = $pdo_statement->fetch();
        $etat =false; 
        $pdo_statement = $pdo_conn->prepare("select * from compte where Id = ? ");
                $pdo_statement -> bindParam(1,$_SESSION['Id']);
                $pdo_statement->execute();
                $resultPrf = $pdo_statement->fetch();
        if($_SERVER['REQUEST_METHOD'] == "POST" )
        { 
          if(isset($_POST['modifier']))
          {
            $sql = "UPDATE COMPTE
              SET Nom=?,Prenom=? ,UserName=? ,Email=?,Password=? WHERE Id=? 
            ";
            $pdo_statement =$pdo_conn ->prepare($sql);
            $pdo_statement->bindParam(1, $_POST['nom']);
            $pdo_statement->bindParam(2, $_POST['prenom']);
            $pdo_statement->bindParam(3, $_POST['username']);
            $pdo_statement->bindParam(4, $_POST['email']);
            $pdo_statement->bindParam(5, $_POST['password']);
            $pdo_statement->bindParam(6, $compte['Id']);
            $pdo_statement->execute();
            $etat =true; 
          }
        }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Modifier Profile </title>
    <link rel="stylesheet" href="./assets/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">

      <!-- bootstrap file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- incos page link -->
<link rel="shortcut icon" href="../../images/LOGO.jpg" type="image/x-icon">
<!-- toast links -->
<link rel="stylesheet" href="../../toast/beautyToast.css">
   </head>
<body>
 <!-- start  slide bar-->
 <div class="sidebar">
  <div class="logo-details">
    <i class='bx bxs-dashboard icon'></i>
    <div class="logo_name">Ecole Jah Informatique </div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li >
      <a href="index.php">
        <i class='bx bx-home'></i>
        <span class="links_name">Acceuil</span>
      </a>
      <span class="tooltip">Acceuil</span>
    </li>
    <li>
      <a href="inscription.php">
        <i class='bx bx-book-bookmark'></i>
        <span class="links_name">Inscriptions</span>
      </a>
      <span class="tooltip">Inscriptions</span>
    </li>
    <li>
      <a href="formation.php">
        <i class='bx bx-chat'></i>
        <span class="links_name">Formations</span>
      </a>
      <span class="tooltip">Formations</span>
    </li>
    <li>
      <a href="modifierNombres.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Modifier Nombres</span>
      </a>
      <span class="tooltip">Modifier Nombres</span>
    </li>
    <li>
      <a href="gererimages.php">
        <i class='bx bx-images'></i>
        <span class="links_name">Gestion Des Images</span>
      </a>
      <span class="tooltip">Gestion Des Images</span>
    </li>
    <?php 
        if( $_SESSION['Role'] == 'SuperAdmin')
          {
            echo '
            <li>
            <a href="gererComptes.php">
              <i class="bx bx-user"></i>
              <span class="links_name">Gestion Des Comptes</span>
            </a>
            <span class="tooltip">Gestion Des Comptes</span>
          </li>';
          }
      ?>
    <li class="NavSelect">
      <a href="modifierProfile.php">
        <i class='bx bx-cog'></i>
        <span class="links_name">Modifier Profile</span>
      </a>
      <span class="tooltip">Modifier Profile</span>
    </li>
    <li class="profile">
                <div class="profile-details">
                    <img src="../../images/homme-daffaire.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name"><?php echo  $resultPrf['Nom'].' '.$resultPrf['Prenom'];  ?></div>
                        <div class="job"><?php echo $_SESSION["Role"] ?></div>
                    </div>
                </div>
                <a href="seDeconnecter.php">
                <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
  </ul>
</div>

<!-- end slide bar-->
  <!-- start home section-->
    <section class="home-section">
    <div class="text">Espace <?php echo $_SESSION["Role"]." : Bonjour ". $resultPrf['Nom'].' '.$resultPrf['Prenom']; ?> </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 chit-chat-layer1-rit">    	
              <div class="geo-chart">
                <section id="charts1">
                  <!--inner block start here-->
                      <div>  	
                        <div class="signup-head">
                          <h1><i class='bx bx-user-circle'></i>  Modifier Profile</h1>
                        </div>
                        <div class="signup-block">
                          <form method="post">
                            <input type="text" name="nom" placeholder="Nom" required="" value="<?= $compte['Nom']?>">
                            <input type="text" name="prenom" placeholder="Prenom" required="" value="<?= $compte['Prenom']?>">
                            <input type="text" name="username" placeholder="Nom d'utilisateur" required="" value="<?= $compte['UserName']?>">
                            <input type="email" name="email" placeholder="Email" required="" value="<?= $compte['Email']?>">
                            <input type="text" name="password" class="lock" placeholder="Password" value="<?= $compte['Password']?>">
                            <input type="submit" name="modifier"  value="Valider">														
                          </form>
                        </div>
                      </div>
                  <!--inner block end here-->
                </section>				
              </div>
          </div>   	
          <div class="col-md-2"></div>
        </div>
    </section>
  <!-- end  home section-->
  <script src="./assets/script.js"></script>
  <!-- TOAST LINK-->
  <script src="../../toast/beautyToast.js"></script>
  <?php

if($etat == true){

echo "<script>
beautyToast.success({
title: 'Success', 
message: 'Information Bien Modifier.' 
});
</script>";
echo '<script>
function greet() {
window.location="modifierProfile.php"
}
setTimeout(greet, 1500); </script>';
$etat = false;
}

?>
</body>
</html>
