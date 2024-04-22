<head>
	<title>
		Woman Registration
	</title>

    <link rel="stylesheet" href="CSS/Registration.css">
</head>

<?php

session_start();

$isPost=false;  

$username="";  
$email="";
$password="";
$number="";
$address="";
$birthdate="";
$weight=0;
$pregnancyweek="";
$deleverydate="";

$input=0;

if(isset($_POST["btnreg"])){

	$isPost=true; 

	if($_POST["uname"]!=""){  //is there something

		$username = $_POST["uname"]; 
	}
	if($_POST["email"]!=""){  

		$email = $_POST["email"];
	}
	if($_POST["password"]!=""){ 

		$password = $_POST["password"]; 
	}
	if($_POST["number"]!=0){  

		$number = $_POST["number"]; //so assign it
	}
	if($_POST["birthdate"]!=""){  //some input is here

		$birthdate = $_POST["birthdate"]; //so assign it
	}
	if($_POST["address"]!=""){  //some input is here

		$address = $_POST["address"]; //so assign it
	}
	if($_POST["weight"]!=0){  //some input is here

		$weight = $_POST["weight"]; //so assign it
	}
	if($_POST["pregnancyweek"]!=""){  //some input is here

		$pregnancyweek = $_POST["pregnancyweek"]; //so assign it
	}
	if($_POST["deleverydate"]!=""){  //some input is here

		$deleverydate = $_POST["deleverydate"]; //so assign it
	}

}

?>

<h1>Registration Form</h1>

<form action="#" method="post">

	<p>Username: </p><input type="text" id="uname" name="uname" placeholder="Enter your name">

<?php
//Username----
	if($isPost==true && $username==""){		//button clicked and username empty
		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>


	<p>Email: </p><input type="email" id="email" name="email" placeholder="Enter your email address">
<?php
//Email----
	if($isPost==true && $email==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>

	<p>Password: </p><input type="password" id="password" name="password" placeholder="Enter your password">
<?php
//Password----
	if($isPost==true && $password==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>

	<p>Phone Number: </p><input type="text"  id="number" name="number" placeholder="Enter your phone number">
<?php
//Phone----
	if($isPost==true && empty($number)){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;

	}
?>
	<p>Date of Birth: </p><input type="date" id="birthdate" name="birthdate">
<?php
//Birthdate----
	if($isPost==true && empty($birthdate)){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;

	}
?>

	<p>Address: </p><input type="text" id="address" name="address" placeholder="Enter your address">
<?php
//Address----
	if($isPost==true && $address==""){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;

	}
?>


	<p>Weight: </p><input type="number" id="weight" name="weight" placeholder="Enter your weight">
<?php
//Weight----
	if($isPost==true && empty($weight)){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;
	
	}
?>


	<p>Choose your Pregnancy Week: </p><input type="week" id="pregnancyweek" name="pregnancyweek">
<?php
//Pregnancy Week----
	if($isPost==true && empty($pregnancyweek)){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;
	
	}
?>


	<p>Choose your Delivery Date: </p><input type="date" id="deleverydate" name="deleverydate">
<?php
//Pregnancy Delivery Date----
	if($isPost==true && empty($deleverydate)){

		echo "<span style='color:red';><small>Required</small></span><br>";


	}else{

		$input++;

	}
?>

<br>
<br>
    <input type="submit" value="Register" name="btnreg">

</form>

<?php

    if($input==9 && isset($_POST["btnreg"])){
		
		$data = file_get_contents('WomanInfo.json');
		$json_arr = json_decode($data, true);

		$size = sizeof($json_arr);
		$count=0;
		$flag = true;	//for loop
		$trigger = true;	//information true=value input

		while($flag){

			if($json_arr[$count]['Email']==$email){ 	//already have this email or $json_arr[0]['Email]

				$trigger=false;		//false = value not input
				$flag=false;
			}
			if($count==$size){

				$flag=false;
			}
			$count++;
		}
		if($trigger){

			$json_arr[] = array('Username'=>$username, 'Email'=>$email, 'Password'=>$password, 'Number'=>$number, 'Address'=>$address, 'BirthDate'=>$birthdate, 'Weight'=>$weight, 'Pregnancy'=>$pregnancyweek, 'DeliveryDate'=>$deleverydate);
			file_put_contents('womanInfo.json', json_encode($json_arr));
			header("Location: ../Common/regSuccessful.php");
			
		}else{

			echo "<span style='color:red';><small>Already an user</small></span><br>";
			echo "<a href='../Common/login.php'> Back to Login? </a>";
		}
        
    }
?>