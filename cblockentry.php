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
	

	
	$query = "INSERT INTO `cblock` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
	
	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('Submited successfully..');</script>";
	echo "<script>window.location='cblock.php';</script>";
	} else {
		echo "<script>alert('Submited failed..');</script>";
		echo "<script>window.location='cblock.php';</script>";
	}
?>