<?php
    
    $erro = filter_input(INPUT_GET, 'erro');
    $erromsg = '';
    
    if($erro == 1){
        $erromsg = 'Email não cadastrado';
    }
    elseif($erro == 2){
        $erromsg = 'Senha digitada não confere';
        
    }
    if($erromsg){
        echo '<div class="alert alert-danger">';
        echo $erromsg;

        echo '</div>';
    }

    ?>
    <form class="divform" action="includes/loginbd.php" method="post">
    <div class="mb-3">
        <label class="text-light" for="email">E-mail: </label>
        <input class="inputform" type="email" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label class="text-light mt-3" for="senha">Senha: </label>
        <input class="inputform" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <input class="botao mt-3" type="submit" value="Entrar">
    </div>
    </form>