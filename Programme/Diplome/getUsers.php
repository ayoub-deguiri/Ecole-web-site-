<?php 

include("../../db/db.php");

$departid = 0;

if(isset($_POST['depart'])){
   $departid = $_POST['depart']; // department id
}

$users_arr = array();

if($departid > 0){
   $sql = "SELECT Id,Nom FROM formation WHERE niveau ='$departid'";
   $pdo_statement = $pdo_conn->prepare($sql);
   $pdo_statement->execute();
   $result5 = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

   foreach($result5 as $row1)
                     {  

      $id = $row1['Id'];
      $name = $row1['Nom'];

      $users_arr[] = array("id" => $id, "name" => $name);

   }
}
// encoding array to json format
echo json_encode($users_arr);
