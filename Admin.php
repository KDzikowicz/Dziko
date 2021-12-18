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
        <div class="media">
            <div class="media">
                <li><a href="Dziko.html" class="button">Strona Główna</a></li>
                <li><a href="O_Nas.html" class="button">O Nas</a></li>
            </div>
            <div class="media">
                <li><a href="Program.html" class="button">Program</a></li>
                <li><a href="Wymagania.html" class="button">Wymagania</a></li>
                <li><a href="Kontakt.html" class="button">Kontakt</a></li>
            </div>
            <div class="media">
                <li><a href="Admin.php" class="button">Zaloguj</a></li>
            </div>
        </div>
        </ul>
    </nav>
    </div>
    <div>
        <main>
            <h1>Zaloguj się</h1>
        <div class="content">
            <article>
            <form action="login.php" method="post" class="contact">
        <label for="login">Nazwa Użytkownika</label>
        <input type="text" id="login" name="username" placeholder="">
        <label for="password">Hasło</label>
        <input type="password" name="password" id="password" placeholder="">
        <button class="btn btn-outline-success" type="submit">Zaloguj się</button>
    </form>
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