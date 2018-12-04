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
        
      

        <form action="?funcao=comprarPassagem" method="post">

            <h3>Origem</h3>
            <select name="cidadeOrigem" id="cidadeOrigem" required="">
                <option value="Campo Grande" selected="selected">Campo Grande</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro </option>
                <option value="Natal">Natal</option>
            </select>
            <h3>Destino</h3>
            <select name="cidadeDestino" id="cidadeDestino" required="">
                <option value="" selected=""></option>
                <option value="Campo Grande">Campo Grande</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro </option>
                <option value="Natal">Natal</option>
            </select>
            <p>

                <?php /*Pega a data Atual*/
                $data =  date("Y-m-d"); ?> 
                <p></p>
                <label>Data de Ida</label>
                <input id="dataIda" type="date" name="dataIda" required="" min="<?php echo $data; ?>">

                 <?php  //echo $_GET['dataIda'];?>

                <label>Data Volta (Opcional)</label>
                <input type="date" name="dataVolta" min="<?php echo $data; ?>"><p></p>

                <input type="submit" name="procurar" value="Procurar Vôo">
                <p>
                    <?php 
                        if(isset($cliente) && count($cliente) > 0){
                            echo("Tem cliente Graças a Deus!!");
                        }
                        else{
                            echo "Não tem cliente";
                        }
                    ?>
                </p>

            </p>

        </form>

        <?php
        

        
        ?>
    </body>
</html>
