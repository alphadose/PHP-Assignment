<?php
include 'storage.php';
$name=$_POST['name'];
$pass=$_POST['pass'];
$query = "SELECT * FROM link2";
$link2= mysqli_query($con , $query);
$i=mysqli_num_rows($link2);
$flag=0;
for($j=0;$j<$i;$j++)
{

$row=mysqli_fetch_assoc($link2);
if($name==$row['name'] && $pass==$row['password'])
{
$flag=1;
$alpha="Your link is ".$row['link'];
echo $alpha;

}
if($j==$i-1 && $flag==0)
header("Location: index2.php");
}



?>