<html>

<head>
	<title>Sellers</title>
	<link rel="stylesheet" href="CSS/sellers.css">
</head>
<body>

<nav>
<a href="adminHome.php">Home</a>
    <a href="stats.php">Stats</a> 
    <a href="doctors.php">Doctors</a>
    <a href="sellers.php">Sellers</a>  
    <a href="">Accounts</a> 
	<a href="adminProfile.php">Profile</a>
    <a href="../Common/logout.php">Logout</a>
</nav>

    <h1>Sellers List</h1>

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
		$count = 0;
        $result=$conn->query($q);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
				echo "<p>".($count+1).".<small>Name:</small><br>".$row["Username"]."<br>";
				echo "<small>".$row["ShopName"]."</small></p>";
            }
        }
        else
        {
            echo "no table data";
        }
		    
    }
    $conn->close();

?>

</body>

</html>