<?php
include "db_connection.php";
 
if(isset($_POST['submit']))
{
 $name = $_POST['Imie'];
 $email = $_POST['E-mail'];
 $message = $_POST['Tekst'];
 
 $insert = mysqli_querry($db, "INSERT INTO `kontakt`(`name`, `surname`, `message`) VALUES ('$name', '$email', '$message')");
 
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