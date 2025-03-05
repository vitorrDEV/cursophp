<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        //$v = false;
        //var_dump($v);

        // 0x = hexadecimal 0b = binaro 0 = octal
        //$num = 010;
        //echo "O valor da variavel é $num"

        //$vet = [3,6,2,1,9];
        //var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p =new Pessoa;
        var_dump($p);

    ?>
    
</body>
</html>