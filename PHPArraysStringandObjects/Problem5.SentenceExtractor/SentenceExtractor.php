<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "" method = "post">
                <textarea name = "textInput"></textarea></br>
                <label for = "banList">Word</label>
                <input type = "text" name = "banList" id = "banList" /></br>
                <input type = "submit" value = "Submit" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['textInput']) && isset($_POST['banList'])) {
            $text = $_POST['textInput'];
            $word = $_POST['banList'];
            
            $pattern = '/(?<=[.?!])\s+/';
            $sentences = preg_split($pattern, $text, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach ($sentences as $sentence) {
                $ptrn = '/\s+'.$word.'\s+.*[!?.]+$/';
                if (preg_match($ptrn, $sentence)) {
                    echo $sentence . "</br>";
                }
            }
        }
    ?>
