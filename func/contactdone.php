<?php

	include "connect.php";
	$contactid  = intval($_GET['contactid']);
	$sql="DELETE FROM contactus WHERE contactid =$contactid";
	$result=mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)<=0)
	{
	echo "<script>alert('Unable to delete data!');";
	die ("window.location.href='../interface/dbcontact.php';</script>");
	}

	echo "<script>alert('Contact Done!');</script>";
	echo "<script>window.location.href='../interface/dbcontact.php';</script>";

?>
