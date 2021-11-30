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
    echo "Udane Logowanie" . "<br>" . "<br>";

    $sql = "SELECT `id`, `name`, `surname`, `message` FROM kontakt";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "<br>" . "Imię: " . $row["name"]. "<br>" . "Nazwisko: " . $row["surname"]. "<br>" . "Tekst: " .  $row["message"] . " " . "<br>" . "<br>";
    }
    } else {
        echo "Nie ma wyników";
    }
}
    else{
    echo "Błędny login lub hasło";
}
mysqli_close($db);
?> 
