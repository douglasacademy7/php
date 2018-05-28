<?php

$nome = trim($_POST["nome"]);
$interesses = $_POST["interesse"] ?? NULL;
$mensagem = strip_tags($_POST["mensagem"]);

if (empty($nome)){
    echo 'Informe o nome a ser validado!<br>';
}

if (is_null($interesses)){
    echo 'Preencha uma opção dos interesses disponíveis!<br>';
}