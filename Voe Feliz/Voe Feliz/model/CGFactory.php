<?php
require_once("model/AbstractFactory.php");
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
class CGFactory extends AbstractFactory{

    public function buscar($param) {
        $sql = "SELECT * FROM '". $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Contato");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        
    }

    public function salvar($obj) {
        
    }

}
