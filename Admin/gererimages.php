<?php
// Start the session
session_start();
if(!isset($_SESSION['Role']))
    {
        header("location:Acceuil.php");
    }
?>
<?php 
include('../db/db.php');
if($_SERVER['REQUEST_METHOD'] == "POST" )
{  
  if(isset($_POST['submit'])){

    // Count total files
    $countfiles = count($_FILES['files']['name']);
  
    // Prepared statement
    $query = "INSERT INTO images (name,image,type) VALUES(?,?,?)";

    $statement = $pdo_conn->prepare($query);
    $FileeeeTy = $_POST['FilterTypeImg'];

    // Loop all files
    for($i=0;$i<$countfiles;$i++){

      // File name
      $filename = $_FILES['files']['name'][$i];

      // Location
      if($FileeeeTy == 'Diplome')
        {
          $target_file = 'Images/Diplome/'.$filename;
        }
      elseif($FileeeeTy == 'Formation')
        {
          $target_file = 'Images/Formation/'.$filename;
        }

      // file extension
      $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
      $file_extension = strtolower($file_extension);

      // Valid image extension
      $valid_extension = array("png","jpeg","jpg","PNG","JPEG","JPG");

      if(in_array($file_extension, $valid_extension)){

        // Upload file
        if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){

            // Execute query
      $statement->execute(array($filename,$target_file,$_POST['FilterTypeImg']));

        }
      }
  
    }
    echo "File upload successfully";
  }
  if(isset($_POST['submit2'])){

    // Count total files
    $countfiles = count($_FILES['files1']['name']);
  
    // Prepared statement
    $query = "INSERT INTO flayers (name,image,type) VALUES(?,?,?)";

    $statement = $pdo_conn->prepare($query);
    $FileeeeTy = $_POST['FilterTypeFLy'];

    // Loop all files
    for($i=0;$i<$countfiles;$i++){

      // File name
      $filename = $_FILES['files1']['name'][$i];

      // Location
      if($FileeeeTy == 'Diplome')
        {
          $target_file = 'Flayers/Diplome/'.$filename;
        }
      elseif($FileeeeTy == 'Formation')
        {
          $target_file = 'Flayers/Formation/'.$filename;
        }

      // file extension
      $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
      $file_extension = strtolower($file_extension);

      // Valid image extension
      $valid_extension = array("png","jpeg","jpg","PNG","JPEG","JPG");

      if(in_array($file_extension, $valid_extension)){

        // Upload file
        if(move_uploaded_file($_FILES['files1']['tmp_name'][$i],$target_file)){

            // Execute query
      $statement->execute(array($filename,$target_file,$_POST['FilterTypeFLy']));

        }
      }
  
    }
    echo "File upload successfully";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Gestion Des Images </title>
    <link rel="stylesheet" href="./assets/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Headland One">

      <!-- bootstrap file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
      <a href="acceuil.html">
        <i class='bx bx-home'></i>
        <span class="links_name">Acceuil</span>
      </a>
      <span class="tooltip">Acceuil</span>
    </li>
    <li>
      <a href="inscription.html">
        <i class='bx bx-book-bookmark'></i>
        <span class="links_name">Inscriptions</span>
      </a>
      <span class="tooltip">Inscriptions</span>
    </li>
    <li>
      <a href="formation.html">
        <i class='bx bx-chat'></i>
        <span class="links_name">Formations</span>
      </a>
      <span class="tooltip">Formations</span>
    </li>
    <li>
      <a href="modifierNombres.html">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Modifier Nombres</span>
      </a>
      <span class="tooltip">Modifier Nombres</span>
    </li>
    <li class="NavSelect">
      <a href="gererimages.html">
        <i class='bx bx-images'></i>
        <span class="links_name">Gestion Des Images</span>
      </a>
      <span class="tooltip">Gestion Des Images</span>
    </li>
    <li>
      <a href="gererComptes.html">
        <i class='bx bx-user'></i>
        <span class="links_name">Gestion Des Comptes</span>
      </a>
      <span class="tooltip">Gestion Des Comptes</span>
    </li>
    <li>
      <a href="modifierProfile.html">
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
    <div class="text">Espace <?php echo $_SESSION["Role"]." : Bonjour ". $_SESSION['Nom'].' '.$_SESSION['Prenom']; ?> </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 chit-chat-layer1-rit">    	
              <div class="work-progres">
                <section id="charts1">
                  <!--inner block start here-->
                      <div>  	
                        <div class="signup-head">
                          <h1 class="h2"><i class='bx bx-image-add'></i> Gestion Des Images</h1>
                        </div>
                        <div class="signup-block">
                        <form method='post' action='' enctype='multipart/form-data'>
                              <div class="row div">
                                  <div class="col-md-7">
                                    <div class="filtrage">
                                        <div class="select">
                                            <label for="select"> Type De Image :</label>
                                            <select name="FilterTypeImg" class="form-select form-select-sm" aria-label=".form-select-lg example" required="required">
                                                <option value="" selected disabled>Open this select menu</option>
                                                <option value="Diplome">Diplome</option>
                                                <option value="Formation">Formation</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                          <div>
                                            <input type="file" name="files[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files sélectionner" multiple required="required"/>
                                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> 
                                                <span>  sélectionner une image&hellip;</span>
                                          </label>
                                          
                                  </div>
                              </div>
                              <input type="submit" class="myinput" name="submit"  value="Valider">		
                            </form> 
                        </div>
                      </div>
                  <!--inner block end here-->
                </section>	
                <hr class="style-two">
                <section id="charts1">
                    <!--inner block start here-->
                        <div>  	
                          <div class="signup-head">
                            <h1 class="h2"><i class='bx bxs-image-add' ></i> Gestion Des Flayer</h1>
                          </div>
                          <div class="signup-block">
                            <form method='post' action='' enctype='multipart/form-data'>
                              <div class="row div">
                                  <div class="col-md-7">
                                    <div class="filtrage">
                                        <div class="select">
                                            <label for="select"> Type De Flayer :</label>
                                            <select name="FilterTypeFLy" class="form-select form-select-sm" aria-label=".form-select-lg example" required="required">
                                                <option value="" selected disabled>Open this select menu</option>
                                                <option value="Diplome">Diplome</option>
                                                <option value="Formation">Formation</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                          <div>
                                            <input type="file" name="files1[]" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files sélectionner" multiple required="required"/>
                                            <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> 
                                                <span>  sélectionner une image&hellip;</span>
                                          </label>
                                          
                                  </div>
                              </div>
                              <input type="submit" class="myinput" name="submit2"  value="Valider">		
                            </form> 
                        </div>
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
  <script src="../assets/js/fileInput.js"></script>

</body>
</html>
