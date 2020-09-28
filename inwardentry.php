<?PHP
	include 'conn.php';
	
	session_start();
	
	$a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temper'];
	

	
	$query = "INSERT INTO `inward` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
	
	$sql= mysqli_query($conn, $query);
	echo "<script>alert('Submited successfully..');</script>";
	echo "<script>window.location='inandout.php';</script>";
	
?>