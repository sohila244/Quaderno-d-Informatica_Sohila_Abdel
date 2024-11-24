<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $N = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

      
        if ($N >= 1 && $N <= 10) {
            echo "<h2>Tabella dei quadrati e dei cubi per i numeri da 1 a $N</h2>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

           
            for ($i = 1; $i <= $N; $i++) {
                $quadrato = $i ** 2;
                $cubo = $i ** 3;
                echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<h2>Errore: il numero deve essere compreso tra 1 e 10.</h2>";
        }
    } else {
        echo "<h2>Errore: accesso non autorizzato.</h2>";
    }
    ?>
</body>
</html>