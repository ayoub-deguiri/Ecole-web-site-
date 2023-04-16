
<?php

include("../db/db.php");
$internId = $_GET['internId'];
$sql = "SELECT * FROM inscription WHERE Id= ?";
$pdo_statement = $pdo_conn->prepare($sql);
$pdo_statement->bindParam(1, $internId);
$pdo_statement->execute();
$inscription = $pdo_statement->fetch();
$NomComplete = $inscription['NomComplete'];
$CIN = $inscription['CIN'];
$adresse = $inscription['adresse'];
$Tele = $inscription['Tele'];
$NiveauScolaire = $inscription['NiveauScolaire'];
$Email = $inscription['Email'];
$TypeFormation = $inscription['TypeFormation'];
$DateInscription = $inscription['DateInscription'];
$filename = $inscription['filename'];
$filename2 = $inscription['filename2'];
$filename3 = $inscription['filename3'];
$filename4 = $inscription['filename4'];
$filename5 = $inscription['filename5'];



?>




<?php echo ' 
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Nom Complet</th>
                            <td>'.$NomComplete.'</td>
                        </tr>
                        <tr>
                              <th>CIN</th>
                              <td>'.$CIN.'</td>
                          </tr>
                          <tr>
                              <th>Adresse</th>
                              <td>'.$adresse.'</td>
                          </tr>
                          <tr>
                              <th>Telephone</th>
                              <td>'.$Tele.'</td>
                          </tr>
                          <tr>
                              <th>Email</th>
                              <td>'.$Email.'</td>
                          </tr>
                          <tr>
                              <th>Niveau Scolaire</th>
                              <td>'.$NiveauScolaire.'</td>
                          </tr>
                          <tr>
                              <th>Type</th>
                              <td>'.$TypeFormation.'</td>
                          </tr>
                          <tr>
                              <th>Date D\'Inscription</th>
                              <td>'.$DateInscription.'</td>
                          </tr>
                      </tbody>
                  </table>';

                echo '
                  <div class="photos">
                      <img src="../../Programme/Images/Inscription/'.$filename.'" alt=""  />
                      <img src="../../Programme/Images/Inscription/'.$filename2.'"alt=""  />';
                     if($TypeFormation == 'Diplome')
                        {
                            echo '
                            <img src="../../Programme/Images/Inscription/'.$filename3.'" alt=""  />
                            <img src="../../Programme/Images/Inscription/'.$filename4.'"alt=""  />';
                        }
                    if($TypeFormation == 'FEDE')
                        {
                            echo '
                            <img src="../../Programme/Images/Inscription/'.$filename3.'" alt=""  />
                            <img src="../../Programme/Images/Inscription/'.$filename4.'"alt=""  />
                            <img src="../../Programme/Images/Inscription/'.$filename5.'"alt=""  />';
                        }
                  echo '</div>';
                  
        ?>