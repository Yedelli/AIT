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
    padding: 0px;
background-position: center;
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
					
					<a href="contact.php">Contact</a>
					<a href="help.php">Help</a>
					
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
				
			</div>		
		</div>
	</div>
	</header>

<div class="img"> 
<div>
<h1> About Us</h1>
<br>
<div class="floating-box">

<p>We are a passionate team who wants to make the job of hiring photographers easier and at the same time provide a platform for photographers to showcase their talent.</p>
 We will help you in finalizing your requirement, shortlisting photographers and finally selecting the right one.<br>
<h2>Our Team:</h2>
<h3>Rohini Yedelli</h3>
<h3>Radhika Raghuwanshi</h3>
<h3>Krima Shah</h3>
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
