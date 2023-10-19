<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register-login Form</title>
	<link rel="stylesheet" href="styles.css">	
	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="index.js"></script>  	
</head>
<body>
  <div class="wrapper">
  <div class="left">         
    <img src="heart.jpg">
  </div>
  <div class="right">
    <div class="tabs">
      <ul>
        <li class="register_li">Register</li>
        <li class="login_li">login</li>
      </ul>
    </div>    
    <form action="" method="POST">
      <div class="reg">         
        <div class="input_field">         
          <input  name ="name" type="text" placeholder="Name" class="input">
        </div>
        <div class="input_field">
          <input name ="username" type="text" placeholder="Username" class="input">
        </div>
        <div class="input_field">
          <input name ="password" type="password" placeholder="Password" class="input">
        </div>
        <center><button name="register" class="btn"><a href="#">Register</a></button></center>		
      </div>
    </form> 
    <?php include'register.php'?>
  
    <form action="" method="POST">
    <div class="login">
      <div class="input_field">
        <input name ="username" type="text" placeholder="Username" class="input">
      </div>
      <div class="input_field">
        <input name ="password" type="password" placeholder="Password" class="input">
      </div>
	  <center><button name="login" class="btn"><a href="#">Login</a></button></center>
    </div>
  </form>
  <?php include 'login.php'?>
  </div>

</div>
</body>
</html>