<?php
require_once "helpers/helpers.php";

require "controllers/produtosController.php";
require "controllers/fornecedoresController.php";

class Router {
    public $app_location;
    public $productsController;
    public $fornecedoresController;
    

    public function __construct($app_location = '/loja-php'){
        $this->app_location = $app_location;

        $this->productsController = new ProductsController();
        $this->fornecedoresController = new FornecedoresController();
    }

    public function route($server) {
        $rota = $server['REQUEST_URI'];
        $rota = str_replace($this->app_location, '', $rota);

        switch($rota) {
            case '/':
                load_view('home','Bem vindo');
            break;
            case '/produtos/index':
                $this->productsController->index();
            case '/produtos/create'://exibir página de cadastro
                $this->productsController->create();
            break;
            case '/fornecedores/create':
                $this->fornecedoresController->create();
            break;
            case '/fornecedores/index':
                $this->fornecedoresController->index();
            break;
            default:
                load_view('404', 'Página não encontrada!');
            break;

        }
        
        // switch($rota) {
        //     case 'cadastrar-produto':
        //         $fornecedores = carregar_dados("fornecedores");
        //         load_view('cadastrarProduto', $fornecedores);
        //     break;
        //     case 'home':
        //         load_view('home','Bem vindo');
        //     break;
        //     case 'cadastrar-fornecedor':
        //         load_view('cadastrarFornecedor', 'Cadastro de Fornecedor');
        //     break;
          
        //     case 'salvar-fornecedor':
        //         $resultado = salvar_dados('fornecedores', $_POST);
        //         if($resultado == true) {
        //             load_view('sucesso', ['item' => 'Fornecedor']);
        //         }
        //             else echo("Deu errado!");
        //     break;
        //     case 'salvar-produto':
        //         salvar_dados('produtos', $_POST);
        //         load_view('sucesso', [
        //             'item' => 'Produto'//indice item do array recebe Produto
        //         ]);
        //     break;
        //     case 'listar-produtos':
        //     $dados = carregar_dados('produtos');
        //     $data = [];
        //     $data = ['produtos', $dados];
            
        //     load_view('listarProdutos', $data);
        //     break;
        //     case 'listar-fornecedores':
        //     $dados = carregar_dados('fornecedores');
        //     $data = ['produtos', $dados];
            
        //     load_view('listarFornecedores', $data);
        //     break;
        //     case 'listar-fornecedores':
        //     load_view('listarFornecedores', 'Fornecedores');
        //     break;
        
        //     default:
        //         load_view('404', 'Página não encontrada!');
        //     break;
        
            
        // }
    }
}