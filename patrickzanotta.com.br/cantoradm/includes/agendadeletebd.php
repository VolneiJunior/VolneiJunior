<?php

require_once 'conexao.php';


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "DELETE FROM shows WHERE cod_show=$id";
$conexao->query($sql);

header('Location:../index.php?page=genero_lista');