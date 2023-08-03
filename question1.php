<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>

</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h1>Trabalho: Questão 1</h1>
        <form action="question1.php" method="get" id="Form" name="Form">
        
            <fieldset>
                <legend>Critérios para geração</legend>
                <label for="quant">Quantidade de elementos: </label>
                <input type="number" name="quant" id="quant" min=1 max=15 value="<?php echo isset($_GET['quant']) ? htmlspecialchars($_GET['quant']) : '1'; ?>" title="De 1 a 15" ><br>

                <input type="radio" name="elements" id="text" value=text <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'text') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="text">Texto</label><br>

                <input type="radio" name="elements" id="password" value="password" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'password') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="password">Senha</label><br>

                <input type="radio" name="elements" id="button" value="button"  <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'button') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="button">Botão</label><br>

                <input type="radio" name="elements" id="radio" value="radio" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'radio') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="radio">Radio</label><br>

                <input type="radio" name="elements" id="checkbox" value="checkbox" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'checkbox') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="checkbox">Caixa de seleção</label><br>

                <input type="radio" name="elements" id="range" value="range" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'range') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="range">Faixa</label><br>
               

            </fieldset>
        </form>