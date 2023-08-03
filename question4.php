<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h1>Trabalho: Questão 4</h1>
        <form action="question4.php" method="get">
            <fieldset>

                <legend>Parâmetros</legend>
                <label for="initialContribution">Aporte Inicial(R$):</label>
                <input type="number" name="initialContribution" id="initialContribution" min=0 max=999999.99 step="0.01" title="Máximo de 999999.99" value="<?php echo isset($_GET['initialContribution']) ? htmlspecialchars($_GET['initialContribution']) : ''; ?>"><br>
                <label for="period">Período(Meses):</label>
                <input type="number" name="period" id="period" min=1 max=480 title="Entre 1 e 480" value="<?php echo isset($_GET['period']) ? htmlspecialchars($_GET['period']) : '0'; ?>"><br>
                <label for="income">Rendimento(%):</label>
                <input type="number" name="income" id="income" min=0 max=20 step="0.01" title="Até 20%" value="<?php echo isset($_GET['income']) ? htmlspecialchars($_GET['income']) : '1'; ?>"><br>
                <label for="contribution">Aporte mensal(R$):</label>
                <input type="number" name="contribution" id="contribution" min=0 max=999999.99 step="0.01" title="Máximo de 999999.99" value="<?php echo isset($_GET['contribution']) ? htmlspecialchars($_GET['contribution']) : '0'; ?>"><br>
                <input type="submit" value="Processar">
            </fieldset>
        </form>
        <table>
            <?php
            $initialContribution = floatval($_GET['initialContribution']);
            $period = (int)$_GET['period'];
            $income = floatval($_GET['income']);
            $contribution = floatval($_GET['contribution']);
            function calc($initialContribution, $income, $contribution)
            {
                $results = array(
                    'income' => '',
                    'total' => ''
                );
                $results['income'] = ($initialContribution + $contribution) * ($income / 100);
                $results['total'] = ($initialContribution + $results['income'] + $contribution);
                return $results;
            }


            if (isset($_GET['initialContribution'])) {
                echo ("<tr>
                <th>Mês</th>
                <th>Valor Inicial(R$)</th>
                <th>Aporte(R$)</th>
                <th>Rendimento(R$)</th>
                <th>Total(R$</th>
                </tr>");
            }
            for ($x = 1; $x < $period + 1; $x++) {

                echo ("<tr>");
                echo ("<td>$x</td>");
                if ($x == 1) {
                    echo ("<td>$initialContribution</td>");
                    $result = calc($initialContribution, $income, 0);
                    $finalincome = round($result['income'], 2);
                    $total = round($result['total'], 2);
                    echo ("<td>----</td>");
                    echo ("<td>$finalincome</td>");
                    echo ("<td>$total</td>");
                } else {
                    echo ("<td>$total</td>");
                    $result = calc($total, $income, $contribution);
                    $finalincome = round($result['income'], 2);
                    $total = round($result['total'], 2);
                    echo ("<td>$contribution</td>");
                    echo ("<td>$finalincome</td>");
                    echo ("<td>$total</td>");
                }
                echo ("</tr>");
            }
            ?>
        </table>
        <a href="index.php">Página Inicial</a>
    </main>

    <footer>

    </footer>
</body>

</html>