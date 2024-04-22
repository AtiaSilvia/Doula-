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
        $q="Select * from AcceptedSellers";
        $result=$conn->query($q);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<b>Name: </b>".$row["Username"]."<br>Email:".$row["Email"]."<br>Gender:".$row["Gender"]."<br>BirthDate:".$row["BirthDate"]."<br>Number:".$row["Number"]."<br>Address:".$row["Address"]."<br>NID Card:".$row["NIDCard"]."<br>Shop Name:".$row["ShopName"]."<br>Trade Licence Number:".$row["TradeLicenceNumber"]."<br>Bank Account Number:".$row["BankAccountNumber"]."<br>Bank Card Number:".$row["BankCardNumber"];
            }
        }
        else
        {
            echo "no table data";
        }
		    
        
    }
    $conn->close();

    
?>