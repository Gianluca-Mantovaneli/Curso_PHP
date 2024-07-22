<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo sobre tipos primitivos</title>
</head>

<body>
    <h1>
        <?php
        echo "1-Tipos primitivos: <br>";
        echo "1.1-Tipos primitivos Escalares: <br>";
        $nome = "Gianluca"; // String
        echo "1.1.1-String: <br>" . $nome;
        $idade = 25; // Int ou integer
        echo "<br>1.1.2-Inteiro: <br>" . $idade;
        $peso = 75.5; // Float ou double
        echo "<br>1.1.3-Float: <br>" . $peso;
        // no php da pra representar numeros na base hexadecimal apartir do 0x.
        $hexadecimal = 0x1A; // Inteiro Hexadecimal
        echo "<br>1.1.4-Inteiro Hexadecimal: <br>" . "0x1A = " . $hexadecimal;
        // no php da pra representar numeros na base octal apartir do 0.
        $octal = 012; // Inteiro Octal
        echo "<br>1.1.5-Inteiro Octal: <br>" . "012 = " . $octal;
        // no php da pra representar numeros na base binaria apartir do 0b.
        $binario = 0b1101; // Inteiro Binario
        echo "<br>1.1.6-Inteiro Binario: <br>" . "0b1101 = " . $binario;
        // a função var_dump() retorna o tipo da variavel e o valor.
        echo "<br>1.1.7-Var_dump: <br>";
        echo var_dump($binario);
        // Apesar de não precisar declarar o tipo da variavel na declaração, o php é uma linguagem fracamente tipada, ou seja da pra forçar um tipo de variavel escrevendo (float) antes da variavel por exemplo.
        $casado = false; // Boolean
        echo "<br>1.1.8-Boolean: <br>" . $casado;
        echo var_dump($casado);
        // no php os valres booleanos não aparecem no echo ou print, mas se usar a função var_dump() aparece.

        echo "<br><br>1.2-Tipos primitivos Compostos: <br>";
        $frutas = array("abacaxi", "laranja", "manga", 2, 2.5, true); // Array
        echo "1.2.1-Array: <br>";
        echo var_dump($frutas);

        echo "<br><br>1.3-Tipos primitivos Especiais: <br>";
        $nulo = NULL; // Null
        echo "1.3.1-Null: <br>";
        echo var_dump($nulo);

        ?>
    </h1>
</body>

</html>