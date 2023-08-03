<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/5eb1deab40.js" crossorigin="anonymous"></script>
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
                echo ("1. {$_GET['question1']} <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("1. {$_GET['question1']} <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        switch ($_GET['question2']) {
            case "C":
                echo ("2. {$_GET['question2']} <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("2. {$_GET['question2']} <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        switch ($_GET['question3']) {
            case "E":
                echo ("3. {$_GET['question3']} <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("3. {$_GET['question3']} <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        switch ($_GET['question4']) {
            case "B":
                echo ("4. {$_GET['question4']} <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("4. {$_GET['question4']} <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        ?>
        <p><a href="../index.php">Página Incial</a></p>
    </main>
    <footer>
    <p>Luiz Gustavo/Maria Fernanda - &copy;2023</p>
    </footer>
</body>

</html>