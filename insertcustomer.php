<?php
include 'connect.php';
 // Fetching variables of the form which travels in URL
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contactNo = $_POST['contactNo'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if($firstName !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into customer(firstName, lastName, email, contactNo,password,confirmPassword) values ('$firstName', '$lastName', '$email', '$contactNo', '$password', '&confirmPassword')");

header("location:category.php");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

//mysql_close($connection); // Closing Connection with Server
?>