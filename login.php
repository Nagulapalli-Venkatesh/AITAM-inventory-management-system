<?PHP
	include 'conn.php';
	session_start();
	
	if(isset($_POST['username']))
	{
	$a=$_POST['username'];
	$b=$_POST['password'];
	
	$sql="SELECT * FROM `login` where `user`='.$a.'AND `pass`='.$b.' limit 1";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result); 
	if ($row['user']== $a AND $row['pass'] == $b) {

		$_SESSION['user_name']=$a;
		header('location:home.php');# code...
	}
	else
<?php
include "connect.php";

session_start();	
 $us = $_POST['username'];
 $ps = $_POST['password'];
 $option = $_POST['option'];

	$sql="SELECT * FROM `login` where `user`='$a' AND `pass`='$b' limit 1";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result); 
		if ($row['user']== $a AND $row['pass'] == $b) {

		$_SESSION['user_name']=$a;
		header('location:home.php');# code...
	}
else{
		echo "<script>alert('Password is incorrect.');</script>";
		echo "<script>window.location='index.php';</script>";
	}
}else
{
	echo "<script>alert('Please Check Your Username and Password');</script>";
		echo "<script>window.location='index.php';</script>";


}

?>