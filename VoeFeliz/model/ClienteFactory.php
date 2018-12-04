<?php

require_once("model/AbstractFactory.php");
require_once("model/ClienteManager.php");
require_once("model/Cliente.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CGFactory
 *
 * @author Kazuo
 */
class ClienteFactory extends AbstractFactory {


    public function __construct(){
        parent::__construct();
    }


    /**
    * Lista os objetos persistidos no banco, que possuem o $id.
    * @param string $nome - nome a ser buscado.
    * @return  array -  Array de objetos da classe, ou null se não encontrar
    * objetos.
    */
    public function buscaNome($param): array {

        $nome = $param;
        //Seleciona somente o nome do respectivo cliente e o retorna
        $sql = "SELECT * FROM cliente WHERE nome = '". $nome . "'";
        try {
            $resultRows = $this->db->query($sql);

            if (!($resultRows instanceof PDOStatement)) {
                throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
            }
            // Como a query busca somente o nome, só existe esse atributo no $resutObject
            $resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
        } catch (Exception $exc) {

            echo $exc->getMessage();
            $resultObject = null;
        }

        return $resultObject;
    }

    /**
    * Lista os objetos persistidos no banco, que possuem o $id.
    * @param string $usuario - usuario a ser buscado.
    * @return  array -  Array de objetos da classe, ou null se não encontrar
    * objetos.
    */
    public function buscaUsuario($param): array {

        $usuario = $param;
        //Seleciona somente o usuario do respectivo cliente e o retorna
        $sql = "SELECT * FROM cliente WHERE usuario = '". $usuario . "'";
        try {
            $resultRows = $this->db->query($sql);

            if (!($resultRows instanceof PDOStatement)) {
                throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
            }
            // Como a query busca somente o usuario, só existe esse atributo no $resutObject
            $resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
        } catch (Exception $exc) {

            echo $exc->getMessage();
            $resultObject = null;
        }

        return $resultObject;
    }



    /**
    * Lista os objetos persistidos no banco, que possuem o $id.
    * @param string $id - id a ser buscado.
    * @return  array -  Array de objetos da classe, ou null se não encontrar
    * objetos.
    */
    public function buscarId($param): array {

        //Seleciona todos os dados do cliente do respectivo $id
        $sql = "SELECT * FROM cliente WHERE id='" . $param . "'";

        try {
            $resultRows = $this->db->query($sql);

            if (!($resultRows instanceof PDOStatement)) {
                throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
            }

            $resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
        } catch (PDOException $exc) {

            echo $exc->getMessage();
            $resultObject = null;
        }

        return $resultObject;
    }




    public function listar() :array {
        
    }

    public function salvar($obj) {
        $cliente = $obj;

        try {

            $sql = "INSERT INTO cliente (nome, rua, numero, bairro, cep, usuario, senha) VALUES ('" 
                    . $cliente->getNome(). "', '" .$cliente->getRua(). "', '" .$cliente->getNumero(). "', '"
                    .$cliente->getBairro(). "', '" .$cliente->getCep(). "', '" .$cliente->getUsuario(). "', '" .$cliente->getSenha(). "' )";

            
            if ($this->db->exec($sql)) {
                $texto = "Usuário Cadastrado com sucesso \n\n";
                echo nl2br($texto);
                $result = true;
            } else {
                 $texto = "Não Cadastrado \n\n";
                echo nl2br($texto);
                $result = false;
            }

        } catch (PDOException $exc) {
            echo $exc->getMessage();
            $result = false;
        }

        return $result;
    }

}
