<?php require_once("header.php") ?>

<h1>Exercício 03</h1>

<form action="" method="POST">
    <div class="row">
       <div class="col">
            <label for="lucro_empresa">
                Valor dos lucros da empresa
            </label>
            <input type="number" id="lucro_empresa"  name="lucro_empresa" class="form-control" />
        </div>
        <div class="col">
            <label for="nome_funcionario">
                Nome do funcionario
            </label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
        </div>
        <div class="col">
            <label for="desempenho" >Desempenho do Funcionário (1 a 5)</label>
                <select class="form-select" id="desempenho" name="desempenho" required>
                    <option value="1">1 - 0,1% do lucro</option>
                    <option value="2">2 - 0,2% do lucro</option>
                    <option value="3">3 - 0,4% do lucro</option>
                    <option value="4">4 - 0,5% do lucro</option>
                    <option value="5">5 - 0,7% do lucro</option>
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
function CalcularBonus($lucro_empresa, $nome_funcionario, $desempenho){
    
    $percentuais = [
        1 => 0.001, 
        2 => 0.002, 
        3 => 0.004, 
        4 => 0.005, 
        5 => 0.007  
    ];
    return $lucro_empresa * $percentuais[$desempenho];
}

if ($_POST) {

    $lucro_empresa = ($_POST["lucro_empresa"]);
    $nome_funcionario = ($_POST["nome_funcionario"]);
    $desempenho = ($_POST["desempenho"]);

    $bonus = CalcularBonus($lucro_empresa, $nome_funcionario, $desempenho);
    echo "<h4>Funcionário: $nome_funcionario </h4>";
    echo "<p>Desempenho: $desempenho </p>";
    echo "<p>Bônus Calculado: R$ " . number_format($bonus, 2, ',', '.') . "</p>";
    echo "</div>";
}


require_once("footer.php")
?>