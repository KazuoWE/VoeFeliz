<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Voe Feliz</title>
        <link rel="stylesheet" type="text/css" href="view/estilo.css"/>
    </head>
    
    <body>
        <div class="imagem">
            <h1>Voe Feliz</h1>
            
            <div class="areaLogin">
                <form action="?funcao=login" method="post">
                    <label>Usuário:</label>
                    <input name="usuario" type="text" required/><p></p>
                    <label>Senha:</label>
                    <input type="password" name="senha" required><p></p>
                    <input type="submit" value="Entrar" name="entrar">
                </form>
            </div>
            
        </div>
        <p></p>
        <div id="menu">
            <a href="?funcao=cadastroUsuario">Cadastrar Usuário</a>
        </div>
        
    </body>
</html>
