<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserva
 *
 * @author Kazuo
 */
class Reserva {
    
    private $idCliente;
    private $numeroReserva;
    private $data;
    private $hora;
    private $valor_total;
    
    function __construct(string $idCliente, string $numeroReserva="", string $data,  string $hora, string $valor_total) {
        $this->idCliente = $idCliente;
        $this->data = $data;
        $this->hora = $hora;
        $this->valor_total = $valor_total;
    }

    function getData() {
        return $this->data;
    }

    function getHora(){
        return $this->hora;
    }
    
    function getIdCliente(){
        return $this->idCliente;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getNumeroReserva() {
        return $this->numeroReserva;
    }

    
}
