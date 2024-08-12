<?php require_once("header.php") ?>

<h1>Exercício 05</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="Nome_Funcionario">Nome</label>
            <input type="text" id="Nome_Funcionario" name="Nome_Funcionario" class="form-control" required />
        </div>

        <div class="col">
            <label for="Tempo_servico">Total de Horas trabalhadas</label>
            <input type="number" id="Tempo_servico" name="Tempo_servico" class="form-control" required />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php

function CalcularFerias($Tempo_servico) {
    
    $dias_ferias = intval($Tempo_servico / 30); 

    if ($dias_ferias > 30) {
        $dias_ferias = 30;
    }

    return $dias_ferias;
}

if ($_POST) {
    $Nome_Funcionario = ($_POST["Nome_Funcionario"]);
    $Tempo_servico = ($_POST["Tempo_servico"]);
   
    $Ferias = CalcularFerias($Tempo_servico);

    if ($Ferias > 0) {
        echo "<p>Funcionário: $Nome_Funcionario</p>";
        echo "<p>Dias de férias: $Ferias</p>";
    } else {
        echo "<p>Férias não permitidas. Horas trabalhadas insuficientes.</p>";
    }
}
?>

<?php require_once("footer.php") ?>