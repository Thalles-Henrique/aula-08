<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <label>Digite seu Nome: </label>
        <input type="text" name="nome" required minlength="2" pattern>

        <input type="submit" value="Enviar para o servidor">
    </form>

    <hr>

    <?php
        $nome = '';

        if(isset($_POST['nome'])){ //isset verifica se ha valor na varivel
            $nome = $_POST['nome'];
            echo '<p>Olá, '. $nome . '! Seja bem-vindo(a) </p>';
        }
            
    ?>
</body>
</html>