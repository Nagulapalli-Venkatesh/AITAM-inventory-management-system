<?PHP
	include'connect.php';
	
	session_start();
	
	$a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temper'];
	$h="pending";

	$query="INSERT INTO `inward` (`date`, `infra`,`modelname`,`serialno`,`type`,`purpose`,`temper`,`status`) VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h')";
	
	$sql=mysqli_query($conn,$query);
 if($sql)
 {
	echo "<script>alert('inward details have been uploaded')</script>";
		header('location:inandout.php');
}else{
		echo "<script>alert('inward details are Not Uploaded')</script>";
	}
	
			
?>