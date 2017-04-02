<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>




<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
html {
    font-family: "Lucida Sans", sans-serif;
}

body {
	margin: 0;
  font-family: 'Merriweather', 'Helvetica Neue', Arial, sans-serif;
}
.img {
	background-size: cover;
	background-position: center;
	background-image: url('images/header.jpg');
	height: 450px;
}
.topnav {
  overflow: hidden;
  background-color: transparent;
  text-transform: uppercase;
  
}

.topnav a {
  float: left;
  display: block;
  color: WHITE;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgba(255, 255, 255, 0.5);
  color: WHITE;
}

.topnav .icon {
  display: none;
}
body {
  margin: 0;
  padding: 0;
}


img{
position: centered;

}
.button {
    background-color: transparent; 
    color: black; 
	 border: 2px solid white;
    border-radius: 20px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.2s;
    cursor: pointer;
	margin-left: 38%;
	margin-top: 75px;
}

.button:hover {
	
    background-color:rgba(255, 255, 255, 0.5);
    color: white;
}
.text {
	color: WHITE;
	margin-left: 30%;
	margin-top: 120px;
}
.text1 {
	color: WHITE;
	margin-left: 30%;
	
}
.heading {
	margin-left:35%;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
	
	img {
		width: 220px;
	}
	.button { 
		margin-left: 20%;
		margin-top: 50px;
	}
	
	.text {
	margin-top: 80px;
	margin-left: 10%;
	
	}
	.text1 {

	margin-left: 10%;

	}
	.heading {
		margin-left: 10%;
	}

}
</style>
</head>
<body>
	<header>
	
	<div class="col-12">
			<img src="images/logo3.png">
		
		<div class="img">
		<div class="row">
			<div class="topnav" id="myTopnav">
				<a href="#home">Home</a>
				<a href="#home">Login</a>
				<a href="#news">About</a>
				<a href="#contact">Contact</a>
				<a href="#about">Logout</a>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
			</div>
			<div class="text">
				<h2>HIRE GREAT PHOTOGRAPHERS</h2>
				<p>Over 200 photographers to choose from</p>
			</div>
			<a href="pay.php" class="button">GET FREE QUOTES</a>
			<div class="text1">
				<p>Get quotations from best photographers, instantly</p>
			</div>
		</div>
		
		</div>
	
	</div>
	</header>
	
	<section>
	<div class="col-12">
		<div class="row">
		<div  class="heading" >
			<h2>FIND BY CATEGORY</h2>			
		</div>
		</div>
		<hr>
		<div class="row">
			<div class="heading">
				<h2>SEARCH BY CITIES</h2>			
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="heading">
				<h2>FAMOUS PHOTOGRAPHERS</h2>			
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-6">
				<h2>ABOUT</h2>			
			</div>
			<div class="col-6">
				<h2>CONTACT US</h2>			
			</div>
		</div>
	</div>

	</section>
	
	<div class="footer">Click My Pic </div>
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
