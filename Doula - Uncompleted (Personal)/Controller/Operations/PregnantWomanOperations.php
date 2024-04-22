<?php

//include require __DIR__. '/../SellerClass.php';
include 'SellerClass.php';


class OPregnantWoman extends PregnantWoman{

	function Insert($seller){

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="predoula";

		$conn=new mysqli($servername,$username,$password,$dbname);

		echo "<br> Printing ".$seller->username."----------".$seller->email;
		$username = $seller->username;
		$email = $seller->email;
        $password = $seller->password;
        $gender = $seller->gender;
        $birthDate = $seller->birthDate;
        $number = $seller->number;
        $address = $seller->address;
        $nidCard = $seller->nidCard;
        $shopName = $seller->shopName;
        $tradeLicenceNumber = $seller->tradeLicenceNumber;
        $bankAccountNumber = $seller->bankAccountNumber;
        $bankCardNumber = $seller->bankCardNumber;
            

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}
		else
		{
			$q="INSERT INTO Seller(Username, Email, Password, Gender, BirthDate, Number, Address, NIDCard, ShopName, TradeLicenceNumber, BankAccountNumber, BankCardNumber) VALUES('".$username."','".$email."', '".$password."','".$gender."','".$birthDate."','".$number."','".$address."','".$nidCard."','".$shopName."','".$tradeLicenceNumber."','".$bankAccountNumber."','".$bankCardNumber."')";
			echo "Connection Successful";
			$result=$conn->query($q);
			
			if($result){

                echo "data inserted successfully";
            }
			else{

				echo "data not inserted";
            }
		}

	}



    function Update($seller){


		echo "<br> Printing ".$seller->username."----------".$seller->email;
		$username = $seller->username;
		$email = $seller->email;
        $password = $seller->password;
        $gender = $seller->gender;
        $birthDate = $seller->birthDate;
        $number = $seller->number;
        $address = $seller->address;
        $nidCard = $seller->nidCard;
        $tradeLicenceNumber = $seller->tradeLicenceNumber;
        $bankAccountNumber = $seller->bankAccountNumber;
        $bankCardNumber = $seller->bankCardNumber;
            

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}
		else
		{
			$q="INSERT INTO Seller(Username, Email, ) VALUES('".$username."','".$email."', '".$password."','".$gender."','".$birthDate."','".$number."','".$address."','".$shopName."','".$tradeLicenceNumber."','".$nidCard."','".$bankAccountNumber."','".$bankCardNumber."')";
			echo "Connection Successful";
			$result=$conn->query($q);
			
			if($result){

                echo "data inserted successfully";
            }
			else{

				echo "data not inserted";
            }
		}

	}

	function __construct(){

		echo "I am from Operation";
	}
}

?>