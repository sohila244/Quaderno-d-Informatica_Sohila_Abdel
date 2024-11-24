<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
   
    $n = (int)$_POST['number'];

   
    if ($n >= 1 && $n <= 10) {
       
        echo "<html lang='it'><head><meta charset='UTF-8'><title>Risultato</title>";
        echo "<link rel='stylesheet' href='style.css'></head><body>";
        echo "<div class='container'>";
        echo "<h2>Tabella dei Quadrati e Cubi fino a $n</h2>";
        echo "<table>";
        echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

        for ($i = 1; $i <= $n; $i++) {
            $quadrato = $i * $i;
            $cubo = $i * $i * $i;
            echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
        }

        echo "</table>";
        echo "</div></body></html>";
    } else {
        
        echo "<html lang='it'><head><meta charset='UTF-8'><title>Errore</title>";
        echo "<link rel='stylesheet' href='style.css'></head><body>";
        echo "<div class='container'>";
        echo "<h3 style='color: red;'>Il numero selezionato non è valido. Riprova.</h3>";
        echo "</div></body></html>";
    }
} else {
    
    header('Location: index.html');
    exit;
}