<?php
session_start();
if (!isset($_SESSION['Role']) ) {

  header("location:../login.php");
}
if( $_SESSION['Role'] !== 'SuperAdmin')
{
  header("location:../login.php");
}
?>
<?php

include('../db/db.php');
$pdo_statement = $pdo_conn->prepare("select * from compte where Id = ? ");
$pdo_statement -> bindParam(1,$_SESSION['Id']);
$pdo_statement->execute();
$resultPrf = $pdo_statement->fetch();

$pdo_statement = $pdo_conn->prepare("SELECT * FROM compte");
$pdo_statement->execute();
$mesComptes = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['modifier'])) {
    $Sql = " UPDATE compte
                                    SET Nom = ? ,Prenom = ? ,Email = ? ,UserName = ? ,Password = ? 
                                    WHERE Id = ? ";
    $pdo_statement =  $pdo_conn->prepare($Sql);
    $pdo_statement->bindParam(1, $_POST['nom']);
    $pdo_statement->bindParam(2, $_POST['prenom']);
    $pdo_statement->bindParam(3, $_POST['email']);
    $pdo_statement->bindParam(4, $_POST['username']);
    $pdo_statement->bindParam(5, $_POST['password']);
    $pdo_statement->bindParam(6, $_POST['id']);

    // var_dump($idcompte);
    $pdo_statement->execute();
    header("location:gererComptes.php");
  }
  if (isset($_POST['ajoute'])) {
     // Display the results
    
    $sql = 'INSERT INTO `compte` (`Nom`, `Prenom`, `Email`, `UserName`, `Password`) VALUES ( ?,?, ?,?,?)';
    $pdo_statement =  $pdo_conn->prepare($sql);
    $pdo_statement->bindParam(1, $_POST['nom']);
    $pdo_statement->bindParam(2, $_POST['prenom']);
    $pdo_statement->bindParam(3, $_POST['email']);
    $pdo_statement->bindParam(4, $_POST['username']);
    $pdo_statement->bindParam(5,  $_POST['password']);
    $pdo_statement->execute();
    header("location:gererComptes.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title> Gerer Les Comptes </title>
  <link rel="stylesheet" href="./assets/style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Headland One">
  <!-- bootstrap file link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- incos page link -->
  <link rel="shortcut icon" href="../images/LOGO.jpg" type="image/x-icon">
  
  <script src="./scripts/jquery-3.6.3.min.js"></script>
  <script>
    $(document).ready(function() {
      //ajax modla 
      $('#staticBackdrop').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var internId = button.data('id');

          // Make an AJAX request to retrieve intern information
          $.ajax({
            url: '../inc/modalCompte.php',
            type: 'GET',
            data: {
              internId: internId
            },
            success: function(response) {
              // Display the retrieved intern information in the modal body
              $('#staticBackdrop .modal-body').html(response);
            },
            error: function(xhr, status, error) {
              // Handle error
            }
          });
      });
                // ajax deleting formation
            // Add a click event listener to the delete button
            $('.delete-intern').on('click', function() {
                // Get the ID of the intern to delete from the data-id attribute
                var internId = $(this).data('id');
                // Show the confirmation dialog to the user
                $('#confirmation-dialog').show();
                // Add click event listeners to the confirmation buttons
                $('.confirm-yes').on('click', function() {
                    
                    // If the user confirms the deletion, make an AJAX request to delete the intern
                    $.ajax({
                        url: '../inc/deleteCompte.php',
                        type: 'GET',
                        data: {
                            internId: internId
                        },
                        success: function(response) {
                            // Handle success
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                        }
                    });
                    // Hide the confirmation dialog
                    $('#confirmation-dialog').hide();
                });
                $('.confirm-no').on('click', function() {
                    // If the user cancels the deletion, hide the confirmation dialog
                    $('#confirmation-dialog').hide();
                });
            });
    });
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
      <li>
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
      <li class="NavSelect">
        <a href="gererComptes.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Gestion Des Comptes</span>
        </a>
        <span class="tooltip">Gestion Des Comptes</span>
      </li>
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
    <div class="text">Espace <?php echo $_SESSION["Role"] . " : Bonjour " . $resultPrf['Nom'] . ' ' . $resultPrf['Prenom']; ?> </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 chit-chat-layer1-rit ourmarg ">
        <div class="work-progres">
          <div class="chit-chat-heading"> <i class="fa-solid fa-users" style="color: #000000;"></i> Gestion Des Comptes</div>
          <button type="button" class="btn btn-secondary" style="float: right; margin-bottom: 10px;" data-bs-toggle="modal" data-bs-target="#mymodal"> Ajouter <i class="fa-solid fa-user-plus" style="color: #ffffff; margin-left: 7px;"></i> </button>
          <div style="clear: both;"></div>
          <div class="table-responsive">
            <table class="table table-hover tableGer">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom </th>
                  <th>Prenom </th>

                  <th>Email</th>
                  <th>Nom d'utilisateur</th>
                  <th>Mot De Passe</th>
                  <th>Role</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $id = 1;
                foreach ($mesComptes as $row) {
                ?>
                  <tr>
                    <td><?= $id ?></td>
                    <td><?= $row['Nom'] ?></td>
                    <td><?= $row['Prenom'] ?></td>
                    <td><?= $row['Email'] ?></td>
                    <td><?= $row['UserName'] ?></td>
                    <td><?=
                    $row['Password']
                   
                    
                    ?>
                    </td>
                    <?php
                    if ($row['Role'] == 'SuperAdmin') {
                    ?>
                      <td><span class="label label-danger">Super Admin</span></td>
                    <?php
                    } else {
                    ?>
                      <td><span class="label label-primary">Admin</span></td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($row['Role'] == 'SuperAdmin') {
                    ?>
                      <td>
                        <button class="btn01" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $row['Id'] ?>"> <i class='fa-solid fa-user-pen' style='color:black;font-size:32px'></i></button>
                      </td>
                      <td>
                      </td>
                    <?php
                    } else {
                    ?>
                      <td>
                        <button class="btn01" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $row['Id'] ?>"> <i class='fa-solid fa-user-pen' style='color:black;font-size:32px'></i></button>
                      </td>
                      <td>
                        <button class="btn02 delete-intern" name="delete"   data-id="<?= $row['Id']; ?>"> <i class="fa-solid fa-trash-can" style='color:black;font-size:32px '></i></button>
                      </td>
                    <?php
                    }
                    ?>

                  </tr>
                <?php
                  $id = $id + 1;
                }

                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </section>
  <!-- end  home section-->
  <!-- start modal de modifier -->
  <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            details de compte
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">
              retour
            </button>
            <button type="submit" class="btn btn-primary" name="modifier">modifier</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Ajoute un Compte
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>Nom</th>
                  <td><input type="text" name="nom" placeholder="nom"></td>
                </tr>
                <tr>
                  <th>Prenom</th>
                  <td><input type="text" name="prenom" placeholder="prenom"></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><input type="text" name="email" placeholder="email"></td>
                </tr>
                <tr>
                  <th>Nom d' utilisateur</th>
                  <td><input type="text" name="username" placeholder="nom d'utilisateur"></td>
                </tr>
                <tr>
                  <th>mot de passe</th>
                  <td><input type="text" name="password" placeholder="mot de passe"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
              retour
            </button>
            <button type="submit" class="btn btn-primary" name="ajoute">Ajoute</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end  modal box  -->
    <!-- Confirmation dialog box -->
    <div id="confirmation-dialog">
        <p>Voulez-vous vraiment supprimer ce Compte !</p>
        <button class="btn btn-primary confirm-yes">oui</button>
        <button class="btn btn-secondary confirm-no">No</button>
    </div>
  <script src="./assets/script.js"></script>

</body>

</html>