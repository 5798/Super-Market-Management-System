
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body bgcolor='#D8BFD8'>
  <div class="header" align="center">
  	<h2>ADD USER HERE</h2>
  </div>
	
  <form method="post" action="add_user_check.php" align="center">
  	
	<div class="input-group">
  	  <label>First name</label>
  	  <input type="text" name="fname" required="required">
  	</div><br>
 	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lname" required="required">
  	</div><br>
  	
       <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required="required" >
  	</div><br>
  	
	<div class="input-group">
  	  &nbsp;&nbsp;<label>Password</label>
  	  <input type="password" name="password" required="required">
  	</div><br>
        <div class="input-group">
  	  <label>age</label>
  	  <input type="text" name="age" required="required" >
  	</div><br>
  	
	<div class="input-group">
  	  &nbsp;&nbsp;<label>Mobile</label>
  	  <input type="tel" name="mobile" required="required">
  	</div><br>
	
	
	
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">ADD</button>
  	</div><br>
  	<p>
  		Already a member? <a href="login
-user.php">Sign in</a>
  	</p>
  </form>
</body>
</html>