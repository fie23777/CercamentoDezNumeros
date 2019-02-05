{include file="inicio.tpl"}

<html lang="en-pt">
    <head>
        <meta charset="UTF-8">
        <title>Mega sena</title>
        
    </head>
    <h3>{$nome}</h3>
    <body>
        
        <form method="post" action="Cercar.php">
            <label for="numeros">Numeros a ser cercados
                <input type="text" name="numeros">
            </label>
            <input type="submit" value="Cercar" name="cercar"><br/> 
        </form>
       
        <a href="sair.php">Sair</a>
        
    </body>
</html>


{include file="fim.tpl"}