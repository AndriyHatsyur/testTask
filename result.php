<?php
require 'classes/PrimeNumber.php';
$primeNumber = new PrimeNumber($_POST['range']);
$results = $primeNumber->getResult();
?>

<!doctype html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Результат розбиття</title>
  </head>
  <body>
    <div class='wrapper'>
        <div class="header">
            <h1>Результат розбиття</h1>
        </div>
        <div class="result">
            <table class="admin-list">
                <thead>
                    <tr>
                        <th>Число</th> <th>Розбиття</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($results as $key=>$value): ?>
                    <tr>
                        <td><?=$key?></td> <td> <?=$value[0]?> + <?=$value[1]?></td>
                    </tr>
                    <?php endforeach; ?>
                <tbody>
            </table>
        </div>
    </div>
  </body>
</html>