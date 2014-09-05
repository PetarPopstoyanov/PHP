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
                <label for = "inputValue">Input string:</label>
                <input type = "text" name = "values" id = "inputValue" />
                <input type = "submit" name = "submition" value = "Submit" />
            </form>
            </br>
        </body>
    </html>

    <?php
        if (isset($_POST['values'])) {
            $input = $_POST['values'];
            $inputArr = explode(", ", $input);
            $table = "<table>";
            $sum = 0;
            for ($i = 0; $i < count($inputArr); $i++) {
                $table .= "<tr>";
                $table .= "<td>" . $inputArr[$i] . "</td><td>";
               if (ctype_digit($inputArr[$i])){
                $result = array_sum(str_split($inputArr[$i]));
                $table .= $result;
               } else {
                $table .= "I cannot sum that";
               }
                $table .= "</td></tr>";
            }
            $table .= "</table>";
            echo $table;
        }
    ?>