<?PHP
	include 'connect.php';
	
	session_start();
	
	$a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temer'];
	
	$query = "INSERT INTO `outward`( `date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
	
	$sql= mysqli_query($conn, $query);
	if (condition) {
		echo "<script>alert('outward details have been uploaded')</script>";
		header('location:outandin.php');
	}else{
		echo "<script>alert('outward details are Not Uploaded')</script>";
	}
	
	
?>