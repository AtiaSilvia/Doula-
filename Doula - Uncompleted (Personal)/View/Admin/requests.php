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

?>
<button type="submit" id="showDoctors"> Show Doctors Requst </button>

    <div id="doctors">
    </div>

    <div id="sellers"> 
    </div>

<button type="submit" id="showSellers"> Show Seller Requst </button>

    <script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#showDoctors").on("click",function(e){
				$.ajax({
					url:"../../Model/requestedDoctor.php",
					type:"POST",
					success:function(data){
						$("#doctors").html(data);
					}
				});
			});
		});
	</script>

    <script>

        $(document).ready(function(){
			$("#showSellers").on("click",function(e){
				$.ajax({
					url:"../../Model/requestedSeller.php",
					type:"POST",
					success:function(data){
						$("#sellers").html(data);
					}
				});
			});
		});
        </script>
    <?php





?>

</body>

</html>