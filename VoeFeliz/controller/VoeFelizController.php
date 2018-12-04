<?php

require_once("model/ClienteFactory.php");
require_once("model/ClienteManager.php");
require_once("model/ReservaManager.php");
require_once("model/ReservaFactory.php");
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
    private $Rmanager;
    private $cliente;

    public function __construct() {

        $this->manager = new ClienteManager();
        $this->Rmanager = new ReservaManager();

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
                $this->reserva($this->getCliente());
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
            case 'telaCliente':
                $this->telaCliente($cliente);
                $this->cliente = $cliente;
                if(isset($cliente) and count($cliente) > 0){
                    echo("Tem cliente Graças a Deus!!");
                    $cliente = $cliente;
                }
                else{
                    echo "Não tem cliente";
                }
                break;
            default:
                $this->home();
                break;
        }
    }

    /**
    *Ações de reservas e compras de passagens
    * @author Jefferson 
    */
    public function reserva($cliente) {

        require 'view/telaReserva.php';
    }

    public function comprarPassagem(){

        if(isset($_POST['procurar'])){

            $origem = $_POST['cidadeOrigem'];
            $destino = $_POST['cidadeDestino'];
            
            //Se origem e destinos são iguais exibe mensagem de erro
            if ($origem == $destino) {
                $texto = "\nCidade de Origem e Destino n&atilde;o podem ser iguais\n";
                require 'view/telaReserva.php';
                echo nl2br($texto);
            }
            else{

                $dataIda = $_POST['dataIda'];
                $dataVolta = $_POST['dataVolta'];
                
                $c = $this->getCliente();
                // if(isset($c) and count($c) > 0){
                //     echo("Tem cliente Graças a Deus!!");
                //     $cliente = $cliente;
                // }
                // else{
                //     echo "Não tem cliente";
                // }
                $this->Rmanager->cadastraReserva('1',  date("Y-m-d"),  date('H:i:s'), '500.00');


                require 'view/listaVoos.php';
            }
        }
    }

    /**
    *
    *Telas de cadastro dos usuários
    *@author Hatanael Lima
    */ 
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

    /**
    *
    *Tela inicial
    *@author Jefferson
    */
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

                    $cliente = $this->manager->buscarCliente($usuario);
                    $this->telaCliente($cliente);
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

    public function getCliente(){
        return $this->cliente;
    }


    public function telaCliente($cliente){
        $this->cliente = $cliente;

        $listaReserva = $this->Rmanager->listar();
        require 'view/telaCliente.php';


        if (isset($_POST['reservar'])) {
            $this->reserva($this->cliente);
        }

    }


    public function alterarPassagem() {
        require 'view/listaVoos.php';
    }


}



?>
