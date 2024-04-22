<html>

    <head>
        <title>My Profile</title>
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
        <a href="adminHome.php">Home</a>
        <a href="stats.php">Stats</a> 
        <a href="doctors.php">Doctors</a>
        <a href="sellers.php">Sellers</a>  
        <a href="">Accounts</a> 
        <a href="adminProfile.php">Profile</a>
        <a href="../Common/logout.php">Logout</a>
        </nav>
            <h1>Profile</h1>
            <?php
                session_start();

                $data = file_get_contents('adminInfo.json');
                $json_arr = json_decode($data, true);
                $size = sizeof($json_arr);
                $count=0;
                $flag = true;
                $trigger = true;


                while($flag){

                    if($json_arr[$count]['Email']==($_SESSION["email"])){

                        echo "<p><small>Full Name :</small><br>".$json_arr[$count]['Username']."<br>";
                        echo "<p><small>Email :</small><br>".$json_arr[$count]['Email']."<br>";
                        echo "<p><small>Gender :</small><br>".$json_arr[$count]['Gender']."<br>";
                        echo "<p><small>Birth Date :</small><br>".$json_arr[$count]['BirthDate']."<br>";
                        echo "<p><small>Phone :</small><br>".$json_arr[$count]['Number']."<br>";
                        echo "<p><small>Address :</small><br>".$json_arr[$count]['Address']."<br>";
                        echo "<p><small>Job Position :</small><br>".$json_arr[$count]['JobPosition']."<br>";
                        echo "<p><small>NID Card Number :</small><br>".$json_arr[$count]['NIDCard']."</p>";
                        echo "<p><small>Bank Account Number :</small><br>".$json_arr[$count]['Bank Account Number']."</p>";
                        echo "<p><small>Bank Card Number :</small><br>".$json_arr[$count]['Bank Card Number']."</p>";
                        $trigger=false;
                        $flag=false;
                    }
                    if($count==$size){

                        $flag=false;
                    }
                        $count++;
                }
                ?>

        </body>


</html>