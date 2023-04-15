<?php
include("../db/db.php");
$internId = $_GET['internId'];

    $pdo_statement = $pdo_conn->prepare("UPDATE inscription SET Type = 'Accepter' WHERE `inscription`.`Id` = ?");
    $pdo_statement -> bindParam(1,$internId);
    $pdo_statement->execute();
    $etat =true ;

?>