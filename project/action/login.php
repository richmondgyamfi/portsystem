<?php

	$uname=$_POST['Email'];
	$upword=$_POST['Password'];
	include('../dbconfig.php');
	
		$sql="select * from book where username='$uname' and password='$upword'"; 
		$result=mysqli_query($con, $sql); 
	
		if (mysqli_num_rows($result)==1) 
	{
		session_start();
		$_SESSION['Auth']="Yes"; 
		$data= mysqli_fetch_assoc($result); 
		$_SESSION['User_name']=$data['username'];
		$_SESSION['Acc_pass']=$data['password'];
		$_SESSION['Acc_full']=$data['full_name'];
		$_SESSION['Acc_priv']=$data['privilage'];
		header('location:  ../viewpage.php?page=table');
	} 
	else
	{ 

		//header('location:  ../password1.php');
	}
	
?>