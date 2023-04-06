
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jahinformatique";
try {
    // objet de connexion:
      $pdo_conn = new PDO("mysql:host=$servername;dbname=$db",$username,$password);
    //set the PDO error mode to  exception :
      $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
      echo "echec de connexion : ".$e->getMessage();
}
?>
