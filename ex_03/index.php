<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo sobre variaveis</title>
</head>

<body>

    <h1>
        <?php
        $nome = "Gianluca";
        $nome_do_meio = "Schmidt";
        $sobrenome = "Mantovanelli";
        $salario = 0;
        $idade = 25;
        $peso = 80.5;
        $mood = "\u{1FAE8}"; // Unicode para o caractere de casado

        const PAIS = "Brasil";

        echo "Muito prazer meu nome é " . $nome . " " . $nome_do_meio . " " . $sobrenome . " e moro no " . PAIS;
        echo "<br>";
        echo "Meu salario é de R$ " . $salario;
        echo "<br>";
        echo "Minha idade é de " . $idade . " anos";
        echo "<br>";
        print "Meu peso é de " . $peso . " kg";
        echo "<br>";
        print "como está seu humor? " . $mood;
        ?>
    </h1>

</body>

</html>