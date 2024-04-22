<head>
	<title>Stats</title>
	<style>
		nav{

			background-color: Black;
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
			background-color: MintCream;
			color: black;
		}
		.number{

			color: salmon;
			font-size: 50px;
		}
		
	</style>
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

    <h1>Stats</h1>

	<h3>Current users on the Doula</h3>

<?php

	session_start();

$data = file_get_contents('../Seller/sellerInfo.json');
$json_arr = json_decode($data, true);
$size = sizeof($json_arr);


	echo "<h4><span class='number'>".$size."</span> Sellers<br>";

$data = file_get_contents('../Doctor/doctorInfo.json');
$json_arr = json_decode($data, true);
$size = sizeof($json_arr);

	echo "<h4><span class='number'>".$size."</span> Doctors<br>";

$data = file_get_contents('../Woman/womanInfo.json');
$json_arr = json_decode($data, true);
$size = sizeof($json_arr);

	echo "<h4><span class='number'>".$size."</span> Pregnant Women<br>";
 

?>

</body>

</html>