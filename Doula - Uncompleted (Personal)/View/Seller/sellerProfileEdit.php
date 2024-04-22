<html>

    <head>
        <title>My Profile</title>
        <style>
		nav{

            background-color: DarkSlateGrey;
            overflow: hidden;
            align: center;
        }
            nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-family: sans-serif, Helvetica, Arial;
        }

        nav a:hover {
            background-color: ghostwhite;
            color: black;
        }

        p{

            font-family: sans-serif, Helvetica, Arial;
        }
        p small{

            color: gray;
        }
        h1{

            color: crimson;
        }
		
	</style>
    </head>

    <body>
        <nav>
            <a href="sellerHome.php">Home</a>
            <a href="">Orders</a> 
            <a href="">Listing</a> 
            <a href="">Insights</a> 
            <a href="">Accounts</a> 
            <a href="sellerProfile.php">My Profile</a>
            <a href="sellerProfileEdit.php">Edit Profile</a>
            <a href="../Common/logout.php">Logout</a>
        </nav>

            <h1>Edit Profile</h1>
<?php
session_start();

$isPost=false;   //signal

$username="";   //initially empty
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


	<p>Trade Licence Number: </p><input type="text" id="tradeLicenceNumber" name="tradeLicenceNumber" placeholder="Enter your Trade Licence Number">
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
    <input type="submit" value="Done" name="btnreg">

</form>


<?php

    if($input==11 && isset($_POST["btnreg"])){
		
		$data = file_get_contents('sellerInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		$trigger = false;
		while($flag){

			if($json_arr[$count]['Email']==$email){

                $json_arr[$count]['Username']=$username;
                $json_arr[$count]['Password']=$password;
                $json_arr[$count]['Gender']=$gender;
                $json_arr[$count]['Number']=$number;
                $json_arr[$count]['Address']=$address;
                $json_arr[$count]['BirthDate']=$birthdate;
                $json_arr[$count]['NIDCard']=$nidCard;
                $json_arr[$count]['BankAccountNumber']=$bankAccountNumber;
                $json_arr[$count]['BankCardNumber']=$bankAccountNumber;
                $json_arr[$count]['ShopName']=$shopName;
                $json_arr[$count]['TradeLicenceNumber']=$tradeLicenceNumber;
                $trigger=true;
                $flag=false;
			}

			$count++;
		}
		if($trigger){

			file_put_contents('sellerInfo.json', json_encode($json_arr));
            echo "<span style='color:green';><small>Profile Updated</small></span><br>";

		}
        
    }
?>

    </body>


</html>
































