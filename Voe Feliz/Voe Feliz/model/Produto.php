<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author Kazuo
 */
class Produto {
    
    private $nome;
    private $tipo;
    private $preco;
    private $descricao;
    private $id;
    
    function __construct($nome, $tipo, $preco, $descricao, $id) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPreco() {
        return $this->preco;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getId() {
        return $this->id;
    }

    
}
