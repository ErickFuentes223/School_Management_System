<?php

include "../controller/loginController.php"

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="css/style.css">

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
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Welcome!</label>
					<input type="text" name="username_login" placeholder="Username" required="">
					<input type="password" name="pswd_login" placeholder="Password" required="">
					<button name="btn-access-su">Login</button>
				</form>
			</div>

<!--
			<div class="login">
				<form method="post" action="../controller/loginController.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username_login" placeholder="Username" required="">
					<input type="password" name="pswd_login" placeholder="Password" required="">
					<button name="btn-access-login">Login</button>
				</form>
			</div>
-->
	</div>

	
	
</body>
</html>
<!-- partial -->
  
</body>
</html>
