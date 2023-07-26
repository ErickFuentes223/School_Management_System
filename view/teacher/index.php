<?php

include "../controller/logincontroller.php"

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="../controller/logincontroller.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username_su" placeholder="User name" required="">
					<input type="password" name="pswd_su" placeholder="Password" required="">
					<button name="btn-access-su">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="post" action="../controller/logincontroller.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username_login" placeholder="Username" required="">
					<input type="password" name="pswd_login" placeholder="Password" required="">
					<button name="btn-access-login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
