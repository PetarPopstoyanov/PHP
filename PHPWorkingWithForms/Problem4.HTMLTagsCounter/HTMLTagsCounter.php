<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "HTMLTagsCounter.php" method = "post">
                <label for = "HTMLTags" >Enter HTML tags:</label></br></br>
                <input type = "text" name = "tags" id = "HTMLTags" />
                <input type = "submit" name = "validation" value = "Submit" /> </br> </br>
            </form>
        </body>
    </html>
    
    <?php
        session_start();
        $validTags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
                    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
                    'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
                    'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
                    'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
                    'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
                    'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
                    'tt', 'u', 'ul', 'var');
        if (isset($_POST["tags"])) {
            if (strlen($_POST["tags"]) == 0) {
                if (isset($_SESSION["count"])) {
                    unset($_SESSION["count"]);
                }
            }
            if (in_array(htmlentities($_POST["tags"]), $validTags)) {
                echo "<strong><font size = '5'>Valid HTML tag!" . "</br></font></strong>";
                if (isset($_SESSION["count"])) {
                $_SESSION["count"]++;
                } else {
                    $_SESSION["count"] = 0;
                }
                echo "<strong><font size = '5'>Score: " . $_SESSION["count"] . "</font></strong>";
            } else {
                echo "<strong><font size = '5'>Invalid HTML tag!" . "</br>" . "Score: " .  $_SESSION["count"] . "</font></strong>";
            }
        }
