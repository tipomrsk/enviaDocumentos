<?php
    include_once '../PDO/doc_funcao.php';
$obj_doc = new doc_funcao();
$link = $obj_doc->listar();
 
 $list_doc = '';
 
foreach (array_reverse($link) as $dados) {
 $list_doc .= '<a href="'.$dados['arquivo'].'" type="application" target="_blank"> '.$dados['nome'].'</a><br><br>';

    
}

echo $list_doc;
?>


<form method="post"  action="envia.php" enctype="multipart/form-data" >
       Nome: <input type="text" name="nome" class="form-control" placeholder="Nome"> <br> 
       Arquivo: <input type="file" name="link" placeholder="Arquivo"> <br>
  
        <input type="submit" name="cadastrar" value="Adicionar">
    </form>



