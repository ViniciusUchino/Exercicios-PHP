<?php require_once("header.php") ?>

<h1>Exercício 06</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="Taxa_funcionario">Taxa por hora</label>
            <input type="Number" id="Taxa_funcionario" name="Taxa_funcionario" class="form-control" required />
        </div>

        <div class="col">
            <label for="Horas_prevista">Horas previstas</label>
            <input type="number" id="Horas_prevista" name="Horas_prevista" class="form-control" required />
        </div>

        <div class="col">
            <label for="Custos_adicionais">Custos adicionais</label>
            <input type="number" id="Custos_adicionais" name="Custos_adicionais" class="form-control" required />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php

function Calcular_Total($Taxa_funcionario, $Horas_prevista, $Custos_adicionais){
    $total_funcionario = ($Taxa_funcionario * $Horas_prevista) + $Custos_adicionais;
    return $total_funcionario;
}

if ($_POST) {
    $Taxa_funcionario = $_POST["Taxa_funcionario"];
    $Custos_adicionais = $_POST["Custos_adicionais"];
    $Horas_prevista = $_POST["Horas_prevista"];

    $total = Calcular_Total($Taxa_funcionario, $Horas_prevista, $Custos_adicionais);
    
    echo "<p>Custo total é de: R$ " . number_format($total, 2, ',', '.') . "</p>";
}
?>

<?php require_once("footer.php") ?>