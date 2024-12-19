

<!DOCTYPE html>
<html>
<head>
    <title>Calcolo Tabellina</title>
</head>
<body>
    <h1>Calcolo della Tabellina</h1>
    <form method="post">
        <label for="numero">Inserisci un numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcola</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recupera il numero dall'input dell'utente
        $numero = intval($_POST['numero']);

        // Controllo semplice
        if ($numero <= 0) {
            echo "<p>Inserisci un numero positivo.</p>";
        } else {
            echo "<h2>Tabellina del numero $numero:</h2>";
            echo "<ul>";

            // Calcola e stampa la tabellina
            for ($i = 1; $i <= 10; $i++) {
                $risultato = $numero * $i;
                echo "<li>$numero × $i = $risultato</li>";
            }

            echo "</ul>";
        }
    }
    ?>
</body>
</html>
