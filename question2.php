!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h1>Trabalho: Questão 2</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <?php
                    for ($x = 46; $x < 120 + 1; $x++) {
                        echo ("<th>$x</th>");
                    }
                    ?>
                </tr>
            </thead>

            
        </table>
        <a href="index.php">Página Principal</a>
    </main>
    <footer></footer>
</body>

</html>