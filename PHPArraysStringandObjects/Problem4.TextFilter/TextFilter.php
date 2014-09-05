<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "" method = "post">
                <textarea name = "textInput"></textarea></br>
                <label for = "banList">Ban List</label>
                <input type = "text" name = "banList" id = "banList" /></br>
                <input type = "submit" value = "Submit" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['textInput']) && isset($_POST['banList'])) {
            $text = $_POST['textInput'];
            $ban = $_POST['banList'];
            $banArr = explode(", ", $ban);
            foreach ($banArr as $word) {
                $text = str_replace($word, str_repeat("*", strlen($word)), $text);
            }
            echo $text;
        }
    ?>