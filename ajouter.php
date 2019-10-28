<?php 
require "database.php";
$today=date('Y-m-d H:i:s');
if (isset($_POST)) {
	$name = verifyInput($_POST['name']);
	$firstname = verifyInput($_POST['firstname']);
	$email = verifyInput($_POST['email']);
	$phone = verifyInput($_POST['phone']);
  $password = verifyInput($_POST['pass']);

}
$db = Database::connect();
$insert = $db->prepare("INSERT INTO user(name_user, firstname_user, email_user, telephone, password_user, today) VALUES (?,?,?,?,?,?)");
$insert->execute(array($name,$firstname,$email,$phone,$password,$today));
Database::disconnect();
header("location:connexion.php");
function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

 ?>