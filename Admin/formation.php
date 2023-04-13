<?php
session_start();
if (!isset($_SESSION['Role'])) {
    header("location:../login.php");
}
?>
<?php
        include('../db/db.php');
        $pdo_statement = $pdo_conn->prepare("select * from compte where Id = ? ");
                $pdo_statement -> bindParam(1,$_SESSION['Id']);
                $pdo_statement->execute();
                $resultPrf = $pdo_statement->fetch();
        $pdo_statement = $pdo_conn->prepare("SELECT * FROM formation");
        $pdo_statement->execute();
        $mesformations = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        $DefaultRes = $mesformations;
        $TypeFormation = '';
        $etat =false;
$etat1 =false;
$etat3 =false;

        if($_SERVER['REQUEST_METHOD'] == "POST" )
        { 

            if (isset($_POST['modifier'])) {
                $Sql = " UPDATE formation
                                SET Nom = ? ,
                                 type = ? ,
                                 niveau = ? 
                                WHERE Id = ? ";
            $pdo_statement =  $pdo_conn->prepare($Sql);
            $pdo_statement->bindParam(1, $_POST['nomformation']);
            $pdo_statement->bindParam(2, $_POST['type']);
            $pdo_statement->bindParam(3, $_POST['niveau']);
            $pdo_statement->bindParam(4, $_POST['idformation']);
                // var_dump($idcompte);
                $pdo_statement->execute();
                $etat1 =true;
            }
            if (isset($_POST["FilterType"])) {
                if ($_POST['FilterType'] == 'tous') {
                    $mesformations = $DefaultRes;
                    $TypeFormation = 'tous';
                } else {
                    $pdo_statement = $pdo_conn->prepare("SELECT * from formation  WHERE type = ?");
                    $pdo_statement->bindParam(1, $_POST['FilterType']);
                    $pdo_statement->execute();
                    $mesformations = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                    $TypeFormation = $_POST['FilterType'];
                }
            }
            if(isset($_POST['ajoute']))
            {
                $Sql = " INSERT into formation values(null,?,?,?)";
                $pdo_statement =  $pdo_conn->prepare($Sql);
                $pdo_statement->bindParam(1, $_POST['nom']);
                $pdo_statement->bindParam(2, $_POST['type']);
                $pdo_statement->bindParam(3, $_POST['niveau']);
                // var_dump($idcompte);
                $pdo_statement->execute();
                $etat =true;
            }
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Formations</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--  bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- incos page link -->
    <link rel="shortcut icon" href="../images/LOGO.jpg" type="image/x-icon">
<!-- toast links -->
<link rel="stylesheet" href="../toast/beautyToast.css">
    <script src="./scripts/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function() {
            //ajax modla 
            $('#staticBackdrop').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var internId = button.data('id');

                // Make an AJAX request to retrieve intern information
                $.ajax({
                    url: '../inc/ajaxModal.php',
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
                        url: '../inc/deleteFormation.php',
                        type: 'GET',
                        data: {
                            internId: internId
                        },
                        success: function(response) {
                            // Handle success
                            beautyToast.success({
                                title: 'Success', 
                                message: 'formation bien supprimer ' 
                                });
                                function greet() {
                            window.location="formation.php"
                            }
                            setTimeout(greet, 1000);
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
            <li class="NavSelect">
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
            if ($_SESSION['Role'] == 'SuperAdmin') {
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
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 chit-chat-layer1-left">
                <div class="work-progres">
                    <div class="chit-chat-heading">Manage Formations</div>
                    <div class="filtrage">
                        <div class="select">

                            <label for="select"> Type Formation</label>
                            <form action="" class="form-test" method="post">
                                <select name="FilterType" onchange="this.form.submit()" class="form-select form-select-sm" aria-label=".form-select-lg example">
                                    <option value="" disabled selected <?php if ($TypeFormation == '') {
                                                                            echo 'selected';
                                                                        } ?>>Open this select menu</option>
                                    <option value="tous" <?php if ($TypeFormation == 'tous') {
                                                                echo 'selected';
                                                            } ?>>All</option>
                                    <option value="Diplome" <?php if ($TypeFormation == 'Diplome') {
                                                                echo 'selected';
                                                            } ?>>Diplome</option>
                                    <option value="Formation" <?php if ($TypeFormation == 'Formation') {
                                                                    echo 'selected';
                                                                } ?>>Formation</option>
                                    <option value="Licence" <?php if ($TypeFormation == 'Licence') {
                                                                echo 'selected';
                                                            } ?>>Licence</option>
                                    <option value="Master" <?php if ($TypeFormation == 'Master') {
                                        echo 'selected';
                                    } ?>>Master</option>
                                </select>
                            </form>
                        </div>
                        <button type="button" class="btn btn-secondary" style="margin-left: 21em;" data-bs-toggle="modal" data-bs-target="#mymodal">
                            Ajouter <i class="fa-solid fa-user-plus" style="color: #ffffff; margin-left: 7px;"></i> </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom de Formation </th>
                                    <th>Type</th>
                                    <th>Niveau Scolaire</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $parID = 1;
                                foreach ($mesformations as $formation) {
                                ?>
                                    <tr>
                                        <td><?= $parID ?></td>
                                        <td><?= $formation['Nom'] ?></td>
                                        <td><?= $formation['type'] ?></td>
                                        <td><?= $formation['niveau'] ?></td>
                                        <td>
                                            <button class="btn-actions" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $formation['Id']; ?>"> <i class='bx bx-pencil'></i></button>
                                        </td>
                                        <td>

                                            <button class="btn-actions  delete-intern" name="delete" data-id="<?= $formation['Id']; ?>"><i class='bx bx-trash-alt'></i></button>

                                        </td>
                                    </tr>
                                <?php
                                    $parID = $parID + 1;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <!-- end  home section-->

    <!-- Modal
    -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nom Formation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body modal-body02">

                        <!--    content de modal  -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">retour</button>
                        <button type="submit" class="btn btn-primary" name="modifier">modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- start modal add formation -->
    <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Ajoute Nouveau formation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
            <div class="modal-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>Nom de formation </th>
                  <td><input type="text" name="nom"  required style=" padding:3px;"></td>
                </tr>
                <tr>
                  <th>Type de formation </th>
                  <td>
                  <select name="type"  class="form-select form-select-sm" aria-label=".form-select-lg example" required>
                                <option value="" disabled selected>Open this select menu</option>
                                <option value="Diplome">Diplome</option>
                                <option value="Formation">Formation</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                            </select>
                  </td>
                </tr>
                <tr>
                  <th>Niveau Scolaire </th>
                  <td>
                  <select name="niveau"  class="form-select form-select-sm" aria-label=".form-select-lg example" required>
                                <option value="" disabled selected>Open this select menu</option>
                                <option value="Aucun">Aucun&nbsp; بدون</option>
                                <option value="9AEF">9AEF &nbsp; الثالثة اعدادي</option>
                                <option value="2BAC">2ème Année BAC   الثانية بكالوريا</option>
                                <option value="BACOuPlus"> BAC ou Plus &nbsp; بكالوريا فما فوق</option>
                                <option value="BAC+2">BAC +2(Technicien / Technicien spécialisé / DEUG)</option>
                                <option value="BAC+3">BAC +3(Licence / Bachelor)</option>
                            </select>
                  </td>
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
    </div>
    <!-- end  modal box  -->
    <!-- Confirmation dialog box -->
    <div id="confirmation-dialog">
        <p>Voulez-vous vraiment supprimer ce formation?</p>
        <button class="btn btn-primary confirm-yes">oui</button>
        <button class="btn btn-secondary confirm-no">No</button>
    </div>

    <script src="./assets/script.js"></script>
    <script src="../toast/beautyToast.js"></script>
    <?php

    if ($etat ==true ) {

        echo "<script>
            beautyToast.success({
            title: 'Success', 
            message: 'formation bien ajoute ' 
            });
            </script>";
            echo '<script>
            function greet() {
            window.location="formation.php"
            }
            setTimeout(greet, 1000); </script>';
            $etat = false;
    }
    if ($etat1 ==true ) {

        echo "<script>
            beautyToast.success({
            title: 'Success', 
            message: 'formation bien modifier ' 
            });
            </script>";
            echo '<script>
            function greet() {
            window.location="formation.php"
            }
            setTimeout(greet, 1000); </script>';
            $etat1 = false;
    }
   
    ?>
</body>

</html>