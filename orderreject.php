  <?PHP 
	include 'connect.php';

		 $a=$_GET['k'];	
		$query=" SELECT * FROM `order`  WHERE `sno`='$a'";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		
			$query="UPDATE `order` SET `status`='reject' WHERE `sno`='$a' ";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('Rejected');</script>";
				
				header('location:inandout.php');
			}
			else{
				echo "<script>alert('accept failed')</script>";
			}	
	
?>