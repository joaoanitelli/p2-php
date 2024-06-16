<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new php\projeto\Router($metodo, $caminho);

#ROTAS

$r->get('/','php\projeto\Controllers\HomeController@index');



// Get Fornecedor
$r->get('/fornecedor','php\projeto\Controllers\FornecedorController@index');
$r->get('/fornecedor/criar','php\projeto\Controllers\FornecedorController@create');
$r->get('/fornecedor/editar/{id}','php\projeto\Controllers\FornecedorController@edit');

// Post Fornecedor
$r->post('/fornecedor/criar','php\projeto\Controllers\FornecedorController@store');
$r->post('/fornecedor/editar/{id}','php\projeto\Controllers\FornecedorController@update');
$r->post('/fornecedor/deletar/{id}','php\projeto\Controllers\FornecedorController@destroy');

// Get Carro
$r->get('/carro','php\projeto\Controllers\CarroController@index');
$r->get('/carro/criar','php\projeto\Controllers\CarroController@create');
$r->get('/carro/editar/{id}','php\projeto\Controllers\CarroController@edit');
// Post Carro
$r->post('/carro/criar','php\projeto\Controllers\CarroController@store');
$r->post('/carro/editar/{id}','php\projeto\Controllers\CarroController@update');
$r->post('/carro/deletar/{id}','php\projeto\Controllers\CarroController@destroy');

// Get Cliente
$r->get('/cliente','php\projeto\Controllers\ClienteController@index');
$r->get('/cliente/criar','php\projeto\Controllers\ClienteController@create');
$r->get('/cliente/editar/{id}','php\projeto\Controllers\ClienteController@edit');

// Post Cliente
$r->post('/cliente/criar','php\projeto\Controllers\ClienteController@store');
$r->post('/cliente/editar/{id}','php\projeto\Controllers\ClienteController@update');
$r->post('/cliente/deletar/{id}','php\projeto\Controllers\ClienteController@destroy');

// Get Filial
$r->get('/filial','php\projeto\Controllers\FilialController@index');
$r->get('/filial/criar','php\projeto\Controllers\FilialController@create');
$r->get('/filial/editar/{id}','php\projeto\Controllers\FilialController@edit');

// Post Filial
$r->post('/filial/criar','php\projeto\Controllers\FilialController@store');
$r->post('/filial/editar/{id}','php\projeto\Controllers\FilialController@update');
$r->post('/filial/deletar/{id}','php\projeto\Controllers\FilialController@destroy');


#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure) {
    echo $resultado($r->getParams());
}elseif(is_string($resultado)){
    $resultado = explode('@',$resultado);
    $controller = new $resultado[0];
    $action = $resultado[1];

    echo $controller->$action($r->getParams());
}