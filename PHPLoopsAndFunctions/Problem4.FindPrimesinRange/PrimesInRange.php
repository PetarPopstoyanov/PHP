<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "" method = "post">
                <label for = "start">Start Index: </label>
                <input type = "text" name = "startNumber" id = "start" />
                <label for = "end">End: </label>
                <input type = "text" name = "endNumber" id = "end" />
                <input type = "submit" name = "submition" value = "Submit" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['startNumber']) && isset($_POST['endNumber'])) {
            $start = $_POST['startNumber'];
            $end = $_POST['endNumber'];
            
            function isPrime($num) {
                if($num == 1)
                    return false;
                
                if($num == 2)
                    return true;
            
                if($num % 2 == 0) {
                    return false;
                }
            
                for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
                    if($num % $i == 0)
                        return false;
                }
                return true;
            }

            $result = array();
            for ($i = $start; $i <= $end; $i++){
                if (isPrime($i)) {
                    echo "<b><font size = 10>" . $i . "</font></b>" . ", ";
                } else {
                    echo $i . ", ";
                }
            }
        }
    ?>