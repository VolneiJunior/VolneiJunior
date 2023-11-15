
    <form action="agendabd.php" method="post">
        <div class="divform">
            <label for="endereco_show" class="form-label text-dark" >
                Local Show:
                <input class="inputform form-control" type="text" name="local_show"  id="local_show" required>
            </label>
        </div>
        <div class="divform">
            <label for="endereco_show" class="form-label text-dark" >
                Endereco Show:
                <input class="inputform form-control w-100" type="text" name="endereco_show"  id="endereco_show" required>
            </label>
        </div>
        <div class="divform">
            <label for="dia_show" class="form-label text-dark" >
                Dia do show:
            </label>
                <select class="form-select" name="dia_show" id="dia_show" required>
                <?php
                    $a = 1;
                    while($a <= 31){
                        echo '<option value="'.$a.'">';
                        echo $a;
                        echo '</option>';
                        $a=$a+1;
                    }
                ?>
                </select>
        </div>
        <div class="divform">
            <label for="mes_show" class="form-label text-dark" >
                Mes do show:
            </label>
                <select class="form-select" name="mes_show" id="mes_show" required>
                    <option value="JAN">Janeiro</option>
                    <option value="FEV">Fevereiro</option>
                    <option value="MAR">Março</option>
                    <option value="ABR">Abril</option>
                    <option value="MAI">Maio</option>
                    <option value="JUN">Junho</option>
                    <option value="JUL">Julho</option>
                    <option value="AGO">Agosto</option>
                    <option value="SET">Setembro</option>
                    <option value="OUT">Outubro</option>
                    <option value="NOV">Novembro</option>
                    <option value="DEZ">Dezembro</option>
                </select>
        </div>   
        <div class="divform">
            <label for="endereco_show" class="form-label text-dark" >
                Hora Show:
            </label>
                <select class="form-select" name="hora_show" id="hora_show" required>
                <?php
                    $a = 0;
                    $b = ":00";
                    $c = ":30";
                    while($a <= 23){
                        echo '<option value="'.$a.$b.'">';
                        echo $a.':00';
                        echo '</option>';
                        echo '<option value="'.$a.$c.'">';
                        echo $a.':30';
                        echo '</option>';
                        $a=$a+1;
                    }
                ?>
                </select>

        </div>
        <div class="divform">
            <input class="botao btn btn-primary" type="submit" value="Salvar">
        </div>

    </form>