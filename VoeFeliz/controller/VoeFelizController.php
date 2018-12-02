<?php

require_once("model/CGFactory.php");
require_once("model/CGManager.php");
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

    private $manager;

    public function __construct() {

        $this->manager = new CGManager;

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
            case 'reserva':
                $this->reserva();
                break;
            case 'comprarPassagem':
                $this->comprarPassagem();
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
            case 'novoUsuario':
                $this->novoUsuario();
                break;
            case 'alterarPassagem':
                $this->alterarPassagem();
                break;
            default:
                $this->home();
                break;
        }
    }

    public function reserva() {
        require 'view/telaReserva.php';
    }

    public function comprarPassagem(){

        //if(isset($_POST['']))
    }

    public function cadastroUsuario() {
        require 'view/cadastroUsuario.php';
    }

    public function novoUsuario(){
        if(isset($_POST['enviado'])){

            $nome = $_POST['nome'];
            $cep = $_POST['cep'];
            $rua = $_POST['rua'];
            $bairro = $_POST['bairro'];
            $numero = $_POST['numero'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $Confsenha = $_POST['confirmaSenha'];

            try {

                $result = $this->manager->cadastraCLiente($nome, $rua, $bairro, $numero, $cep, $usuario, $senha, $Confsenha);
            

                if ($result == -1) {
                }else if ($result == 1) {
                      require 'view/cadastroUsuario.php';
                }else if ($result == 0) {
                     
                }


            } catch (Exception $e) {
                $msg = $e->getMessage();
            }

        }
    }


    public function listaVoos() {
        require 'view/listaVoos.php';
    }


    public function home() {
        require 'view/telaInicial.php';
    }

    public function login() {
        if(isset($_POST['entrar'])){
            
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            try {
                
                $result = $this->manager->verificaLogin($usuario, $senha);
                if($result){
                    require 'view/telaCliente.php';
                }
                else {
                    require 'view/telaInicial.php';
                    $texto = "\nUsuário ou senha inv&aacute;lido ou n&atilde;o cadastrado!!\n"; 
                    echo nl2br($texto);
                }
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }

            
        }

    }

    public function alterarPassagem() {
        require 'view/listaVoos.php';
    }


}



?>
