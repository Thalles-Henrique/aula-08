<form action="calculadora.php" method="GET">
valor 1:
<input type="number" name="valorum">
<br>
valor 2:
<input type="number" name="valordois">
<br>
<select name="operacao" >
    <option value="somar">Somar</option>
    <option value="subtrair">Subtrair</option>
    <option value="multiplicar">Multiplicar</option>
    <option value="dividir">Dividir</option>
</select>
<br>
<input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET['valorum']) && isset($_GET['valordois']) && isset($_GET['operacao'])){
    $valorum = $_GET['valorum'];
    $valordois = $_GET['valordois'];
    $operacao = $_GET['operacao'];

    $resultado = 0;

    if ($operacao == 'somar') {
        $resultado = $valorum + $valordois;
    } elseif ($operacao == 'subtrair') {
        $resultado = $valorum - $valordois;
    } elseif ($operacao == 'multiplicar') {
        $resultado = $valorum * $valordois;
    } elseif ($operacao == 'dividir') {
        if ($valordois == 'dividir'){
            $resultado = 'Não é possível dividir por zero';
        }
        else {
            $resultado = $valorum / $valordois;
        } 
    }

    echo $resultado;
}