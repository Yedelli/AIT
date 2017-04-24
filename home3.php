
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<!-- home -->
	<link rel="stylesheet" href="css/home.css">
	
	<!-- modal -->
	<link rel="stylesheet" href="css/modal.css">

<style>


</style>
</head>
<body>
	<header>
	
	<div class="w3-row-padding">
		<img src="images/logo3.png">
		
		<div class="img">
			<div class="w3-row">
				<div class="topnav" id="myTopnav">
					<a href="#home">Home</a>					
					<a href="#news">About</a>
					<a href="#contact">Contact</a>
					<a  id="login">Login</a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
				<div class="w3-col s1 l4">
					<p></p>
				</div>
				<div class="w3-col s10 l4">
					<div class="text">
						<h2>HIRE GREAT PHOTOGRAPHERS</h2>
						<p>Over 200 photographers to choose from</p>
					</div>
					<a href="pay.php" class="button">GET FREE QUOTES</a>
					<div class="text1">
						<p>Get quotations from best photographers, instantly</p>
					</div>
				</div>
				<div class="w3-col s1 l4">
				</div>
			</div>		
		</div>
	</div>
	</header>
	
	<section>
	<div class="w3-row-padding">
		<div class="w3-row-padding">			
			<div class="w3-col l4"><p></p></div>
				<div class="w3-col s12 l4">
					<h2>FIND BY CATEGORY</h2>			
				</div>
		</div>
		<div class="w3-row-padding">
			<div class="w3-col l1"><p></p></div>
			<div class="w3-col m5 l5">
				<a  href="category.html">
				<img id="img"  src="Home page pics/wedding.jpg" ></a>
			</div>
			<div class="w3-col l1"><p></p></div>
			<div class="w3-col m5 l5">
				<img id="img" src="Home page pics/commercial1.jpg" >		
			</div>
		</div>
		<br>
		
		<div class="w3-row"><p></p></div>
		<div class="w3-row-padding">
			<div class="w3-col l1"><p></p></div>
			<div class="w3-col l3">
				<img id="img" src="Home page pics/fashion.jpg" >		
			</div>
			<div class="w3-col l1"><p></p></div>
			<div class="w3-col l5">
				<img id="img" src="Home page pics/kids.jpg" >		
			</div>
		</div>
		<hr>
		<div class="w3-row-padding">
			<div class="w3-col l4"><p></p></div>
			<div class="w3-col s12 l4">
				<h2>SEARCH BY CITIES</h2>			
			</div>
		</div>
		<div class="w3-row-padding">	
		
			<div class="w3-col l3">
				<div class="polaroid">
				<img src="Home page pics/mumbai_img.png" style="width: 100%;" >	
					<div class="container">
					<p>MUMBAI</p>
					</div>
				</div>
			</div>		
			<div class="w3-col l3">
				<div class="polaroid">
				<img src="Home page pics/delhi_img.png" style="width: 100%;">	
					<div class="container">
					<p>DELHI</p>
					</div>
				</div>
			</div>
			<div class="w3-col l3">
				<div class="polaroid">
				<img src="Home page pics/banglore_img.png" style="width: 100%;">	
					<div class="container">
					<p>BANGLORE</p>
					</div>
				</div>
			</div>
			<div class="w3-col l3">
				<div class="polaroid">
				<img src="Home page pics/chennai_img.png" style="width: 100%;">	
					<div class="container">
					<p>CHENNAI</p>
					</div>
				</div>
			</div>
		
		</div>
		<hr>
		<div class="w3-row-padding">
			<div class="w3-col l4"><p></p></div>
			<div class="w3-col s12 l4">
				<h2>FAMOUS PHOTOGRAPHERS</h2>			
			</div>
			
			<div class="w3-row-padding">	
		
			<div class="w3-col l4">
				<div class="polaroid">
				<img src="images/3.gif" style="width: 100%;" >	
					<div class="container">
					<p>RR PHOTOGRAPHERS</p>
					</div>
				</div>
			</div>		
			<div class="w3-col l4">
				<div class="polaroid">
				<img src="images/10.gif" style="width: 100%;">	
					<div class="container">
					<p>ASHISH STUDIOS</p>
					</div>
				</div>
			</div>
			<div class="w3-col l4">
				<div class="polaroid">
				<img src="images/11.gif" style="width: 100%;">	
					<div class="container">
					<p>AWESOME</p>
					</div>
				</div>
			</div>			
		
		</div>
			
		</div>
		
		<hr>
		<div class="w3-row-padding">
			
			<div class="w3-col s10 l6">
				<h2>ABOUT</h2>			
			</div>
			
			<div class="w3-col s10 l6">
				<h2>CONTACT US</h2>			
			</div>
		</div>
	</div>

	</section>
	
	<footer>
	<div class="col-12">
	<div class="footer">Click My Pic </div>
	</div>
	</footer>
	
	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span> <br><br>
    </div>
    <div class="modal-body">
     <form class="form" action="" method="post" >
    <input type="button" class="needPhoto"  id="login1" name="needPhoto" value="I need a Photographer">
	<pre><p align="centre" style="font-size:20px ">         OR</p></pre>
	<input type="button" id="photographer" name="photographer" value="I am a Photographer   ">
    </form>
	<br>
    </div>
    
  </div>

</div>

<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2>CLICK MY PIC</h2>
    </div>
    <div class="modal-body">
	
	<form class="form" action="/action_page.php">

        <div class="w3-section">
		  
		  <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:100%"><br><br>
		  		  
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:100%"><br><br>
		  
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Me <br><br>
		  
		  <button class="w3-button w3-block w3-green w3-section w3-padding" id="loginbtn" type="submit">Login</button>
		  
		  <p> New to Click My Pic? <a href="signup.html"> Sign Up</a></p>

        </div>

      </form>

      </div>
   
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


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("login");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// Get the modal_login
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("login1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];


// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}



</script>


</body>
</html>
