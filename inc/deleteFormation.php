<?php
// Retrieve the intern ID from the query string
$internId = $_GET['internId'];

// TODO: Delete the intern with the specified ID from your database
    $Sql = "DELETE FROM `formation` WHERE Id = ?";
    $pdo_statement =  $pdo_conn->prepare($Sql);
    $pdo_statement->bindParam(1, $internId);
    // var_dump($idcompte);
    $pdo_statement->execute();

// Redirect back to the intern list page
header('Location: intern_list.php');
exit();
?>
