<?php
session_start();
if (!isset($_SESSION['Role'])) {
    header("location:../login.php");
}
?>
<?php
include('../db/db.php');
$pdo_statement = $pdo_conn->prepare("SELECT * FROM formation");
$pdo_statement->execute();
$mesformations = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['modifier'])) {
    $Sql = " UPDATE formation
                        SET Nom = ? 
                        WHERE Id = ? ";
    $pdo_statement =  $pdo_conn->prepare($Sql);
    $pdo_statement->bindParam(1, $_POST['nomformation']);
    $pdo_statement->bindParam(2, $_POST['idformation']);
    // var_dump($idcompte);
    $pdo_statement->execute();
    header("location:formation.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Formations </title>
    <link rel="stylesheet" href="./assets/style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--  bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
            <li>
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
                        <div class="name"><?php echo  $_SESSION['Nom'].' '.$_SESSION['Prenom'];  ?></div>
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
        <div class="text">Bonjour Mr
            <?php
            echo $_SESSION['Nom'] . " " . $_SESSION['Prenom'];
            ?>
        </div>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 chit-chat-layer1-left">
                <div class="work-progres">
                    <div class="chit-chat-heading">Manage Formations</div>
                    <div class="filtrage">
                        <div class="select">
                            <label for="select"> Choisir Type </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom de Formation </th>
                                    <th>Type</th>
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
                                        <td>
                                            <button class="btn-actions" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $formation['Id']; ?>"> <i class='bx bx-pencil'></i></button>
                                        </td>
                                        <td>
                                            
                                                <button class="btn-actions  delete-intern" name="delete"   data-id="<?= $formation['Id']; ?>"><i class='bx bx-trash-alt'></i></button>
                                            
                                        </td>
                                    </tr>
                                <?php
                                $parID = $parID + 1;}
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


    <!-- Confirmation dialog box -->
    <div id="confirmation-dialog">
        <p>Voulez-vous vraiment supprimer ce formation?</p>
        <button class="btn btn-primary confirm-yes">oui</button>
        <button class="btn btn-secondary confirm-no">No</button>
    </div>

    <script src="./assets/script.js"></script>

</body>

</html>