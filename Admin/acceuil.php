<?php
// Start the session
session_start();
if(!isset($_SESSION['Role']))
    {
        header("location:../login.php");
    }
?>
<?php 
                // connect db 
                include('../db/db.php');
                $pdo_statement = $pdo_conn->prepare("select * from compte where Id = ? ");
                $pdo_statement -> bindParam(1,$_SESSION['Id']);
                $pdo_statement->execute();
                $resultPrf = $pdo_statement->fetch();


                // touts inscripitons
                $pdo_statement = $pdo_conn->prepare("select * from inscription where Type = 'encoure' order by DateInscription,HeureInscription DESC");
                $pdo_statement->execute();
                $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                $DefaultRes = $result;

                // inscripitons by filter month
                $mydate = date('m');
                $pdo_statement1 = $pdo_conn->prepare("SELECT COUNT(1)  FROM `inscription` as Total WHERE MONTH(DateInscription) = ?");
                $pdo_statement1 -> bindParam(1,$mydate);
                $pdo_statement1->execute();
                $CountMounth = $pdo_statement1->fetchColumn();

                // inscripitons by filter day
                $myDay = date("Y-m-d");
                $pdo_statement1 = $pdo_conn->prepare("SELECT COUNT(1)  FROM `inscription` as Total2 WHERE  DateInscription = ?");
                $pdo_statement1 -> bindParam(1,$myDay);
                $pdo_statement1->execute();
                $CountDay = $pdo_statement1->fetchColumn();
                $TypeFormation = '';
                $dateMYY = '';
                $etat = $etat2 = false;
                if($_SERVER['REQUEST_METHOD'] == "POST" )
                      {   
                            // inscripitons by filter type
                            if(isset($_POST["FilterType"])){
                                if($_POST['FilterType'] == 'tous' )
                                  {
                                    $result = $DefaultRes;
                                    $TypeFormation = 'tous';
                                  }
                                else
                                {
                                  $pdo_statement = $pdo_conn->prepare("SELECT * from inscription  WHERE Type = 'encoure' and TypeFormation = ? order by DateInscription,HeureInscription DESC");
                                  $pdo_statement -> bindParam(1,$_POST['FilterType']);
                                  $pdo_statement->execute();
                                  $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                                  $TypeFormation = $_POST['FilterType'];
                                }
                                
                              }
                                              // inscripitons by filter date
                            if(isset($_POST["FilterDate"])){
                                  $pdo_statement = $pdo_conn->prepare("SELECT * from inscription  WHERE Type = 'encoure' and DateInscription = ? order by HeureInscription DESC");
                                  $pdo_statement -> bindParam(1,$_POST['FilterDate']);
                                  $pdo_statement->execute();
                                  $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                                  $dateMYY = $_POST["FilterDate"];
                              }
                                              // accepter insciption
                            if(isset($_POST["btn1"])){
                                  $pdo_statement = $pdo_conn->prepare("UPDATE inscription SET Type = 'Accepter' WHERE `inscription`.`Id` = ?");
                                  $pdo_statement -> bindParam(1,$_POST['btn1']);
                                  $pdo_statement->execute();
                                  $etat =true ;
                                  
                              }
                                              // delete inscripiton
                              if(isset($_POST["btn2"])){
                                $pdo_statement = $pdo_conn->prepare("DELETE FROM `inscription` WHERE `inscription`.`Id` = ?");
                                $pdo_statement -> bindParam(1,$_POST['btn2']);
                                $pdo_statement->execute();
                                $etat2 =true ;
                              }
                      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
            <meta charset="UTF-8">
            <title> Acceuil </title>
            <!-- Style Link -->
            <link rel="stylesheet" href="./assets/style.css">

            <!-- Boxicons CDN Link -->
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

              <!--  bootstrap links-->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
              crossorigin="anonymous">
              </script>

              <!-- awesom link -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

              <!-- incos page link -->
              <link rel="shortcut icon" href="../images/LOGO.jpg" type="image/x-icon">

              <!-- jq Link -->
              <script src="./scripts/jquery-3.6.3.min.js"></script>

              <!-- toast links -->
              <link rel="stylesheet" href="../toast/beautyToast.css">
    <script>
        $(document).ready(function() {
            //ajax modla 
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var internId = button.data('id');
                
                // Make an AJAX request to retrieve intern information
                $.ajax({
                    url: '../inc/ajaxModal2.php',
                    type: 'GET',
                    data: {
                        internId: internId
                    },
                    success: function(response) {
                        // Display the retrieved intern information in the modal body
                        $('#exampleModal .modal-body').html(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                    }
                });
            });
          });
            // ajax deleting formation
        </script>
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
      <li class="NavSelect">
        <a href="acceuil.php">
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
      <li>
        <a href="modifierProfile.php">
          <i class='bx bx-cog'></i>
          <span class="links_name">Modifier Profile</span>
        </a>
        <span class="tooltip">Modifier Profile</span>
      </li>
      <li class="profile">
                <div class="profile-details">
                    <img src="../images/homme-daffaire.png" alt="profileImg">
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
    <div class="row row-container">
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
          <div class="row">
          <div class="col-md-9 market-update-left">
            <h3><?php echo $CountDay; ?></h3>
            <h4>inscriptions de ce jour <br> <?php echo $myDay ?></h4>
          </div>
          <div class="col-md-3 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
        </div>
      </div>
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="row">
          <div class="col-md-9 market-update-left">
            <h3><?php echo $CountMounth;  ?></h3>
            <h4>inscriptions de ce mois <br> <?php echo $mydate; ?> </h4>
          </div>
          <div class="col-md-3 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 chit-chat-layer1-left">
        <div class="work-progres">
            <div class="chit-chat-heading"></div>
            <div class="filtrage">
                <div class="select">
                <label for="select"> Type Formation</label>
                  <form method="POST" action="">
                    
                      <select name="FilterType" onchange="this.form.submit()" class="form-select form-select-sm" aria-label=".form-select-lg example">
                          <option value="" disabled <?php if($TypeFormation == '' ){echo 'selected';} ?>>Open this select menu</option>
                          <option value="tous" <?php if($TypeFormation == 'tous' ){echo 'selected';} ?>>All</option>
                          <option value="Diplome" <?php if($TypeFormation == 'Diplome' ){echo 'selected';} ?>>Diplome</option>
                          <option value="Formation" <?php if($TypeFormation == 'Formation' ){echo 'selected';} ?>>Formation</option>
                          <option value="FEDE" <?php if($TypeFormation == 'FEDE' ){echo 'selected';} ?>>FEDE</option>
                      </select>
                  </form>
                </div>
                <div class="date">
                <form method="POST" action="">
                    <label for="date">Date</label>
                    <input name="FilterDate" value="<?php echo $dateMYY ?>" onchange="this.form.submit()" type="date" id="date" />
                </form>
                </div>
            </div>
            <form method="POST" action="" onclick="this.form.submit()">
            <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date D'inscription</th>
                                    <th>Heure D'inscription</th>
                                    <th>Nom Complet</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Type De Choix </th>
                                    <th>Details</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php
                if(!empty($result))
                {
                            $parID = 1;
                  foreach($result as $row)
                          {
                           // 
                              
                              echo '<tr>
                                          <td>' .$parID. '</td>
                                          <td>' .$row["DateInscription"]. '</td>
                                          <td>' .$row["HeureInscription"]. '</td>
                                          <td>' .$row["NomComplete"]. '</td>
                                          <td>' .$row["Tele"]. '</td>
                                          <td>' .$row["Email"]. '</td>
                                          <td>' .$row["TypeFormation"]. '</td>
                                          <td>
                                              <button type="button" data-id="'.$row['Id'] .'" class="btn btn-info" data-bs-toggle="modal"
                                                  data-bs-target="#exampleModal">
                                                  details
                                              </button>
                                          </td>
                                          <td>
                                          
                                          <button value="'.$row["Id"].'" name="btn1" class="btn-actions"> <i class="bx bxs-user-check"></i></button>
                                          </td>
                                          <td>
                                          
                                            <button value="'.$row["Id"].'" name="btn2" class="btn-actions"><i class="bx bxs-trash-alt"></i></button>
                                          
                                          </td>
                                          
                                  </tr>';
                                  $parID = $parID + 1;
                          }
                  echo '</tbody>
                  ' ;
                }
        ?>
        </form>
        </table>
              </div>
        </div>
    </div>
    <div class="col-md-1"></div>
  </div>
  </section>
  <!-- end  home section-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                      details d' inscription
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                    retour
                  </button>
              </div>
          </div>
      </div>
  </div>

  <script src="./assets/script.js"></script>
<!-- TOAST LINK-->
<script src="../toast/beautyToast.js"></script>
<?php

                if($etat ==true){
          
          echo "<script>
          beautyToast.success({
            title: 'Success', 
            message: 'Inscription Bien Accepter.' 
          });
          </script>";
          echo '<script>
          function greet() {
            window.location="acceuil.php"
           }
           setTimeout(greet, 1500); </script>';
          $etat = false;
                }
                if($etat2 ==true){
          
                  echo "<script>
                  beautyToast.success({
                    title: 'Success', 
                    message: 'Inscription bien Supprimer.' 
                  });
                  </script>";
                  echo '<script>
                  function greet() {
                    window.location="acceuil.php"
                   }
                   setTimeout(greet, 1500); </script>';
                  $etat2 = false;
                        }
              

?>
</body>

</html>