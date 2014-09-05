<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "PrintTags.php" method = "post">
            Enter Tags: </br> </br>
            <input type = "text" name = "tags" />
            <input type = "submit" value = "Submit" name = "submition" />
            </form>
            </br>
        </body>
    </html>
    
    <?php
        if (isset($_POST["tags"]) && strlen($_POST["tags"]) > 0) {
            $inputTags = htmlentities($_POST["tags"]);
            $inputArr = explode(", ", $inputTags);
            for ($i = 0; $i < count($inputArr); $i++) {
                echo $i . ":" . $inputArr[$i] . "</br>";
            }
        }elseif (isset($_POST["submition"]) && strlen($_POST["tags"]) == 0) {
            echo 'You have to submit something first!';                        
        }
    ?>