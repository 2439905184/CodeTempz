<?php
// 列出文件夹下所有文件并生成带有下载链接的li标签 需要在ol标签内使用
function gen_download_list($dir)
{   
    if (is_dir($dir)) {
        $files = scandir($dir);
        
        if ($files !== false) {
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') continue; 
                
                $filePath = $dir . '/' . $file;
                
                if (is_file($filePath)) {
                    // 处理中文路径编码：对路径中的每个部分单独编码
                    $encodedDir = implode('/', array_map('rawurlencode', explode('/', $dir)));
                    $encodedFile = rawurlencode($file);
                    $encodedPath = $encodedDir . '/' . $encodedFile;
                    
                    // 创建带有下载链接的列表项
                    echo '<li><a href="' . htmlspecialchars($encodedPath) . '" download>' 
                         . htmlspecialchars($file) . '</a></li>';
                }
            }
        } else {
            echo "<li>错误：无法读取目录内容</li>"; 
        }
    } else {
        echo "<li>错误：目录不存在或不可访问</li>"; 
    }
}
?>