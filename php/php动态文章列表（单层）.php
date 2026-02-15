<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php动态文件列表（单层）</title>
</head>
<body>
    <ol>
        <?php
            $dir = __DIR__;
            $items = scandir($dir);
            $folders = [];
            foreach ($items as $item) {
                $fullPath = $dir . DIRECTORY_SEPARATOR . $item;
                if(is_file($fullPath) && $item != 'index.php')
                {
                    echo "<li><a href=" .$item . ">" .$item . "</a></li>";
                }
            }
        ?>
    </ol>
</body>
</html>