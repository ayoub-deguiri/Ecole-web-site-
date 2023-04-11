<?php 

include("../db/db.php");

$departid = 0;

if(isset($_POST['depart'])){
   $departid = $_POST['depart']; // department id
}
if(isset($_POST['Etat'])){
   $Etat = $_POST['Etat']; // department id
}

$Formation_arr = array();
if( $Etat == 'etat1')
   {
      if($departid > 0){
         $sql = "SELECT Id,Nom FROM formation WHERE niveau ='$departid'";
         $pdo_statement = $pdo_conn->prepare($sql);
         $pdo_statement->execute();
         $result5 = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
         foreach($result5 as $row1)
            {  
            $id = $row1['Id'];
            $name = $row1['Nom'];
      
            $Formation_arr[] = array("id" => $id, "name" => $name);
            }
      }
   }
elseif($Etat == 'etat2')
   {
      if($departid > 0){
         $sql = "SELECT Id,Nom FROM formation WHERE niveau ='$departid'";
         $pdo_statement = $pdo_conn->prepare($sql);
         $pdo_statement->execute();
         $result5 = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
         foreach($result5 as $row1)
            {  
            $id = $row1['Id'];
            $name = $row1['Nom'];
            $Formation_arr[] = array("id" => $id, "name" => $name);
            }
      }
   }
   elseif($Etat == 'etat3')
   {
      if($departid > 0){
         $sql = "SELECT Id,Nom FROM formation WHERE type ='Formation'";
         $pdo_statement = $pdo_conn->prepare($sql);
         $pdo_statement->execute();
         $result5 = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
         foreach($result5 as $row1)
            {  
            $id = $row1['Id'];
            $name = $row1['Nom'];
      
            $Formation_arr[] = array("id" => $id, "name" => $name);
            }
      }
   }
// encoding array to json format
echo json_encode($Formation_arr);
