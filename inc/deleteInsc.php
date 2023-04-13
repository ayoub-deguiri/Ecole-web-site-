
<?php
include("../db/db.php");
$internId = $_GET['internId'];
                     // delete inscripiton
                        $pdo_statement = $pdo_conn->prepare("DELETE FROM `inscription` WHERE `inscription`.`Id` = ?");
                        $pdo_statement -> bindParam(1,$internId);
                        $pdo_statement->execute();
?>