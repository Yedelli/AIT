
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

	

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
					<a  id="Login">Login</a>
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
    <input type="button" class="needPhoto"  href="#login" data-toggle="modal" name="needPhoto" value="I need a Photographer">
	<pre><p align="centre" style="font-size:20px ">         OR</p></pre>
	<input type="button" id="photographer" name="photographer" value="I am a Photographer   ">
    </form>
	<br>
    </div>
    
  </div>

</div>

<!--Modal_login-->
											<div class="modal fade" id="login" role="dialog">
												<div class="modal-dialog">
    
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">          
															<h4 class="modal-title">Login</h4>
														</div>
														<div class="modal-body">
															<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
																</div>
														</div>
														<div class="modal-footer">
															<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
															<a href="admin_delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
														</div>				
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
var btn = document.getElementById("Login");

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



</script>


</body>
</html>
