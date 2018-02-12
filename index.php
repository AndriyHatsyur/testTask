<!doctype html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Перевірка гіпотези Гольдбаха</title>
  </head>
  <body>
    <div class='wrapper'>
      <div class="header">
        <h1>Перевірка гіпотези Гольдбаха</h1>
        <p>Додато дозволяє виконати перевірку гіпотези
          Гольдбаха для кожного парного числа з проміжку [2,n] та виводить одне (довільне) 
          розбиття його на суму двох простих чисел.</p>
      </div>
        <form method='POST' action="result.php" id="form">
          <p class="error"></p>
          <label>Введіть парне число більше 2</label>
            <input type="text" name="range">
            <input type="submit" name="send" class="btn" value="Преревірити">
        </form>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="js/validate.js"></script>
  </body>
</html>



