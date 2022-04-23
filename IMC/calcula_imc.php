<?php
    function situacaoImc($imcTotal)
    {
        if ($imcTotal < 18.5) {
            return ". Você está abaixo do peso.";
        }

        if ($imcTotal > 18.5 and $imcTotal < 25) {
            return ". Você está com o peso ideal.";
        }

        return ". Você está acima do peso.";
    }

   function calculaImc($peso, $altura)
    {
        if($altura == 0){
            return;
        }
        $altura = str_replace(',', '.', $altura);
        $imc = $peso / ($altura * $altura);
        return number_format($imc, 2);
    }

$umPeso = $_POST['peso'];
$umaAltura = $_POST['altura'];

$imc = calculaImc($umPeso, $umaAltura);

$imcTotal = situacaoImc($imc);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Calculadora de IMC</title>
</head>
<body>
<h1 align="center">Calculadora de IMC</h1>
<div class="mx-5 my-5">
    <form method="post" action="calcula_imc.php">

    <div class="form-group">
        <label for="altura">Altura: </label>
        <input type="text" id="altura" name="altura" class="form-control" placeholder="Digite sua altura:">
    </div>

    <div class="form-group">
        <label for="peso">Peso: </label>
        <input type="text" id="peso" name="peso" class="form-control" placeholder="Digite seu peso:">
    </div>

        <button type="submit" class="btn btn-primary">Calcular</button>

    </form>
</div>

<div class="mx-5 my-5">
    <ul class="list-group">
        <li class="list-group-item"> <?php  if($peso == 0) {
                echo "Ainda não foi informado nenhum peso.";
            } else {
                echo "Peso informado: $umPeso Kg";

            }?></li>
        <li class="list-group-item"> <?php  if( $umaAltura ==0 ){
                echo "Ainda não foi informado nenhuma altura.";
            } else {
                echo "Altura informada: $umaAltura metros";
            }?></li>
        <li class="list-group-item"> <?php
            if ($imc == 0){
            echo "Ainda não foi informado nenhum peso.";
            } else {
                echo "Seu IMC é $imc $imcTotal";
            } ?></li>
    </ul>

</body>

</html>

