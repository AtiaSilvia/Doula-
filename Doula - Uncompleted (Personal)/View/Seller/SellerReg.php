<head>
	<title>

	</title>

    <link rel="stylesheet" href="CSS/Registration.css">
</head>



<?php

include "../../Controller/Operations/SellerOperations.php";
session_start();

$isPost=false;   //signal

$username="";   //initially empty
$email="";
$password="";
$gender="";
$number="";
$address="";
$birthdate="";
$nidCard="";
$bankAccountNumber="";
$bankCardNumber="";
$shopName="";
$tradeLicenceNumber="";

$input=0;


if(isset($_POST["btnreg"])){

	$isPost=true;   //submit button clicked

	if($_POST["uname"]!=""){  //some input is here

		$username = $_POST["uname"]; //so assign it
	}
	if(($_POST["email"])!=""){  //some input is here

		$email = $_POST["email"]; //so assign it
	}
	if($_POST["password"]!=""){  //some input is here

		$password = $_POST["password"]; //so assign it
	}
    if(isset($_POST["gender"])){  //some input is here

		$gender = $_POST["gender"]; //so assign it
	}
	if($_POST["number"]!=0){  //some input is here

		$number = $_POST["number"]; //so assign it
	}
	if($_POST["birthdate"]!=""){  //some input is here

		$birthdate = $_POST["birthdate"]; //so assign it
	}
	if($_POST["address"]!=""){  //some input is here

		$address = $_POST["address"]; //so assign it
	}
	if($_POST["nidCard"]!=0){  //some input is here

		$nidCard = $_POST["nidCard"]; //so assign it
	}
	if($_POST["bankAccountNumber"]!=""){  //some input is here

		$bankAccountNumber = $_POST["bankAccountNumber"]; //so assign it
	}
	if($_POST["bankCardNumber"]!=""){  //some input is here

		$bankCardNumber = $_POST["bankCardNumber"]; //so assign it
	}
	if($_POST["shopName"]!=""){  //some input is here

		$shopName = $_POST["shopName"]; //so assign it
	}
	if($_POST["tradeLicenceNumber"]!=""){  //some input is here

		$tradeLicenceNumber = $_POST["tradeLicenceNumber"]; //so assign it
	}

}//checking username

?>

<h1>Registration Form</h1>

<form action="#" method="post">

	<p>Username: </p><input type="text" id="uname" name="uname" placeholder="Enter your name">

<?php
//Username----
	if($isPost==true && $username==""){
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

	<p>Select your Gender: </p>
    <input type="radio" id="Male" name="gender" value="Male">Male
    <input type="radio" id="Female" name="gender" value="Female">Female
    <input type="radio" id="Other" name="gender" value="Other">Other
    
<?php
//Email----
	if($isPost==true && $gender==""){

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


	<p>NID Card Number: </p><input type="text" id="nidCard" name="nidCard" placeholder="Enter your NID Card Number">
<?php
//NID Number----
	if($isPost==true && $nidCard==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		

	}else{

		$input++;
	}
?>


	<p>Bank Account Number: </p><input type="text" id="bankAccountNumber" name="bankAccountNumber" placeholder="Enter your Bank Account Number">
<?php
//Bank Account Number----
	if($isPost==true && $bankAccountNumber==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>


	<p>Bank Card Number: </p><input type="text" id="bankCardNumber" name="bankCardNumber" placeholder="Enter your Bank Card Number">
<?php
//Pregnancy Delivery Date----
	if($isPost==true && $bankCardNumber==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		

	}else{

		$input++;
	}
?>


	<p>Shop Name: </p><input type="text" id="shopName" name="shopName" placeholder="Enter your Shop Name">
<?php
//Shop Name----
	if($isPost==true && $shopName==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		

	}else{

		$input++;
	}
?>


	<p>Trade Licence Number: </p><input type="text" id="tradeLicenceNumber" name="tradeLicenceNumber" placeholder="Enter Trade Licence">
<?php
//Trade Licence Number----
	if($isPost==true && $tradeLicenceNumber==""){

		echo "<span style='color:red';><small>Required</small></span><br>";
		

	}else{

		$input++;
	}
?>

<br>
<br>
    <input type="submit" value="Register" name="btnreg">

</form>

<a href="login.php"> Back to Login </a>

<?php

    if($input==12 && isset($_POST["btnreg"])){
		
		$data = file_get_contents('sellerInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		$trigger = true;
		while($flag){

			if($json_arr[$count]['Email']==$email){

				$trigger=false;
				$flag=false;
			}
			if($count==$size){

				$flag=false;
			}
			$count++;
		}
		if($trigger){

            $seller = new Seller($username, $email, $password, $gender, $birthdate, $number, $address, $shopName, $tradeLicenceNumber, $nidCard, $bankAccountNumber, $bankCardNumber);
            $oSeller = new OSeller();
            $oSeller->Insert($seller);

			header("Location: ../Common/regSuccessful.php");
		}else{

			echo "<span style='color:red';><small>Already an user</small></span>";
		}
        
    }
?>