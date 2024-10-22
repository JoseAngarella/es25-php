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
            if($num2==0){
                $divisione="impossibile";

            }else{
                $divisione=number_format($num1 / $num2,2);

            }
            echo "<ul><li>$num1</li><li>$num2</li></ul>";
            echo "<table><tr><th>operazione</th><th>risultato</th></tr>
            <tr><td>".$num1 ." + ". $num2."</td><td>". $num1 + $num2."</td></tr>
            <tr><td>".$num1 ." - ". $num2."</td><td>". $num1 - $num2."</td></tr>
            <tr><td>".$num1 ." * ". $num2."</td><td>". $num1 * $num2."</td></tr>
            <tr><td>".$num1 ." / ". $num2."</td><td>". $divisione."</td></tr>
            </table>";
        }

    ?>
</body>
</html>
