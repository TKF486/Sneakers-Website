<?php

	include "connect.php";
	$blogID=intval($_GET['blogID']);
	$sql="DELETE FROM blog WHERE blogID=$blogID";
	$result=mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)<=0)
	{
	echo "<script>alert('Unable to delete faq data!');";
	die ("window.location.href='../interface/dbblog.php';</script>");
	}

	echo "<script>alert('Blog Removed!');</script>";
	echo "<script>window.location.href='../interface/dbblog.php';</script>";

?>
