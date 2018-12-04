<?php

require_once("model/AbstractFactory.php");
require_once("model/ReservaManager.php");
require_once("model/ClienteManager.php");
require_once("model/Reserva.php");
require_once("model/Cliente.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CGFactory
 *
 * @author Kazuo
 */
class ReservaFactory extends AbstractFactory {


    public function __construct(){
        parent::__construct();
    }

    public function buscaNome($param): array {return null;}


    public function buscaUsuario($param): array { return null;}


    public function buscarId($param): array { return null;}




    public function listar() :array {

    	$sql = "SELECT * FROM reserva";

		try {
			$resultRows = $this->db->query($sql);

			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}

			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Reserva");

			return $resultObject;

		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}

    }

    public function salvar($obj) { 
    	$r = $obj;

        try {

            $sql = "INSERT INTO reserva (idCLiente, data, hora, valor_total) VALUES ('" 
                    . $r->getIdCliente(). "', '" .$r->getData(). "', '" .$r->getHora(). "', '"
                    .$r->getValor_total(). "' )";

            
            if ($this->db->exec($sql)) {
                $texto = " Reserva Cadastrada com sucesso\n\n";
                echo nl2br($texto);
                $result = true;
            } else {
                $texto = "Reserva não realizada \n\n";
                echo nl2br($texto);
                $result = false;
            }

        } catch (PDOException $exc) {
            echo $exc->getMessage();
            $result = false;
        }

        return $result;


    }
}




?>