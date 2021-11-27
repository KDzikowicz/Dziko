<?php
include "db_connection.php";
 
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $message = $_POST['message'];
 
 $insert = mysqli_querry($db, "INSERT INTO `kontakt`(`name`, `surname`, `message`) VALUES ('$name', '$surname', '$message')");
 
 if(!$insert)
 {
 echo mysqli_error();
 }
 else{
 echo "Twoja wiadomość została wysłana";
 }
 
 mysqli_close($db);
}
?>