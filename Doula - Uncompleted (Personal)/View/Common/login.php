<head>
	<title>
		Log in
	</title>

	<style>
		h1{

			color: dodgerblue;	
			text-align: center;
		}
		p{

			font-family: Georgia, serif;
			color:gray;
			text-align: center;
		}
		a{

			text-align: center;
		}
		span{

			color:black;
			text-align: center;
		}
		input{

			text-align: center;
		}
		form{

			text-align: center;
		}
		.login{

			margin-top: 100px;
			border:2px solid dodgerblue;

		}
	</style>
</head>

<?php
session_start();
$isPost=false;   //signal
$email="";   //initially empty
$password="";

$trigger=0;

if(isset($_POST["btnlogin"])){

	$isPost=true;   //submit button clicked
	if($_POST["email"]!=""){  //some input is here

		$email = $_POST["email"]; //so assign it
	}
	if($_POST["password"]!=""){  //some input is here

		$password = $_POST["password"]; //so assign it
	}
}

?>
<div class="login">

<h1>Log in</h1>

<form action="#" method="post">
	

<p>
<input type="text" id="email" name="email" placeholder="Enter your email">
</p>
<?php
//email----
	if($isPost==true && $email==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		$trigger++;

	}else{

		$trigger--;
	}
?>
<p>
<input type="password" id="password" name="password" placeholder="Enter your password">
</p>
<?php
//password----
	if($isPost==true && $password==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		$trigger++;

	}else{

		$trigger--;
	}
?>

    <input type="submit" value="Login" name="btnlogin">

</form>

<p>Not a Member?<br>
<a href="../Woman/womanReg.php">Sign up</a><span> as Pregnant Woman</span><br>
<a href="../Doctor/doctorReg.php">Sign up</a><span> as Doctor / Nutritionist</span><br>
<a href="../Seller/sellerReg.php">Sign up</a><span> as Seller</span><br>
</p>

<?php

    if($trigger<0 && isset($_POST["btnlogin"])){	//button click
		

		$user=""; //type of user

		//checking Woman
		$data = file_get_contents('../Woman/womanInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		while($flag){

			if($json_arr[$count]['Email']==$email && $json_arr[$count]['Password']==$password){

				$user="woman";
				$flag=false;
			}
			if($count+1==$size){

				$flag=false;
			}
			$count++;
		}
		
		//checking Seller
		$data = file_get_contents('../Seller/sellerInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		while($flag){

			if($json_arr[$count]['Email']==$email && $json_arr[$count]['Password']==$password){

				$user="seller";
				$flag=false;
			}
			if($count+1==$size){

				$flag=false;
			}
			$count++;
		}


		//checking Doctor
		$data = file_get_contents('../Doctor/doctorInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		while($flag){

			if($json_arr[$count]['Email']==$email && $json_arr[$count]['Password']==$password){

				$user="doctor";
				$flag=false;
			}
			if($count+1==$size){

				$flag=false;
			}
			$count++;
		}


		//checking Admin
		$data = file_get_contents('../Admin/adminInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		while($flag){

			if($json_arr[$count]['Email']==$email && $json_arr[$count]['Password']==$password){

				$user="admin";
				$flag=false;
			}
			if($count+1==$size){

				$flag=false;
			}
			$count++;
		}


		if($user=="woman"){ 	//shift to homepage according to type of user

			$_SESSION["email"] = $email;
			header("Location:../Woman/womanHome.php");
		}
		else if($user=="seller"){ 	//shift to homepage according to type of user

			$_SESSION["email"] = $email;
			header("Location:../Seller/sellerHome.php");
		
		}
		else if($user=="doctor"){ 	//shift to homepage according to type of user

			$_SESSION["email"] = $email;
			header("Location:../Doctor/doctorHome.php");
		}
		else if($user=="admin"){ 	//shift to homepage according to type of user

			$_SESSION["email"] = $email;
			header("Location:../Admin/adminHome.php");
		}
		else{

			echo "<p>Please enter correct email and password</p>";
		}


    }
?>

</div>

