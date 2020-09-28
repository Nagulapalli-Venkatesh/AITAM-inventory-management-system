<?PHP
	include 'connect.php';
	
	session_start();
	
	$a=$_POST['date'];
	$b=$_POST['facid'];
	$c=$_POST['qty'];
	$d=$_POST['expp'];
	$e=$_POST['priority'];
	$f="pending";
	
	$query = "INSERT INTO `order` (`date`, `facid`, `item`, `expp`, `priority`,`status`) VALUES ('$a', '$b', '$c', '$d', '$e','$f')";

	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert(oder details have been uploaded')</script>";
		header('location:home.php');
	}
	else{
		echo "<script>alert(oder details are Not Uploaded')</script>";
	}
	
?>