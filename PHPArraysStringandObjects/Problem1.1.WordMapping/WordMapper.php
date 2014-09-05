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
            $words = preg_split('/\W+/', $input, -1, PREG_SPLIT_NO_EMPTY);
            $words_count = array();
            foreach ($words as $word) {
                if (isset($words_count[$word])) {
                     $words_count[$word]++;      
                } else {
                    $words_count[$word] = 1;
                }
            }
            echo "<table>";
            foreach ($words_count as $word => $count) {
                echo "<tr><td>$word</td><td>$count</td></tr>";
            }
            echo "</table>";
        }
    ?>