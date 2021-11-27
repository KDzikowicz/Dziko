<?php
 
$db = mysqli_connect("localhost","Karol","123","dziko");
 
if(!$db)
{
 die("Connection failed: " . mysqli_connect_error());
}
 
?>