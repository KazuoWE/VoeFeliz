<?php

require_once("model/CGFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoeFelizController
 *
 * @author Kazuo
 */
class VoeFelizController {

    private $factory;

    public function VoeFelizController() {

        $this->factory = new CGFactory;

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {

        if (isset($_GET['funcao'])) {
            $f = $_GET['funcao'];
        } else {
            $f = "";
        }

        switch ($f) {
            case 'pedido':
                $this->pedido();
                break;
            case 'cadastroUsuario':
                $this->cadastroUsuario();
                break;
            case 'listaVoos':
                $this->listaVoos();
                break;
            case 'login':
                $this->login();
                break;
            case 'home':
                $this->home();
                break;
            default:
                $this->home();
                break;
        }
    }

    public function pedido() {
        require 'view/telaPedido.php';
    }

    public function cadastroUsuario() {
        require 'view/cadastroUsuario.php';
    }

    public function listaVoos() {
        require 'view/listaVoos.php';
    }

    public function home() {
        require 'view/telaInicial.php';
    }

    public function login() {

        require 'view/telaInicial.php';
    }

}
