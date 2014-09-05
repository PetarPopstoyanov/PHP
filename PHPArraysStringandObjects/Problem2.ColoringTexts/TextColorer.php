<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "" method = "post">
                <textarea name = "input"></textarea></br>
                <input type = "submit" name = "submition" value = "Color text" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['input'])) {
            $text = trim($_POST['input']);
            $textArr = str_split($text);
            $result = implode(" ", $textArr);
            for ($i = 0; $i < strlen($result); $i++) {
                if (ord($result[$i]) % 2 == 0) {
                    echo "<font color = 'red'>$result[$i]</font>";
                } else {
                    echo "<font color = 'blue'>$result[$i]</font>";
                }
            }
        }
    ?>