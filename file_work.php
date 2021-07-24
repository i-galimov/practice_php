// прочитать и вывести содержимое файла "nums.txt"

<?php
$nums = file("nums.txt");
foreach($nums as $num) {
echo $num."<br />";
}
?>
