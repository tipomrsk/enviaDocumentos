<?php
    include_once 'doc_pdo.php';
    

    class doc_funcao {

        private $var_doc;

        public function __construct() {
            $this->var_doc = new Doc_pdo();
        }
     public function inserir(documento $documento) {
            return $this->var_doc->inserir($documento);
        }
        
     
        public function listar(){
            return $this->var_doc->listar();
        }
 
        }