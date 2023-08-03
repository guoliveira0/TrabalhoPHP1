<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h1>Trabalho: Questão 3</h1>
        <h3>Q3. Lorem ipsum dolor sit amet.</h3>
        <?php
         $question3 = "question1={$_GET['question1']}&question2={$_GET['question2']}&question3={$_GET['question3']}";
         echo("
        <p><a href=\"question3e.php?$question3&question4=A\">   A&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3e.php?$question3&question4=B\"style=\"color:green\">	B&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3e.php?$question3&question4=C\">	C&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3e.php?$question3&question4=D\">	D&#41;A Lorem ipsum dolor sit amet.</a></p>
        <p><a href=\"question3e.php?$question3&question4=E\">	E&#41;A Lorem ipsum dolor sit amet.</a></p>"
         );
        ?>
         <p><a href="question3.php">Cancelar</a></p>
         <p><a href="../index.php">Página Incial</a></p>
    </main>
    <footer>
    </footer>
</body>
</html>