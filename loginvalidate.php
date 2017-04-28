<?php
include 'connect.php';

if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $result1 = mysql_query("SELECT email, password FROM customer WHERE email = '".$email."' AND  password = '".$password."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            header("location:category.php");
		}
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>