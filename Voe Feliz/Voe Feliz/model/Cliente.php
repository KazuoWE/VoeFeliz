<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Kazuo
 */
class Cliente {
    
    private $nome;
    private $rua;
    private $numero;
    private $bairro;
    private $cep;
    private $id;
    
    function __construct($nome, $rua, $numero, $bairro, $cep, $id) {
        $this->nome = $nome;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getId() {
        return $this->id;
    }



}
