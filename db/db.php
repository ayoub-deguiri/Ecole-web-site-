<?php
$servername = "localhost"; /* Host name */
$username = "root"; /* User */
$password = ""; /* Password */
$db = "jahinformatique"; /* Database name */

try {
  $pdo_conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // !!!!!!!!!!!!!!!!!!!!!  echo "Connected successfully !!";
} catch(PDOException $e) {
  echo "Connection failed ? : " . $e->getMessage();
}
?>