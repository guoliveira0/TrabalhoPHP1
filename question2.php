<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="question2.css">
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
            <tbody>
                <?php
                for ($y = 146; $y < 210 + 1; $y++) {
                    echo ("<tr>");
                    echo ("<td>$y</td>");
                    for ($z = 46; $z < 120 + 1; $z++) {
                        $imc = $z / (($y * 0.01) * ($y * 0.01));
                        $convertImc = round($imc, 2);
                        switch (true) {
                            case ($imc >= 0 && $imc < 16):
                                echo ("<td class=\"veryLowGrave\" title=\"Baixo muito grave &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 16 && $imc < 17):
                                echo ("<td class=\"veryLow\" title=\"Muito Grave &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 17 && $imc < 18.5):
                                echo ("<td class=\"low\" title=\"Baixo &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 18.5 && $imc < 25):
                                echo ("<td class=\"ideal\" title=\"Ideal &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 25 && $imc < 30):
                                echo ("<td class=\"overWeight\" title=\"Sobrepeso &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 30 && $imc < 35):
                                echo ("<td class=\"obesityI\" title=\"ObesidadeI &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 35 && $imc < 40):
                                echo ("<td class=\"obesityII\" title=\"ObesidadeII &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                            case ($imc >= 40):
                                echo ("<td class=\"obesityIII\" title=\"ObesidadeIII &#013;$y cm&#013;$z kg&#013;$convertImc\"></td>");
                                break;
                        }
                    }
                    echo ("</tr>");
                }
                ?>
            </tbody>


        </table>
        <a href="index.php">Página Principal</a>
    </main>
    <footer>
    <p>Luiz Gustavo/Maria Fernanda - &copy;2023</p>
    </footer>
</body>

</html>