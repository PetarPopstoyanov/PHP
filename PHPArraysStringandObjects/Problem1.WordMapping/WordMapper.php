<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                table {border: 1px solid black;}
                td {border: 1px solid black;}
            </style>
        </head>
        <body>
            <form action = "" method = "post">
                <textarea name = "input"></textarea></br>
                <input type = "submit" name = "submition" value = "Count words" />
            </form>
            </br>
        </body>
    </html>
    
    <?php
        if (isset($_POST['input'])) {
            $input = strtolower($_POST['input']);
            $split = preg_split('/\W+/', $input, -1, PREG_SPLIT_NO_EMPTY);
            $counts = array_count_values($split);
            echo "<table>";
            foreach ($counts as $words => $count) {
                echo "<tr><td>$words</td><td>$count</td></tr>";
            }
            echo "</table>";
        }
    ?>