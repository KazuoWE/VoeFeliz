<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Reserva de Passagem</title>
        <link rel="stylesheet" type="text/css" href="view/estilo.css">
    </head>
    <body>
    	<h1>Reserva de Passagem</h1>
        
        <!-- <form >
            <input type="radio" name="escolhaIdaVolta" checked>Ida e Volta
            <input type="radio" name="escolhaIdaVolta">Somente Ida<br>
        </form> -->

        <form action="?funcao=compraPassagem" method="post">

            <h3>Origem</h3>
            <input type="text" name="cidadeOrigem">
            <h3>Destino</h3>
            <input type="text" name="cidadeDestino">
            <p>
                <label>Data de Ida</label>
                <input id="dataIda" type="date" name="dataIda" required="" min="<?php echo date("Y-m-d") ?>">

                <script type="text/javascript">
                    function data() {
                         return document.getElementById('dataIda');
                    }
                </script>


                <label>Data Volta (Opcional)</label>
                <input type="date" name="dataVolta" min="data()"><p></p>

                <input type="submit" name="procurar" value="Procurar Vôo">


            </p>

        </form>


        <?php
        

        
        ?>
    </body>
</html>
