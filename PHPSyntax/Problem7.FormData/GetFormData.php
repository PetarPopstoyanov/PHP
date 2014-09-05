<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                input {display: block;}
                input[type=radio] {display: inline-block;}
                input.female {display: inline-block;}
            </style>
        </head>
        <body>
            <form action = "GetFormData.php" method = "get">
                <input type = "text" name = "name" placeholder = "Name.." />
                <input type = "text" name = "age" placeholder = "Age.." />
                <div class = "male">
                <input type = "radio" name = "gender" id = "male" value = "male" />
                <label for = "male">Male</label>
                </div>
                <div class = "female">
                <input type = "radio" name = "gender" id = "female" value = "female"/>
                <label for = "female">Female</label>
                </div>
                <input type = "submit" value = "Submit" />
            </form>
        </body>
    </html>
    <?php
        if (isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["gender"])) {
            echo "My name is " . htmlentities($_GET["name"]) . ". I am " . htmlentities($_GET["age"]) . " years old. I am " . $_GET["gender"] . ".";
        }
    ?>
    
   