<?php require_once("header.php") ?>

<h1>Exercício 07</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="prazo">Prazo para finalização (em dias)</label>
            <input type="number" id="prazo" name="prazo" class="form-control" required />
        </div>

        <div class="col">
            <label for="atividades_total">Número total de atividades</label>
            <input type="number" id="atividades_total" name="atividades_total" class="form-control" required />
        </div>

        <div class="col">
            <label for="atividades_concluidas">Número de atividades já concluídas</label>
            <input type="number" id="atividades_concluidas" name="atividades_concluidas" class="form-control" required />
        </div>

        <div class="col">
            <label for="produtividade">Produtividade da equipe (atividades por dia)</label>
            <input type="number" id="produtividade" name="produtividade" class="form-control" required />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular Desempenho</button>
            </div>
        </div>
    </div>
</form>

<?php

function calcularDesempenho($prazo, $atividades_total, $atividades_concluidas, $produtividade) {
    $atividades_restantes = $atividades_total - $atividades_concluidas;
    $dias_necessarios = ceil($atividades_restantes / $produtividade); 

    $resultado = [];

    if ($dias_necessarios <= $prazo) {
        $resultado['status'] = "O projeto está dentro do prazo.";
    } else {
        $resultado['status'] = "O projeto não será concluído a tempo.";
    }

    $resultado['atividades_restantes'] = $atividades_restantes;
    $resultado['dias_necessarios'] = $dias_necessarios;
    $resultado['dias_extras'] = $dias_necessarios - $prazo;

    return $resultado;
}

if ($_POST) {
    $prazo = intval($_POST["prazo"]);
    $atividades_total = intval($_POST["atividades_total"]);
    $atividades_concluidas = intval($_POST["atividades_concluidas"]);
    $produtividade = intval($_POST["produtividade"]);

    $desempenho = calcularDesempenho($prazo, $atividades_total, $atividades_concluidas, $produtividade);

    echo "<h3>Resultado da Simulação:</h3>";
    echo "<p>{$desempenho['status']}</p>";
    echo "<p>Atividades restantes: {$desempenho['atividades_restantes']}</p>";
    echo "<p>Dias necessários para concluir o projeto: {$desempenho['dias_necessarios']}</p>";

    if ($desempenho['dias_necessarios'] > $prazo) {
        echo "<p>Você precisará de mais {$desempenho['dias_extras']} dias além do prazo original.</p>";
    }
}
?>

<?php require_once("footer.php") ?>
