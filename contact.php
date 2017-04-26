<!DOCTYPE html>
<html>
<head><!-- home -->
	<link rel="stylesheet" href="css/home.css">
	
<style> 
.img1 {
	background-size: cover;
	background-position: center;
	background-color: #051939;
	
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #14525F;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 10px 30px;
    cursor: pointer;
}
input[type=text], input[type=email],input[type=tel]{
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input:focus {
    border: 3px solid #555;
}
.text
{
color:#14525F;
}
.img{
background-color: #6D6D5E;
    color: #ffffff;
    padding: 15px;

    width: 100%;
    height: 600px;
    background-image: url('images/web.gif');
    background-repeat: no-repeat;
    background-size: cover;}
</style>
</head>
<body>
<header>
	
	<div class="w3-row">
		<img src="images/logo3.png">
		
		<div class="img1">
			<div class="w3-row">
				<div class="topnav" id="myTopnav">
					<a href="home.php">Home</a>					
					<a href="about.php">About</a>
					
					<a href="help.php">Help</a>
					
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
				
			</div>		
		</div>
	</div>
	</header>

<div class="img">
<div class="text">

<h1>Contact Us at Clickmypic@gmail.com or Fill the Form.</h1>
<form>
  <label for="name"></label>
  <input type="text" id="name" name="name" placeholder="Name" required><br>
   <label for="email"></label>
  <input type="email" id="email" name="email" placeholder="Email" required><br>
  <label for="email"></label>
  <input type="tel" id="tel" name="tel" placeholder="Mobile Number"maxlength="10" pattern="[0-9]{10}" required><br>
 <input type="text" id="msg" name="msg" placeholder="Message" required><br> <br><br>
  <input type="Submit" value="Submit">
</form>
</div>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
