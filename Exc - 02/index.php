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

        //Recomendações para dar nomes
        //1 - Tente dar nomes claros e de facil identificacoes
        //2 - Evite nomes mt curtos ou muito longos
        //3 - Defina um padrao e siga em todo o projeto
        //4 - Para variaveis, de preferencias a letras minusculas
        //5 - Para constantes, de preferencia a letras maiusculas
        //6 - Use camelCase para metodos e atributos
        //7 - Use SNAKE_CASE para nomear constantes 
        
        //variavel camelCase = $nomeCompleto, $nomeCompletoCliente
        //variavel SNAKE_CASE = $telefone_contato_fornecedor

    ?>
</body>
</html>

