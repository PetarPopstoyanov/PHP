<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "" method = "post">
                <input type = "text" name = "value" />
                <input type = "radio" name = "option" id = "checkPalindrome" value = "palindrome" />
                <label for = "checkPalindrome">Check Palindrome</label>
                <input type = "radio" name = "option" id = "reverseString" value = "reverse" />
                <label for = "reverseString">Reverse String</label>
                <input type = "radio" name = "option" id = "split" value = "split" />
                <label for = "split">Split</label>
                <input type = "radio" name = "option" id = "hashString" value = "hash" />
                <label for = "hashString">Hash String</label>
                <input type = "radio" name = "option" id = "shuffleString" value = "shuffle" />
                <label for = "shuffleString">Shuffle String</label>
                <input type = "submit" name = "submition" value = "Submit" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['value']) && isset($_POST['option'])) {
            $input = $_POST['value'];
            $option = $_POST['option'];
            
            if ($option == 'palindrome') {
                if ($input == strrev($input)) {
                    $result = $input . " is palindrome!";
                } else {
                    $result = $input . " is not a palindrome!";
                }
            } elseif ($option == 'reverse') {
                $result = strrev($input);
            } elseif ($option == 'split') {
                $option = trim($input);
                $optionArr = str_split($input);
                $result = implode(" ", $optionArr);
            } elseif ($option == 'hash') {
                $result = crypt($input);
            } elseif ($option == 'shuffle') {
                $result = str_shuffle($input);
            }
            echo $result;
        }
    ?>