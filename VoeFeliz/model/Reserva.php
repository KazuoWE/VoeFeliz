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
    
    private $numeroReserva;
    private $data;
    private $hora;
    private $valor_total;
    
    function __construct(string $numeroReserva, string $data, double $preco, string $hora) {
        $this->data = $data;
        $this->valor_total = $preco;
        $this->numeroReserva = $numeroReserva;
    }

    function getData() {
        return $this->data;
    }

    function getPreco() {
        return $this->valor_total;
    }

    function getNumeroReserva() {
        return $this->numeroReserva;
    }

    
}
