<?php
require_once 'helpers/helpers.php';

class FornecedoresController {
    public function index() {
        load_view('listarFornecedores', 'Fornecedores'); 
    }
    public function create(){
        load_view('cadastrarFornecedor', 'Cadastro de Fornecedor');
    }
}