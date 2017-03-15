<?php
include 'storage.php';

if(isset($_POST['submit']))
{
	$name= mysqli_real_escape_string($con ,$_POST['name']);
	$age= mysqli_real_escape_string($con ,$_POST['age']);
	$pass= mysqli_real_escape_string($con ,$_POST['pass']);
	$link= mysqli_real_escape_string($con ,$_POST['link']);
	if(!isset($name) || !isset($pass) || !isset($age) || !isset($link) || $name=="" || $pass=="" || $link=="" )
	{
      header("Location: register2.php");
	}
	else
	{
		$query = "INSERT INTO link2 (name,age,password,link) VALUES ('$name',$age,'$pass','$link')";
		if(!mysqli_query($con , $query))
		{
			die('Error: '.mysqli_error($con));
		}else {
		header("Location: index.php");
		exit();}
	}

}
?>