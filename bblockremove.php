<?PHP
	include 'conn.php';
	
	session_start();
	
	$a=$_GET['k'];
	$query ="DELETE FROM `bblock` WHERE `sno` = '$a'";
	
	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('REMOVED successfully..');</script>";
	echo "<script>window.location='Ablock.php';</script>";
	} else {
		echo "<script>alert('DATA NOT REMOVED');</script>";
	}
	
	
	
?>