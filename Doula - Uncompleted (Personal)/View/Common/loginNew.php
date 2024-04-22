<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="CSS/login.css">
	</head>
	<body>
		<div class="main">
			<div class="container">
				<div class="header">
					<h3>Login</h3>
				</div>
				<form class="form" id="form" method="post" action="next.php">
					<div class="form-control" id="form-control">
						<label>Username:</label>
						<input type="text" id="uname" name="uname" placeholder="User name">
						<i id="success" class="fas fa-check-circle"></i>
						<i id="error" class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>
					<br>
					<div class="form-control1" id="form-control1">
						<label>Password:</label>
						<input type="password" id="pass" name="pass" placeholder="Password">
						<i id="success2" class="fas fa-check-circle"></i>
						<i id="error2" class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>
					<button type="submit">Login</button>

					<p>Not a Member?<br>
				<a href="../Woman/womanReg.php">Sign up</a><span> as Pregnant Woman</span><br>
				<a href="../Doctor/doctorReg.php">Sign up</a><span> as Doctor / Nutritionist</span><br>
				<a href="../Seller/sellerReg.php">Sign up</a><span> as Seller</span><br>
					</p>
					
					<script src='https://kit.fontawesome.com/a076d05399.js'></script>
					<script src="../Admin/adminInfo.json"></script>
					<script src="validation.js"></script>
				</form>


			</div>
		
			<div class="image">
				<img src="image/image.jpg" alt="" height="450px" width="450px">
			</div>
		</div>
	</body>
</html>

<?php
/*
	session_start();

	if(isset($_POST["submit"])){
		
		$_SESSION["email"] = $_POST["uname"];
	}
	*/
?>