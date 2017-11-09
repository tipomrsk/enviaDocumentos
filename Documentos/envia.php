<?php
 include_once '../class/documento.class.php';
 include_once '../PDO/doc_funcao.php';
    if($_POST){
        $obj_licitacao = new documento();
        $obj_licitacao->set_nome($_POST['nome']);
        $diretorio = "../doc/";
        $arquivo = $diretorio . basename(rand().(md5($_FILES["link"]["name"])));
        $obj_licitacao->set_arquivo(($arquivo));
    
    if (isset($_FILES['link']['name'])) {
        if (move_uploaded_file($_FILES["link"]["tmp_name"], $arquivo)) {
            echo "<br>Upload do arquivo  " . basename($_FILES["link"]["name"]) . " feito com sucesso .";
        } else {
            echo "<br>Falha no Upload do arquivo.";
        }
}
       $adicionar = new doc_funcao();
        
        if($adicionar->inserir($obj_licitacao)){
           echo"<br>Arquivo enviado para a DB.";
        } else {
            echo "<br>Arquivo não enviado para a DB.";
        }
    }
        