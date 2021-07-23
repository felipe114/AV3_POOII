<?php

require_once "cria_conexao.php";
require_once "produto.php";
require_once "PdoRepositorio.php";

use D\xampp2\htdocs\AV3_POO\CriaConexao;
use D\xampp2\htdocs\AV3_POO\Produto;
use D\xampp2\htdocs\AV3_POO\PdoRepositorio;

echo "<pre>";

$repositorio = new PdoRepositorio(CriaConexao::criarConexao());
var_dump($repositorio);

$prod = new Produto(NULL, "Celular", 300.00);
var_dump($prod);

echo "</pre>";


?>