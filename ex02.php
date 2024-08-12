<?php require_once("header.php") ?>

<h1> Exercicio 2 </h1>

<form action="" method="POST">
    <div class="row">
       <div class="col">
            <label for="valor_hora">
                Valor ganho por horas trabalhadas
            </label>
            <input type="number" id="valor_hora"  name="valor_hora" class="form-control" />
        </div>
        <div class="col">
            <label for="horas_trabalhadas">
                Horas trabalhadas
            </label>
            <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" class="form-control" />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php

function calcularSalario($valor_hora, $horas_trabalhadas){
    
    $valor_salarioMensal = $valor_hora * $horas_trabalhadas;
    $salario_semanal = $valor_salarioMensal / 4;

    echo "Salário semanal: R$ " . number_format($salario_semanal, 2);
}

if ($_POST) {

    $valor_hora = $_POST["valor_hora"];
    $horas_trabalhadas = $_POST["horas_trabalhadas"];

    echo(calcularSalario($valor_hora, $horas_trabalhadas));
}


require_once("footer.php")
?>