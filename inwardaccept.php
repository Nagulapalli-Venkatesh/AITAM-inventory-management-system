  <?PHP 
	include 'connect.php';

		 $a=$_GET['k'];	
		$query=" SELECT * FROM `inward`  WHERE `sno`='$a'";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		
			$query="UPDATE `inward` SET `status`='accept' WHERE `sno`='$a' ";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('accepted');</script>";
				
				header('location:inandout.php');
			}
			else{
				echo "<script>alert('accept failed')</script>";
			}	
	
?>