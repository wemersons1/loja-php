<?php
require "helpers/helpers.php";

$rota='home';
if(isset($_GET['rota'])) $rota = $_GET['rota'];

switch($rota) {
    case 'cadastrar-produto':
        load_view('cadastrarProduto', 'Cadastro de produto');
    break;
    case 'home':
        load_view('home','Bem vindo');
    break;
    case 'cadastrar-fornecedor':
        load_view('cadastrarFornecedor', 'Cadastro de Fornecedor');
    break;
    case 'salvar-fornecedor':
        $resultado = salvar_dados('fornecedor', $_POST);
        if($resultado == true) echo("Deeu certo!");
        else echo("Deu errado!");
    break;
    default:
        load_view('404', 'Página não encontrada!');
    break;

    
}