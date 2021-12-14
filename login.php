<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziko-MainPage</title>
    <link rel="stylesheet" href="Dzikostyle.css">
</head>
<body>
<div class="all">
    <div class="headernav">
        <header>
        <img src="Frame 2DzikoLogo.svg" alt="" class="mainlogo">
        </header>
    <nav>
        <ul>
            <div>
                <li><a href="Dziko.html" class="button">Wyloguj</a></li>
            </div>
        </ul>
    </nav>
    </div>
    <div>
        <main>
            <h1>Dziko - szkółka ze sprzętem survivalowym</h1>
        <div class="content">
            <article>
            <p>
<?php
include "db_connection.php";
if (isset($_POST['username'], $_POST['password'])){
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
}

else{
    echo "Sesja wygasła";
}
?> 
</p>
            </article>
            <div class="images">
                <img src="Tratwa DzikoTratwaDziko.svg" alt="">
            </div>
        </div>
        </main>
    </div>
</div>
</body>
</html>
