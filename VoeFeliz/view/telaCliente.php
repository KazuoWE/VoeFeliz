<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/estilo.css">
	<title>Gerenciamento do Usuário</title>
</head>
<body>
	<h1>Gerenciamento do Usuário</h1>

	<?php 
	//verifica se o vetor está inicializado e possui alguma reserva	
	if(isset($listaReserva) && count($listaReserva) >=1) 
	{ ?>
		<table>
            <caption>Tabela com contatos cadastrados</caption>
            <thead>
                <tr>
                    <th>Número da Reserva</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <body>
            	<?php 
            		foreach ($listaReserva as $l) {
            			$reserva = (integer) $l->getNumeroReserva();
            			echo "<tr> <td>" .$reserva . "</td>";
            			echo "<td>" . $l->getData(). "</td>";

            			echo "<td>" . $l->getHora(). "</td>";
            			echo "<td>" . $l->getValor_total(). "</td></tr>";
            		}

            	?>

            </body>
            <footer>
            	<tr>
            		<td colspan="4">Total de Reservas: <?php echo count($listaReserva) ?></td>
            	</tr>
            </footer>
        </table>
    <?php } else { ?>

    	<h4>Não há Reservas para esse Cliente</h4>
    	<?php
    }
    ?>
	<form action="?funcao=reserva" method="post">
        
        <input type="submit" name="reservar" value="Realizar Nova Reserva">

    </form>

</body>
</html>