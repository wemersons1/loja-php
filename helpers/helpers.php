<?php
function load_view($view, $data = "Suplementos") {
    require "views/app.php";
}

function carregar_dados($tipo){ 
    if(empty($tipo)){
        return false;
    }
    $nomeArquivo = "bd/$tipo.data";
   
    $tamanhoArquivo = filesize($nomeArquivo);
    if($tamanhoArquivo > 0){
        $arquivo = fopen($nomeArquivo, "r");
        $dados = unserialize(fread($arquivo, $tamanhoArquivo));
        fclose($arquivo);
        return $dados;
    }    
    
    return false;
}

function salvar_dados($tipo, $dados){
    if(empty($tipo) || empty($dados)){
        return false;
    }
   
    $nomeArquivo = "bd/$tipo.data";
    $filesize = filesize($nomeArquivo); 
    if ($filesize > 0){
        $arquivo = fopen($nomeArquivo,"a+"); 
        if($arquivo == null){      
            return false;
        }
        $dadosSalvar = unserialize(fread($arquivo, $filesize));
        fclose($arquivo);
    }

    $dadosSalvar[] = $dados;  
    $arquivo = fopen($nomeArquivo, "w");
    if($arquivo == null){
        return false;
    }
    fwrite($arquivo, serialize($dadosSalvar));

    fclose($arquivo);

    return true;
}

