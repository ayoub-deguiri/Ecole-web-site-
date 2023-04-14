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
         $sql = '';
         if( $departid == '9AEF')
            {
               $sql = "SELECT Id,Nom FROM formation WHERE type='Diplome' and niveau ='$departid'";
            }
         elseif($departid == '2BAC')
            {
               $sql = "SELECT Id,Nom FROM formation WHERE  type='Diplome' and niveau ='2BAC' or niveau ='9AEF'";
            }
         elseif($departid == 'BACOUPlus')
            {
               $sql = "SELECT Id,Nom FROM formation WHERE type='Diplome'and niveau ='2BAC' or niveau ='BACOUPlus' or niveau ='9AEF'";
            }
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
         $sql = '';
         if( $departid == 'BAC+2')
            {
               $sql = "SELECT Id,Nom FROM formation WHERE type='Licence' and niveau ='$departid'";
            }
         elseif($departid == 'BAC+3')
            {
               $sql = "SELECT Id,Nom FROM formation WHERE (type='Master' or type='Licence') and (niveau ='BAC+2' or niveau ='BAC+3') order by type";
            }
         $pdo_statement = $pdo_conn->prepare($sql);
         $pdo_statement->execute();
         $result5 = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

         $sql = "SELECT count(1) FROM formation WHERE niveau ='BAC+2'";
         $pdo_statement1 = $pdo_conn->prepare($sql);
         $pdo_statement1->execute();
         $CountBac2 = $pdo_statement1->fetchColumn();

         $sql = "SELECT count(1) FROM formation WHERE niveau ='BAC+3'";
         $pdo_statement1 = $pdo_conn->prepare($sql);
         $pdo_statement1->execute();
         $CountBac3 = $pdo_statement1->fetchColumn();

         foreach($result5 as $row1)
            {  
               $id = $row1['Id'];
               $name = $row1['Nom'];
               $Formation_arr[] = array("id" => $id, "name" => $name,"CountBac2" => $CountBac2, "CountBac3" => $CountBac3);
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
