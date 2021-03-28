<!DOCTYPE HTML>
<html>
<body bgcolor='	#4682B4'>
 <a href="head.php"><button>GOTO HOME PAGE</button></a>
    <br><br>

<?php
 
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'mst'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inFullname = $_POST["fname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inAge = $_POST["age"];
 $inUsername = $_POST["username"];
 $inPassword = $_POST["password"];
 $lastName=$_POST["lname"];
 $mobile=$_POST["mobile"];
# $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO USER(FNAME,age,USERNAME, PASSWORD,LNAME, mobile) VALUES(?,?,?,?,?,?)"); //Fetching all the records with input credentials
 $stmt->bind_param("ssssss", $inFullname,$inAge,$inUsername, $inPassword,$lastName, $mobile); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
	echo "NEW USER is added successful!";// user will be taken to the success page
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="login3.php">Try Login</a>
 <?php 
 }
}
?>
</body> 
</html>