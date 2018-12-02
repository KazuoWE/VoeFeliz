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
    private $usuario;
    private $senha;
    private $id;
    
    public function __construct(string $nome, string $rua, string $numero, string $bairro, string $cep, string $usuario, string $senha, string $id="") {
        $this->nome = $nome;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->cep = $cep;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }
}
