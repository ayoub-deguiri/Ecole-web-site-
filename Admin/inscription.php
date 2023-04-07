<<<<<<< HEAD
<?php
// Start the session
session_start();
if(!isset($_SESSION['Role']))
    {
        header("location:inscription.php");
    }
?>
<?php
                include('../db/db.php');
                $pdo_statement = $pdo_conn->prepare("select * from inscription where Type = 'Accepter' order by DateInscription DESC");
                $pdo_statement->execute();
                $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                $DefaultRes = $result;
                $TypeFormation = '';
                $dateMYY = '';
                
                if($_SERVER['REQUEST_METHOD'] == "POST" )
                      {   
                            if(isset($_POST["FilterType"])){
                                if($_POST['FilterType'] == 'tous' )
                                  {
                                    $result = $DefaultRes;
                                    $TypeFormation = 'tous';
                                  }
                                else
                                {
                                  $pdo_statement = $pdo_conn->prepare("SELECT * from inscription  WHERE Type = 'Accepter' and TypeFormation = ? order by DateInscription DESC");
                                  $pdo_statement -> bindParam(1,$_POST['FilterType']);
                                  $pdo_statement->execute();
                                  $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                                  $TypeFormation = $_POST['FilterType'];
                                }
                                
                              }
                            if(isset($_POST["FilterDate"])){
                                  $pdo_statement = $pdo_conn->prepare("SELECT * from inscription  WHERE Type = 'Accepter' and DateInscription = ?");
                                  $pdo_statement -> bindParam(1,$_POST['FilterDate']);
                                  $pdo_statement->execute();
                                  $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
                                  $dateMYY = $_POST["FilterDate"];
                              }
                      }
?>

=======
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>inscriptions</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--  bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<<<<<<< HEAD

        <script src="./scripts/jquery-3.6.3.min.js"></script>
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
=======
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
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
<<<<<<< HEAD
        <a href="acceuil.php">
=======
        <a href="acceuil.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-home'></i>
          <span class="links_name">Acceuil</span>
        </a>
        <span class="tooltip">Acceuil</span>
      </li>
      <li class="NavSelect">
<<<<<<< HEAD
        <a href="inscription.php">
=======
        <a href="inscription.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-book-bookmark'></i>
          <span class="links_name">Inscriptions</span>
        </a>
        <span class="tooltip">Inscriptions</span>
      </li>
      <li>
<<<<<<< HEAD
        <a href="formation.php">
=======
        <a href="formation.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-chat'></i>
          <span class="links_name">Formations</span>
        </a>
        <span class="tooltip">Formations</span>
      </li>
      <li>
<<<<<<< HEAD
        <a href="modifierNombres.php">
=======
        <a href="modifierNombres.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Modifier Nombres</span>
        </a>
        <span class="tooltip">Modifier Nombres</span>
      </li>
      <li>
<<<<<<< HEAD
        <a href="gererimages.php">
=======
        <a href="gererimages.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-images'></i>
          <span class="links_name">Gestion Des Images</span>
        </a>
        <span class="tooltip">Gestion Des Images</span>
      </li>
      <li>
<<<<<<< HEAD
        <a href="gererComptes.php">
=======
        <a href="gererComptes.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-user'></i>
          <span class="links_name">Gestion Des Comptes</span>
        </a>
        <span class="tooltip">Gestion Des Comptes</span>
      </li>
      <li>
<<<<<<< HEAD
        <a href="modifierProfile.php">
=======
        <a href="modifierProfile.html">
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
          <i class='bx bx-cog'></i>
          <span class="links_name">Modifier Profile</span>
        </a>
        <span class="tooltip">Modifier Profile</span>
      </li>
      <li class="profile">
<<<<<<< HEAD
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
=======
        
        <div class="profile-details">
          <img src="../images/homme-daffaire.png" alt="profileImg">
          <div class="name_job">
            <div class="name">Prem Shahi</div>
            <div class="job">Web designer</div>
          </div>
        </div>
       
        <i class='bx bx-log-out' id="log_out"></i>
        
      </li>
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
    </ul>
  </div>

  <!-- end slide bar-->

    <!-- start home section-->
    <section class="home-section">
<<<<<<< HEAD
    <div class="text">Espace <?php echo $_SESSION["Role"]." : Bonjour ". $_SESSION['Nom'].' '.$_SESSION['Prenom']; ?> </div>
=======
        <div class="text">Bonjour Mr Jamal Alfaa</div>
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 chit-chat-layer1-left">
                <div class="work-progres">
                    <div class="chit-chat-heading">Manage Inscription</div>
                    <div class="filtrage">
                        <div class="select">
<<<<<<< HEAD
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
=======
                            <label for="select"> Type Formation</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="date">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" />
                        </div>
                    </div>
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Nom Complet</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                            <?php
                if(!empty($result))
                {
                            $parID = 1;
                  foreach($result as $row)
                          {
                              echo '<tr>
                                          <td>' .$parID. '</td>
                                          <td>' .$row["DateInscription"]. '</td>
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
                                          
                                  </tr>';
                                  $parID = $parID + 1;
                          }
                  echo '</tbody>
                  ' ;
                }
        ?>
                        </form>
=======
                                <tr>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
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
<<<<<<< HEAD
=======
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Nom Complet</th>
                                <td>test test</td>
                            </tr>
                            <tr>
                                <th>CIN</th>
                                <td>ee670894</td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td>loudaya city</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>066578945</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>vodka@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Niveau Scolaire</th>
                                <td>bdoun</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>formation</td>
                            </tr>
                            <tr>
                                <th>Le Choix</th>
                                <td>choix choix xhoix 1</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>22/11/2002</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="photos">
                        <img src="../images/diplome/LICENCE.jpg" alt="" id="img" />
                        <img src="../images/diplome/LICENCE.jpg" alt="" id="img" />
                        <img src="../images/diplome/LICENCE.jpg" alt="" id="img" />
                        <img src="../images/diplome/LICENCE.jpg" alt="" id="img" />
                        <img src="../images/diplome/LICENCE.jpg" alt="" id="img" />
                    </div>
>>>>>>> f791e4316a94f78ef30309688a8fe8ebb1e7057d
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/script.js"></script>
</body>

</html>