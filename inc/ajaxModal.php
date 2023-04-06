
<?php

include("../db/db.php");
$internId = $_GET['internId'];
$sql = "SELECT * FROM formation WHERE Id= ?";
$pdo_statement = $pdo_conn->prepare($sql);
$pdo_statement->bindParam(1, $internId);
$pdo_statement->execute();
$formation = $pdo_statement->fetch();
$nom = $formation['Nom'];
$id = $formation['Id'];




?>




<?php
    echo "<input type='text' value='".$nom."' name='nomformation'>";
    echo "<input type='hidden' value='".$id."' name='idformation'>";
    
?>
