<?php
    session_start();

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="doula";
    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    else
    {
        $q="Select * from Seller";
        $result=$conn->query($q);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "Username: ".$row["Username"]."<br>Email:".$row["Email"]."Gender:".$row["Gender"]."BirthDate:".$row["BirthDate"]."Number:".$row["Number"]."Address:".$row["Address"]."NID Card:".$row["NIDCard"]."Shop Name:".$row["ShopName"]."Trade Licence Number:".$row["TradeLicenceNumber"]."Bank Account Number:".$row["BankAccountNumber"]."Bank Card Number:".$row["BankCardNumber"];
            }
        }
        else
        {
            echo "no table data";
        }
		    
        
    }
    $conn->close();

    
?>