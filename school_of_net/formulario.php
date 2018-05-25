<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>

        <h1>Formulario com PHp</h1>
        <hr>
        <form action="recebe.php" method="post">
            <label for="">Nome</label><br>
            <input type="text" name="nome"><br> <br>
            
            <label for="">E-mail</label><br>
            <input type="text" name="email"><br> <br>
            
            <fieldset>
            <legend>Área de intersse</legend>
            <input type="checkbox" name="interesse[]" value="informatica" id=""/> Informática <br>
            <input type="checkbox" name="interesse[]" value="filmes" id=""/> Filmes <br>
            <input type="checkbox" name="interesse[]" value="jogos" id=""/> Jogos <br>
            <input type="checkbox" name="interesse[]" value="religiao" id=""/> Religião <br>
            <input type="checkbox" name="interesse[]" value="ler" id=""/> Ler <br>
            </fieldset>
            <br>
            <label for="">Onde conheceu</label><br>
            <select name="onde_conheceu" id="">
                <option value="">Selecione</option>
                <option value="google">Google</option>
                <option value="amigos">Amigos</option>
                <option value="tv">TV</option>
            </select>
            <br><br>
            <label for="">Mensagem</label><br>
            <textarea name="mensagem" id="" cols="30" rows="10"></textarea><br><br>
            
            <fieldset>
                <legend>Redirecionar para</legend>
                <input type="radio" name="redirecionar" value="home">Home<br>
                <input type="radio" name="redirecionar" value="contato">Contato<br>
                
            </fieldset>
            
            <hr>
            <button type="submit">Enviar</button>
    </body>
</html>