<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author Kazuo
 */
class Pedido {
    
    private $data;
    private $valor_total;
    private $pedido;
    
    function __construct($data, $preco, $pedido) {
        $this->data = $data;
        $this->valor_total = $preco;
        $this->pedido = $pedido;
    }

    function getData() {
        return $this->data;
    }

    function getPreco() {
        return $this->valor_total;
    }

    function getPedido() {
        return $this->pedido;
    }
    
    
}
