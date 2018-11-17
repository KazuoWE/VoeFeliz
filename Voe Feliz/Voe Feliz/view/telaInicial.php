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
                    <input name="nome" type="text" required/>
                    <label>Senha:</label>
                    <input type="password" name="senha" required>
                    <input type="submit" value="Entrar">
                </form>
            </div>
            
        </div>
        
        <div class="menu">
            <a href="?funcao=pedido">Fazer pedido</a>
            <a href="?funcao=cadastroUsuario">Cadastrar Usuário</a>
        </div>
        
    </body>
</html>
