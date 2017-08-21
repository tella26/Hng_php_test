<?php

$host='localhost';
$user='root';
$pass='';
$db='hngtest';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected succesfully to hng database';

$sql = "insert into mytable1 (username,password,email)values('tella26',12345,'tellababatunde@g.com')";
$query=mysqli_query($con,$sql);
if($query)
	echo 'data inserted successfully';

?>	