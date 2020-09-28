<?PHP
	include 'conn.php';
	
	session_start();
	
	$a=$_GET['k'];
	$query ="DELETE FROM `cblock` WHERE `sno` = '$a'";
	
	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('REMOVED successfully..');</script>";
	echo "<script>window.location='cblock.php';</script>";
	} else {
		echo "<script>alert('DATA NOT REMOVED');</script>";
	}
	
	
	
?>