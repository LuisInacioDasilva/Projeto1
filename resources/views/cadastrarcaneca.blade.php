<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/cadastrarcanecas_store" method="get">
        ID: <input type="number" name="ID" id="ID" maxlength="10" size="12"><br>
        Nome Caneca: <input type="text" name="nome" id="nome" maxlength="50" size="22"><br>
        Cor Caneca: <input type="text" name="cor" id="cor" maxlength="12" size="10"><br>
        Quantidade: <input type="number" name="quantidade" id="quantidade" maxlength="10" size="17"><br>
        Valor: <input type="number" name="valor" id="valor" maxlength="100" size="17"><br>
        <button type="submit" name="Enviar" value="Enviar">Enviar</button>
        <button type="reset" name="Limpar" value="Limpar">Limpar</button>
    </form>
    
</body>
</html>