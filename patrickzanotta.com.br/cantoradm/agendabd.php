<?php

require_once 'includes/conexao.php';

$dia_show = filter_input(INPUT_POST, 'dia_show', FILTER_SANITIZE_SPECIAL_CHARS);

$mes_show = filter_input(INPUT_POST, 'mes_show', FILTER_SANITIZE_SPECIAL_CHARS);

$endereco_show = filter_input(INPUT_POST, 'endereco_show', FILTER_SANITIZE_SPECIAL_CHARS);

$local_show = filter_input(INPUT_POST, 'local_show', FILTER_SANITIZE_SPECIAL_CHARS);

$hora_show = filter_input(INPUT_POST, 'hora_show', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO shows (dia_show, mes_show, endereco_show, local_show, hora_show) VALUES ('$dia_show','$mes_show', '$endereco_show', '$local_show','$hora_show') ";
$conexao->query($sql);


header('Location: index.php');