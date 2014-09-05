<?php
$text = '<p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming.
You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>';

$regex = "/<a\s*[^>]+href=['\"]\s*(.*?)['\"]+>(.*?)<\/a>/";

preg_match_all($regex, $text, $matches);

$forumUrls = array();

for($i = 0; $i < count($matches[0]) ;$i++) {
    $forumUrls[] = "<b>[URL=</b>" . "<b>" . $matches[1][$i] . "</b>" . "<b>]</b>" . $matches[2][$i] . "<b>[/URL]</b>";
}

for($i = 0; $i < count($forumUrls) ;$i++) {
    $text = str_replace($matches[0][$i], $forumUrls[$i], $text);
}

echo $text;
?>