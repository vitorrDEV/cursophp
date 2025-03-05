<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o $</title>
</head>
<body>
    <?php 
        $nome = "Vitor";
        $idade = 20;
        const PAIS = "Brasil";

        print "Oi $nome, voce tem $idade anos e mora no " . PAIS;
    
    ?> 
</body>
</html>