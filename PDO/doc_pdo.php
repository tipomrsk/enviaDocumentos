<?php
    include_once 'execute_pdo.php';
    include_once '../class/documento.class.php';

    class Doc_pdo extends execute_pdo{
            public function inserir(documento $documento){
            $sql = "INSERT INTO documentos (arquivo, nome) 
                                 VALUES (:arquivo ,:nome )";
        
            $parameters = array();
            $parameters[":arquivo"] = $documento->get_arquivo();
            $parameters[":nome"] = $documento->get_nome();
            
            
            return $this->ExecuteCommand($sql, $parameters);    
        }
        public function listar(){
            $sql = "SELECT * FROM documentos";
            
            return $this->ExecuteQuery($sql, array());
        }
        
       
    }