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
	
	$query = "INSERT INTO `outpass` (`dt`, `infra`, `modelname`, `serialnumber`, `type`, `purpose`, `temper`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
	
	$sql= mysqli_query($conn, $query);
	
	echo "<script>alert('new details of b block have been uploaded')</script>";
?>