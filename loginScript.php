<?php include('connect.php');


if(isset($_POST["submit"])){
	$email=$_POST["user"];
	$pass=$_POST["pass"];
	
	$query=mysqli_query($conn,"SELECT username,parola,rol FROM conturi");
	while($row=mysqli_fetch_array($query))
	{
		$db_email=$row["username"];
		$db_pass=$row["parola"];
		$db_type=$row["rol"];
		
		if($email==$db_email && $pass==$db_pass){
			session_start();
			$_SESSION["username"]=$db_email;
			$_SESSION["rol"]=$db_type;
			
			if($_SESSION["rol"]=='medic'){
				header("Location:http://irina.ro/medic.php");
			}
			elseif($_SESSION["rol"]=='pacient'){
				header("Location:http://irina.ro/pacient.php");
			}
			elseif($_SESSION["rol"]=='operator'){
				header("Location:http://irina.ro/operator.php");
			}
			else{
				header("Location:http://irina.ro/admin.php");
			}
		}
		else
			echo("fail");
	}}