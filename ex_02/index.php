<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo sobre tags</title>
</head>

<body>
    <h1> Testando tags:<br>
        <?php
        echo "Tag normal<br>";
        ?>

        <?= "Tag de impressão<br>" ?> <br>
    </h1>

    <h2>Aprendendo sobre funções:<br>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "Hoje é dia " . date('d/m/Y') . "<br>Dia da semana " . date('D') . "<br>";
        echo "Agora são " . date('H:i:s') . "<br>";
        ?>
    </h2>

</html>