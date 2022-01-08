<?php 
$str = "Today is sunday";

echo strlen($str);
echo "<br>";
echo str_word_count($str);
// echo strrev($str);
echo "<br>";
echo strpos($str, "is");
echo "<br>";
// echo str_replace("is", "are", $str);
echo str_replace("Today", "Yesterday", $str);
?>