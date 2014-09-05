<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                table {border: 1px solid black;}
                th, td {border: 1px solid black;}
            </style>
        </head>
        <body>
            <form action = "" method = "post">
                <label for = "years">Enter numbers of years:</label>
                <input type = "text" name = "years" id = "years" />
                <input type = "submit" name = "submition" value = "Show costs" />
            </form></br>
        </body>
    </html>
    
    <?php
        if (isset($_POST['years'])) {
            $years = $_POST['years'];
            $currentYear = 2014;
            $table = "<table><tr><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th><th>May</th><th>June</th><th>July</th><th>August</th><th>September</th><th>October</th><th>November</th><th>December</th><th>Total:</th></tr>";
            for ($i = 0; $i < $years; $i++) {
                $table .= '<tr>';
                $table .= '<td>' . $currentYear . '</td>';
                $currentYear--;
                    $sum = 0;
                    for ($j = 1; $j <= 12; $j++) {
                    $expenses = rand(0, 999);
                    $sum = $sum + $expenses;
                    $table .= '<td>' . $expenses . '</td>';
                }
                $table .= '<td>' . $sum . '</td>';
                $table .= '</tr>';
            }
            $table .= "</table>";
            echo $table;
        }
    ?>