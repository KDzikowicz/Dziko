<?php
include "db_connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);

$sql = "SELECT * FROM accounts where username = '$username' and password = '$password' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1)
{
    echo "Udane Logowanie";
}
    else{
    echo "Błędny login lub hasło";
}
mysqli_close($db);
?>
