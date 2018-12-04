<?php

require_once("model/AbstractFactory.php");
require_once("model/ReservaFactory.php");
require_once("model/ClienteManager.php");
require_once("model/Reserva.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserva Manager
 * @author Jefferson
 */
class ReservaManager {

	private $factory;

    public function __construct(){
        $this->factory = new ReservaFactory();
    } 


    public function listar(){
    	return $this->factory->listar();
    }

    public function cadastraReserva(string $idCliente, string $data,  string $hora, string $valor_total){

    	$reserva = new Reserva($idCliente, "", $data, $hora, $valor_total);

    	$this->factory->salvar($reserva);





    }

}

?>