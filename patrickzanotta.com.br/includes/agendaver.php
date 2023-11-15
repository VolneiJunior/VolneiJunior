<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<?php 
require_once 'includes/conexao.php';

$sql = "SELECT * FROM shows";

$shows = $conexao->query($sql);

foreach($shows as $s){

    
    echo'<div class="cartao">';
    echo'<div class="carddata">';
    echo '<p id="diashow">';
    echo$s['dia_show'];
    echo '</p>';
    echo'<br>';
    echo '<p id="messhow">';
    echo$s['mes_show'];
    echo '</p>';
    echo'<br>';
    echo '<p id="horashow">';
    echo$s['hora_show'];
    echo '</p>';
    echo'</div>';
    echo'<div class="cardend">';
    echo '<p id="localshow">';
    echo$s['local_show'];
    echo '</p>';
    echo$s['endereco_show'];
    echo'</div>';
    echo'</div>';
    

}

?>