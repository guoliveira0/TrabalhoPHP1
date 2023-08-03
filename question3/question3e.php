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
        <?php
        switch ($_GET['question1']) {
            case "A":
                echo ("1. {$_GET['question1']} Correto<br>");
                break;
            default:
                echo ("1. {$_GET['question1']} Incorreto<br>");
                break;
        }
        switch ($_GET['question2']) {
            case "C":
                echo ("2. {$_GET['question2']} Correto<br>");
                break;
            default:
                echo ("2. {$_GET['question2']} Incorreto<br>");
                break;
        }
        switch ($_GET['question3']) {
            case "E":
                echo ("3. {$_GET['question3']} Correto<br>");
                break;
            default:
                echo ("3. {$_GET['question3']} Incorreto<br>");
                break;
        }
        switch ($_GET['question4']) {
            case "B":
                echo ("4. {$_GET['question4']} Correto<br>");
                break;
            default:
                echo ("4. {$_GET['question4']} Incorreto<br>");
                break;
        }
        ?>
        <p><a href="../index.php">Página Incial</a></p>
    </main>
    <footer>
    </footer>
</body>

</html>