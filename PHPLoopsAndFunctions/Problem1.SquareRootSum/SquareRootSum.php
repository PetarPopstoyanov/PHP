<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <table border=1;>
                <tr><th>Numbers</th><th>Square</th></tr>
                <?php
                    $sum = 0;
                    for ($i = 0; $i <= 100; $i = $i + 2) {
                        $sqrt = sqrt($i);
                        $sqrtRound = round($sqrt, 2);
                        $sum = $sum + $sqrt;
                        $result = "<tr><td>$i</td><td>$sqrtRound</td></tr>";
                        echo $result;
                    }
                ?>
               <tr><td><b>Total:</b></td><td><?php echo round($sum, 2) ?></td></tr>
            </table>
        </body>
    </html>