<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- home -->
	<link rel="stylesheet" href="css/home.css">
	
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
html {
    
   }
   
.img {
    background-color: #6D6D5E;
    color: #ffffff;
    padding: 15px;

    width: 100%;
    height: 400px;
    background-image: url('images/child.gif');
    background-repeat: no-repeat;
    background-size: cover;
    }
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #051939;
}

li {
    float: right;
}

li a {
    display: inline-block;
    color: #F48A12;
    text-align: center;
	font-size:20px;
    padding: 14px 100px;
    text-decoration: none;
}

li a:hover{
    background-color: #F48A12;
    color: white;
}
.image1 {
    border-radius:100%;
	 padding: 40px;
	 
	background-image: url('images/man.gif');
    background-repeat: no-repeat;
    background-size: cover;
	width:100px;
	height:100px;
}
.box {
    width: 100%;
    height: auto;
	 padding: 10px;
	 padding-right:120px;
    border: #B0C4E3;
	text-align:center;
	
}
.main {
    width: 75%;
    float: right;
    padding: 15px;
	color:#F48A12;
   font-size:25px;
}
.main1 {
    color:#F48A12;
	   
}
.button {
    background-color: #F48A12 /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 40px 750px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
}
.button1 {
    background-color: #F48A12; 
    color: white; 
	padding: 10px 20px;
	padding-right:40px;
    border: 2px solid #F48A12;
	display: inline-block;
	 font-size: 35px;
	 text-align:center;
    margin: 40px 10px;
	width:100%;
	height:auto;
	
}

.button1:hover {
    background-color: white;
    color: #F48A12;
}
.imgpart {
    width: 100%;
    height: 100%;
	 padding: 20px;
    border: #B0C4E3;
     color:#051939;}
 
 div.gallery {
    margin: 13px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
	
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

 table {
    border-collapse: collapse;
    width: 100%;
	
}

th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:18px;
}

tr:hover{background-color:#F8DDC5;}

.blue{
color:#152055;}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media screen and (max-width: 880px) {
    li {
               float: top;
               text-align: center;
               width: 100%;
               display: block;
       }}
@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
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
}
</style>
</head>
<body>
<div class="w3-row-padding">
		<img src="images/logo3.png">
		
		<div class="img">
		
		<div class="w3-row">
				<div class="topnav" id="myTopnav">
					<a href="#home">Home</a>					
					<a href="#news">About</a>
					<a href="#contact">Contact</a>
					<a  id="modal">Login</a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
				</div>
</div>

</div>
<div class="row">
<br>
<div class="col-12 col-m-12">
<div class="box"><br>
<div class="main">
We Frame your special moments because we don't take a photograph we make it!!!<br></div>
</div>

<div class=" button1">Hire Me</div>




<div class="blue">
<h1>Recent Work Of RR Photography</h1>
</div>
</div>
<div class="gallery">
  <a target="_blank" href="6.gif">
    <img src="images/6.gif" alt="Trolltunga Norway" width="500" height="400">
  </a>
  <div class="desc"></div>
</div>

<div class="gallery">
  <a target="_blank" href="8.gif">
    <img src="images/8.gif" alt="Forest" width="800" height="400">
  </a>
  <div class="desc"></div>
</div>

<div class="gallery">
  <a target="_blank" href="3.gif">
    <img src="images/3.gif" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc"></div>
</div>


<div class="gallery">
  <a target="_blank" href="2.gif">
    <img src="images/2.gif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"></div>
</div>
<div class="gallery">
  <a target="_blank" href="4.gif">
    <img src="images/4.gif" alt="Mountains" width="200" height="400">
  </a>
  <div class="desc"></div>
</div>

<br><br>
<br>
<br>
<div class="blue">
<table>
  <tr>
    <th>Professional Information</th>
    
  </tr>
  <tr>
    <td>Awards</td>
    <td></td>
    <td>Well has become on the top five out of 1000 Submission in Mumbai Documentary festival</td>
  </tr>
  <tr>
    <td>Established since</td>
    <td></td>
    <td>2011</td>
  </tr>
  <tr>
    <td>City</td>
    <td></td>
    <td>Delhi</td>
  </tr>
  <tr>
    <td>No. of photographers</td>
    <td></td>
    <td>7</td>
  </tr>
 
</table>
<br>
<br>
<table>
  <tr>
   <th>Services</th>
    
  </tr>
  <tr>
    <td>Open to Travel</td>
    <td></td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>Type of Service</td>
    <td></td>
    <td>Cinematography , Video Editing , Photo Editing , Photography</td>
  </tr>
  <tr>
    <td>Specialization</td>
    <td></td>
    <td>Candid Weddings , Destinations Weddings and all types of portfolios, be it Kids Portfolio, Models Portfolio, Fashion Photography,
	Candid Weddings , Abstract Photography, Product Photography, Event Photography and Fashion Photography Worldwide</td>
  </tr>
 
</table>
</div>
</body>


</html>
