<?php

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Marca.php');
require_once(__DIR__ . '/../../dao/DaoMarca.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = Db::getInstance();

if (! $conn->connect()) {
    die();
}

$daoPessoa = new DaoPessoa($conn);
$daoPessoa->inserir(new Pessoa($_POST['nome'],  $_POST['idade'], $_POST['endereco'], $_POST['cpf'], $_POST['telefone']));
    
header('Location: ./index.php');

?>


