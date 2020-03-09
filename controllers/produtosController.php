<?php
require_once 'helpers/helpers.php';


class ProductsController {
    public function index() {
        $dados = carregar_dados('produtos');
        $data = ['produtos', $dados];
        
        load_view('listarProdutos', $data);
    }
    public function create(){
        $fornecedores = carregar_dados("fornecedores");
        load_view('cadastrarProduto', $fornecedores);
    }
 
}