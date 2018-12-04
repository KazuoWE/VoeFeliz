<?php

require_once("model/AbstractFactory.php");
require_once("model/ClienteFactory.php");
require_once("model/Cliente.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CGManager
 * @author Kazuo
 */
class ClienteManager {


    private $factory;

    public function __construct(){
        $this->factory = new ClienteFactory();
    } 

    /**
    *Cadastra cliente
    *
    *@param $nome
    *@param $rua
    *@param $bairro
    *@param $numero
    *@param $cep
    *@param $usuario
    *@param $senha 
    *@param $Csenha
    *
    *@author Jefferson Souza Rodrigues
    */

    public function cadastraCliente(string $nome,string $rua, string $bairro, string $numero, string $cep, string $usuario, string $senha, string $Csenha)
    {
        //consulta o nome no banco
        $r1 = $this->factory->buscaNome($nome);
        $r2 = $this->factory->buscaUsuario($usuario);

        //Verifica se existe alguma linha com o nome correspondente
        if(count($r1) == 0) {

            //Verifica se existe alguma linha com o Usuário correspondente
            if(count($r2) == 0) {
                //Compara a senha com a Confirmação de senha, 0 se são iguais, outro valor se diferentes
                if(strcmp($senha, $Csenha) == 0) {

                    $c = new Cliente($nome, $rua, $numero, $bairro, $cep, $usuario ,$senha, "");
                    $sucesso = $this->factory->salvar($c);

                    if($sucesso){
                        echo "Cadastrado com sucesso no Banco de DADOS";
                        require 'view/telaInicial.php';
                    }else{
                        echo "N&atilde;o foi cadastrado com sucesso no Banco de DADOS";
                    }
                }
                else {
                    require 'view/cadastroUsuario.php';
                    echo "Senha n&atilde;o s&atilde;o iguais. Digite novamente";
                    $result = -1;
                }
            }
            else {
                require 'view/cadastroUsuario.php';
                echo "O cliente n&atilde;o foi adicionado. Usu&aacute;rio j&aacute; existente!";    
            }
        } 
        else {
            require 'view/cadastroUsuario.php';
            echo "O cliente n&atilde;o foi adicionado. Nome j&aacute; existente!";
        }
    }

    /**
    *
    *
    *@param $usuario
    *@param $senha
    *
    *@author Jefferson Souza Rodrigues
    */
    public function verificaLogin(string $usuario, string $senha) {


        $c = $this->factory->buscaUsuario($usuario);
        /*Verifica que existe o Usuário correspondente e como só pode ter 1 usuario
        o único resultado possível é 1*/
        if (count($c) >= 1) {

            foreach ($c as $cliente) {
                
                if ($cliente->getSenha() != $senha) {
                    return false;
                }
                else{
                    return true;
                }
            }

        }
        else{
            return false;
        } 
    }


    /**
    *
    * @param $param - Usado sempre como $usucario 
    * @return array - retorna dados do cliente do banco 
    */
    public function buscarCliente($param) {
       
        return $this->factory->buscaUsuario($param);
    }

    public function listar() {
        
    }
   

}
