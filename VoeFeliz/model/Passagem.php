<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passagem
 *
 * @author Kazuo
 */

class Passagem {
    
    private $idPassagem;
    private $idCliente;
    private $numeroReserva;
    private $dataIda;
    private $dataVolta;
    private $preco;
    private $companhia;

    
    function __construct(string $idPassagem="", string $idCLiente ,date $dataIda, date $dataVolta, double $preco, string $companhia) {

        $this->dataIda = $dataIda;
        $this->dataVolta = $dataVolta;
        $this->preco = $preco;
        $this->companhia = $companhia;
    }

    function getIdPassagem() {
        return $this->idPassagem;
    }
    
    function getIdCliente() {
        return $this->idCliente;
    }

    function getDataIda() {
        return $this->dataIda;
    }

    function getDataVolta() {
        return $this->dataVolta;
    }

    function getPreco() {
        return $this->preco;
    }

    function getCompanhia() {
        return $this->companhia;
    }


    
}
