<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT -3
        echo "Hoje é dia: " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s");

        //Regras para nomes identificadores
        //1 - Variaveis sempre começam com o simbolo $
        //2 - O segundo pode ser letra ou o simbolo _
        //3 - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
        //4 - Aceita caracteres da tabela ASCII a partir de 128
        //5 - Aceita caracteres cacentuados como á,õ,ç
        //6 - A lingugagem é case sensitive em relação ao nomes
        //7 - Nomes especiais como $this nao podem ser utilizadas
        
    ?>
</body>
</html>

