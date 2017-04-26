<!DOCTYPE html>
<html>
<head>
<!-- home -->
	<link rel="stylesheet" href="css/home.css">
	
<style> 
.img1 {
	background-size: cover;
	background-position: center;
	background-color: #051939;
	
}
div {
   
   color: #14525F;
   margin:10px;
}
.floating-box {
    display: inline-block;
    width: 80%;
    height: 80%;
   margin:2px;
   padding:20px;
    border: 3px solid #14525F; 
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
					<a href="contact.php">Contact</a>
					
					
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
				
			</div>		
		</div>
	</div>
	</header>

<div class="img">
<div>
<h1>  Help</h1>
<br>
<div class="floating-box">
<h2>Looking for a photographer?</h2>
<p>It's totally free and easy. Make your special moments memorable with the best photographs.View and compare different photographers
 on our website, hire the best that fits you.</p>
 <br>
<h2>You are a photographer?</h2>
<p>Build your profile in minutes and get hired.</p> 
</div>
</div>
</div>
<footer>
	<div class="col-12">
	<div class="footer">Click My Pic &copy; 2017 </div>
	</div>
	</footer>
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
