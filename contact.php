<!DOCTYPE html>
<html>
<head>
<style> 
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

input[type=text],input[type=email],input[type=tel]:focus {
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
</body>
</html>
