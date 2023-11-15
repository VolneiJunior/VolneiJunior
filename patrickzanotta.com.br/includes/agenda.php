<h1>Cadastrar Show</h1>

    <form action="agendabd.php" method="post">
        <div class="divform mb-3" >
            <label for="dia_show" class="form-label text-light" >
                dia do show:
                <input class="inputform" type="text" name="dia_show"  class="form-control" id="dia_show" required>
            </label>
            <label for="mes_show" class="form-label text-light" >
                mes do show:
                <input class="inputform" type="text" name="mes_show"  class="form-control" id="mes_show" required>
            </label>
            <label for="endereco_show" class="form-label text-light" >
                Endereco Show:
                <input class="inputform" type="text" name="endereco_show"  class="form-control" id="endereco_show" required>
            </label>
            <label for="endereco_show" class="form-label text-light" >
                Hora Show:
                <input class="inputform" type="text" name="hora_show"  class="form-control" id="hora_show" required>
            </label>
            <label for="endereco_show" class="form-label text-light" >
                local Show:
                <input class="inputform" type="text" name="local_show"  class="form-control" id="local_show" required>
            </label>
        </div>
        <div class="divform mb-3">
            <input class="botao" type="submit" value="Salvar">
        </div>
    </form>