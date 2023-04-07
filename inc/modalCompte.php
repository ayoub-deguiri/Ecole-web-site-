
<?php

include("../db/db.php");
$internId = $_GET['internId'];
$sql = "SELECT * FROM compte WHERE Id= ?";
$pdo_statement = $pdo_conn->prepare($sql);
$pdo_statement->bindParam(1, $internId);
$pdo_statement->execute();
$formation = $pdo_statement->fetch();
$id = $formation['Id'];
$nom = $formation['Nom'];
$Prenom = $formation['Prenom'];
$Email = $formation['Email'];
$UserName = $formation['UserName'];
$Password = $formation['Password'];




?>




<?php
    echo "
    <table class='table table-hover'>
    <tbody>
      <tr>
      <th>Nom</th>
      <td><input type='text' name='nom' value='".$nom."'></td>
      </tr>
      <tr>
      <th>Prenom</th>
      <td><input type='text' name='prenom'  value='".$Prenom."' ></td>
      </tr>
      
      <tr>
      <th>Email</th>
      <td><input type='text' name='email'  value='".$Email."'></td>
      </tr>
      <tr>
      <th>Nom de utilisateur</th>
      <td><input type='text' name='username'  value='".$UserName."'></td>
      </tr>
      <tr>
      <th>Password</th>
      <td><input type='text' name='password'  value='".$Password."' ></td>
      </tr>
      <input type='hidden' name='id' value='".$id."'>
      </tbody>
     
  </table>
    ";
?>