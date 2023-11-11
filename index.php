<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styl.css">
    <title>Konwerter żużlowy</title>
    
</head>
<body>
    <div id="container">
        <div id="title">
        KONWERTER ŻUŻLOWY
        </div>
        <div class="menu">
            <a href="index.php" class="option">START</a>
            <a href="app.php" class="option">APLIKACJA</a>
            <a href="author.php" class="option">AUTOR</a>
        </div>
       
        <div id="input">
          <form method="POST" action="main.php" class="custom-form">
              <input type="text" id="user-input" name="user-input" placeholder="Podaj link do meczu" class="custom-input">
              <input type="submit" value="Wyślij" class="custom-button">
          </form>
        </div>

        <div id="topbar">            
                Aplikacja konwertuje wyniki meczów żużlowych. Konwerter pozwala na przekształcenie danych z formatu tabelarycznego, 
                w którym przedstawione są wyniki uzyskane przez poszczególnych zawodników, do formatu biegowego, w którym wyniki przedstawione są w poszczególnych biegach meczu żużlowego.
            <div style="clear:both;"></div>
        </div>
       
        <div id="footer">
            Aplikacja została stworzona w ramach pracy inżynierskiej.
        </div>
    </div>
    
</body>
</html>
