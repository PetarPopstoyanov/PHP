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
                <label for = "car">Enter cars</label>
                <input type = "text" name = "cars" id = "car" />
                <input type = "submit" value = "Show result" name = "submition" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST["cars"]) && !empty($_POST["cars"])) {
            $cars = htmlentities($_POST["cars"]);
            $carsArr = explode(", ", $cars);
            $table = "<table><tr><th>Cars</th><th>Colors</th><th>Count</th></tr>";
            $colors = array("red", "green", "blue", "white", "black", "silver");
            for ($i = 0; $i < count($carsArr); $i++) {
                $randColors = array_rand($colors);
                $count = rand(1, 5);
                $table .= '<tr>';
                $table .= '<td>' . htmlentities($carsArr[$i]) . '</td>';
                $table .= '<td>' . $colors[$randColors] . '</td>';
                $table .= '<td>' . $count . '</td>';
                $table .= '</tr>';
            }
            $table .= "</table>";
            echo $table;
        }
    ?>
    
    