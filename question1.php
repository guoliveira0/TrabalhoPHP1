<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <link rel="stylesheet" href="style.css">
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
                <input type="number" name="quant" id="quant" min=1 max=15 value="<?php echo isset($_GET['quant']) ? htmlspecialchars($_GET['quant']) : '1'; ?>" title="De 1 a 15"><br>

                <input type="radio" name="elements" id="text" value=text <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'text') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="text">Texto</label><br>

                <input type="radio" name="elements" id="password" value="password" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'password') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="password">Senha</label><br>

                <input type="radio" name="elements" id="button" value="button" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'button') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="button">Botão</label><br>

                <input type="radio" name="elements" id="radio" value="radio" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'radio') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="radio">Radio</label><br>

                <input type="radio" name="elements" id="checkbox" value="checkbox" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'checkbox') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="checkbox">Caixa de seleção</label><br>

                <input type="radio" name="elements" id="range" value="range" <?php echo (isset($_GET['elements']) && $_GET['elements'] == 'range') ? 'checked' : ''; ?> onclick="sendForm()">
                <label for="range">Faixa</label><br>


            </fieldset>
        </form>
        <?php
        $quantity = $_GET['quant'];
        $type = $_GET['elements'];
        switch ($type) {
            case "text":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"text\" name=\"text$x\" id=\"text$x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"text\" name=\"text$x\" id=\"text$x\"&#62;</code><br>");
                }
                break;
            case "password":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"password\" name=\"password$x\" id=\"password$x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"password\" name=\"password$x\" id=\"password$x\"&#62;</code><br>");
                }
                break;
            case "button":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"button\" name=\"button$x\" id=\"button$x\" value=\"Botão $x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"button\" name=\"button$x\" id=\"button$x\" value=\"Botão $x\"&#62;</code><br>");
                }
                break;
            case "radio":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"radio\" name=\"radio\" id=\"radio$x\" value=\" Radio $x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"radio\" name=\"radio\" id=\"radio$x\" value=\" Radio $x\" &#62;</code><br>");
                }
                break;
            case "checkbox":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"checkbox\" name=\"checkbox$x\" id=\"checkbox$x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"checkbox\" name=\"checkbox$x\" id=\"checkbox$x\"&#62;</code><br>");
                }
                break;
            case "range":
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<input type=\"range\" name=\"range$x\" id=\"range$x\" value=\" Range $x\"><br>");
                }
                for ($x = 1; $x < $quantity + 1; $x++) {
                    echo ("<code>&#60;input type=\"range\" name=\"range$x\" id=\"range$x\" value=\" Range $x\"&#62;</code><br>");
                }
                break;
        }
        ?>
        <script>
            function sendForm() {
                document.getElementById("Form").submit();
            }
        </script>
        <a href="index.php">Página inicial</a>
    </main>
    <footer></footer>
</body>