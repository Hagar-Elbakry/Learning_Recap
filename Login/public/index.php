<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="../src/actions/register.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="firstname" placeholder="First Name">
					<input type="text" name="lastname" placeholder="Last Name">
                    <input type="password" name="pwd" placeholder="Password">
					<input type="email" name="email" placeholder="Email">
					<button>Sign up</button>
				</form>
			</div>

			<div class="delete">
				<form action="../src/actions/delete.php" method="post">
					<label for="chk" aria-hidden="true">Delete</label>
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="pwd" placeholder="Password">
					<button>Delete</button>
				</form>
			</div>
	</div>
</body>
</html>