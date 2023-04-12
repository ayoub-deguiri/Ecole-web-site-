
<?php

include("../db/db.php");
$internId = $_GET['internId'];
$sql = "SELECT * FROM formation WHERE Id= ?";
$pdo_statement = $pdo_conn->prepare($sql);
$pdo_statement->bindParam(1, $internId);
$pdo_statement->execute();
$formation = $pdo_statement->fetch();
$nom = $formation['Nom'];
$type = $formation['type'];
$niveau = $formation['niveau'];
$id = $formation['Id'];

$Mylist = array("Diplome","Formation","Master","Licence");
$Mylist2 = array("Aucun","9AEF","2BAC","BACOuPlus","BAC+2","BAC+3");

?>




<?php
    echo "<input type='text' value='".$nom."' name='nomformation'> <br>";
                echo '<select name="type" id="type" >';
                foreach($Mylist as $row)
                    {
                        $selected = "";
                        if($type == $row )
                            {
                                $selected = "selected";
                            }
                        echo "<option value='".$row."' ".$selected.">".$row."</option>";
                    }
                echo '</select> <br>';
                echo '<select name="niveau" id="niveau" >';
                foreach($Mylist2 as $row)
                    {
                        $selected = "";
                        if($niveau == $row )
                            {
                                $selected = "selected";
                            }
                        echo "<option value='".$row."' ".$selected.">".$row."</option>";
                    }
                echo '</select> <br>';
    echo "<input type='hidden' value='".$id."' name='idformation'>";
    
?>
