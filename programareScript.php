<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="cabinet";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
	$nume = $_POST['nume'];
	$cnp = $_POST['cnp'];
	$telefon = $_POST['telefon'];
	$email = $_POST['email'];

	$sql = "INSERT INTO pacienti (nume, cnp, telefon,email) VALUES ('$nume', '$cnp', '$telefon', '$email')";

	if ($conn->query($sql) === TRUE) //s-a facut insertul
		{
				header("Location: programare.php?succes");
		} 
		else 
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}

?>