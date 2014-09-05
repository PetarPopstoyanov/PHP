<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "MostFrequentTag.php" method = "post">
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
            
            $count = array_count_values($inputArr);
            arsort($count);
            $keys = array_keys($count);
            foreach ($count as $tag => $value) {
                echo $tag . ": " . $value . " times" . "</br>";
            }
            
            echo "The Most Frequent Tag is: " . $keys[0];
        } elseif (isset($_POST["submition"]) && strlen($_POST["tags"]) == 0) {
            echo 'You have to submit something first!';                        
        }
    ?>