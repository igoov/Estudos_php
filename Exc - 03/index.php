<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0x1A;
        echo "O valor da variavel é $num<br>";
        
        //0x = hexadecimal, 0b = binario, 0 = octal

        $v = 300;
        var_dump($v);
        
        echo "<br>";

        $v2 =   450.2;
        var_dump($v2);

        $numero = 3e2; // 3 x 10 (2)
        echo "<br>O valor é $numero<br>";

        $numerov2 = (int) 3e2; //coerção 
        var_dump($numerov2);

        echo "<br>";

        $numerov3 = (float) "950";
        var_dump($numerov3);

        $casado = false;
        echo "<br>O valor para casado é $casado"; //false = null, " "

        $casado1 = true;
        echo "<br>O valor para casado é $casado1"; //true = 1
    ?>
</body>
</html>