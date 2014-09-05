<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                aside {border: 1px solid black; margin-bottom: 10px; border-radius: 20px;
                padding-left: 10px; width: 200px; background: rgba(185, 207, 238, 0.9);}
                ul {list-style: circle;}
                ul li a {color: black;}
            </style>
        </head>
        <body>
            <form action = "" method = "post">
                <label for = "categories">Categories:</label>
                <input type = "text" name = "categories" id = "categories" /></br>
                <label for = "tags">Tags:</label>
                <input type = "text" name = "tags" id = "tags" /></br>
                <label for = "months">Months:</label>
                <input type = "text" name = "months" id = "months" /></br>
                <input type = "submit" name = "submition" value = "Generate" />
            </form>
        </body>
    </html>
    
    <?php
        if (isset($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months'])) {
            $categories = $_POST['categories'];
            $tags = $_POST['tags'];
            $months = $_POST['months'];
            
            $categoriesArr = explode(", ", $categories);
            $tagsArr = explode(", ", $tags);
            $monthsArr = explode(", ", $months);
            
            echo "<aside><h2>Categories</h2><hr noshade><ul>";
            for ($i = 0; $i < count($categoriesArr); $i++) {
                echo "<li><a href = '#'>$categoriesArr[$i]</a></li>";
            }
            echo "</ul></aside>";
            
            echo "<aside><h2>Tags</h2><hr noshade><ul>";
            for ($j = 0; $j < count($tagsArr); $j++) {
                echo "<li><a href = '#'>$tagsArr[$j]</a></li>";
            }
            echo "</ul></aside>";
            
            echo "<aside><h2>Months</h2><hr noshade><ul>";
            for ($k = 0; $k < count($monthsArr); $k++) {
               echo "<li><a href = '#'>$monthsArr[$k]</a></li>";
            }
            echo "</ul></aside>";
        }
    ?>