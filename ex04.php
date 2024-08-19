<?php require_once("header.php") ?>

<h1>Exercício 04</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="Nome_tarefa">Nome da tarefa</label>
            <input type="text" id="Nome_tarefa" name="Nome_tarefa" class="form-control" required />
        </div>

        <div class="col">
            <label for="Horas_tarefa">Total de Horas da Tarefa</label>
            <input type="number" id="Horas_tarefa" name="Horas_tarefa" class="form-control" required />
        </div>

        <div class="col">
            <label for="complexidade">Complexidade (1 a 3)</label>
            <select class="form-select" id="complexidade" name="complexidade" required>
                <option value="1">1 - Alta</option>
                <option value="2">2 - Média</option>
                <option value="3">3 - Baixa</option>
            </select>
        </div>

        <div class="col">
            <label for="Funcionario">Nome do Funcionário</label>
            <input type="text" id="Funcionario" name="Funcionario" class="form-control" required />
        </div>

        <div class="col">
            <label for="Hora_disponivel">Total de Horas disponíveis</label>
            <input type="number" id="Hora_disponivel" name="Hora_disponivel" class="form-control" required />
        </div>
        
        <div class="col">
            <label for="Experiencia">Nível de experiência (1 a 3)</label>
            <select class="form-select" id="Experiencia" name="Experiencia" required>
                <option value="1">1 - Júnior</option>
                <option value="2">2 - Pleno</option>
                <option value="3">3 - Sênior</option>
            </select>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php

if ($_POST) {
 
    $Horas_tarefa = ($_POST["Horas_tarefa"]);
    $Hora_disponivel = ($_POST["Hora_disponivel"]);
    $Experiencia = ($_POST["Experiencia"]);
    $Nome_tarefa = ($_POST["Nome_tarefa"]);
    $Funcionario = ($_POST["Funcionario"]);
    $complexidade = ($_POST["complexidade"]);
    
    $Permissao_hora = ($Horas_tarefa * 10) / 100;
    
    if ($Permissao_hora <= $Hora_disponivel) {
        if ($Experiencia >= $complexidade) {
        echo "Funcionário: $Funcionario ";
        echo "Nome da tarefa: $Nome_tarefa ";
        echo "Complexidade: $complexidade";
        echo "Horas da tarefa: $Horas_tarefa ";}
        else {
            echo "Nivel insuficiente para o trabalho!";
        }
    }
    else {
        echo "Horas disponíveis insuficientes para este trabalho!";
    }
}
?>

<?php require_once("footer.php") ?>
