<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h1>Trabalho: Questão 3</h1>
        <h3>Q2. Lorem ipsum dolor sit amet.</h3>
        <?php
        $question1 = "question1={$_GET['question1']}";
        echo ("
        <p><a href=\"question3c.php?$question1&question2=A\">    A&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3c.php?$question1&question2=B\">	B&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3c.php?$question1&question2=C\" style=\"color:green\">	C&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3c.php?$question1&question2=D\">	D&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3c.php?$question1&question2=E\">	E&#41;A Lorem ipsum dolor sit amet.</a></p>"
        );
        ?>
        <p><a href="question3.php">Cancelar</a></p>
        <p><a href="../index.php">Página Incial</a></p>
    </main>
    <footer>
    <p>Luiz Gustavo/Maria Fernanda - &copy;2023</p>
    </footer>
</body>

</html>