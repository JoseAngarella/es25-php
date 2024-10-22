<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num1= $_GET['num1'];
        $num2= $_GET['num2'];
        if(empty($num1) || empty($num2)){
            echo "<p>Errore: almeno uno dei due numeri è vuoto</p> <br> <a href='esercizio25.html'>inserisci di nuovo</a>";
        }else{
            echo "<ol><li>$num1</li><li>$num2</li></ol>";
            echo "<table><tr><th>operazione</th><th>risultato</th></tr>
            <tr><td>".$num1 ." + ". $num2."</td><td>". $num1 + $num2."</td></tr>
            <tr><td>".$num1 ." - ". $num2."</td><td>". $num1 - $num2."</td></tr>
            <tr><td>".$num1 ." * ". $num2."</td><td>". $num1 * $num2."</td></tr>
            <tr><td>".$num1 ." / ". $num2."</td><td>". $num1 / $num2."</td></tr>
            </table>";
        }

    ?>
</body>
</html>

<!-- 
Successivamente, effettuare addizione, sottrazione, moltiplicazione e divisione tra i due numeri.
Prima di effettuare queste operazioni, visto che i dati sono inviati come stringhe, devono prima essere convertite come numeri.
Utilizzare le funzioni intval() per poter lavorare correttamente con i numeri.

Restituire una tabella html con le seguenti righe:
- la prima riga di intestazione con i seguenti campi (operazione, risultato)
- la seconda riga che mostra l'addizione
- la terza riga mostra la sottrazione
- la quarta riga mostra la moltiplicazione
- la quinta riga mostra la divisione. Se si divide per 0 deve uscire una scritta rossa "Impossibile"

La tabella deve essere opportunamente formattata con dei bordi. -->