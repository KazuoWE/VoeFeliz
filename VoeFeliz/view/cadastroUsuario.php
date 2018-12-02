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
        <h1>Cadastro de usuário</h1>

        <div id="cadastro">
            <form action="?funcao=novoUsuario" method="post">
                <label>Nome Completo:</label>
                <input type="text" name="nome" placeholder="Digite Nome Completo">
                <p></p>
                <div id="endereco">
                    
                    <label>Endereço</label>
                    <p>
                        <label>CEP:</label>
                        <input type="text" name="cep" required=""><p></p>
                        <label>Rua:</label>
                        <input type="text" name="rua" required=""><p></p>
                        <label>Bairro:</label>
                        <input type="text" name="bairro" required=""><p></p>
                        <label>Numero:</label>
                        <input type="text" name="numero" required="" ><p></p>
                    </p>
                </div>
                <p>
                    <label>Usuário</label>
                    <input type="text" name="usuario" placeholder="Digite um Usuario Válido">
                </p>

                <p>
                    <label>Senha</label>
                    <input type="password" name="senha" required="" placeholder="Digite a senha">
                    <label>Confirmar Senha</label>
                    <input type="password" name="confirmaSenha" required="" placeholder="Confirme Senha"><p></p>

                    <input type="submit" name="enviado" value="Cadastrar">
                    <input type="reset" name="limpar" value="limpar" >
                    <a href="?funcao=home">Tela Inicial</a>
                </p>
            </form>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
