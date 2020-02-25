<?php

function load_view($view, $title = "Suplementos") {
    require "views/app.php";
}

function salvar_dados($tipo, $dados){
   if($tipo == "fornecedor"){
        $arquivo = fopen("bd/fornecedores.txt","a+");
        if($arquivo == null){
            return false;
        }

        $filesize = filesize("bd/fornecedores.txt");
        $fornecedores = [];
        if($filesize > 0) {
            $fornecedores = unserialize(fread($arquivo, $filesize));
        }

        $fornecedores[] = $dados;

        fwrite($arquivo, serialize($fornecedores));

        echo("<pre>");
        print_r($fornecedores);
        echo("</pre>");
        fclose($arquivo);

        return true;
    }
}