<?php
$dir = __DIR__;
$items = scandir($dir);
$folders = [];
foreach ($items as $item) {
    if (is_dir($item) && $item != '.' && $item != '..') {
        $folders[] = $item;
    }
}
echo "网站文件夹列表：<br>";
foreach ($folders as $folder) {
    echo "<a href='{$folder}/index.html'>{$folder}</a><br>";
}
?>