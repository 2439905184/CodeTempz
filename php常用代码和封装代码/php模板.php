<?php
// NOTE: html http头
header("Content-Type:text/html;charset=utf-8");
//纯文本http头
header("Content-Type:text/plain;charset=utf-8");
//php允许跨域访问
header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
header('Access-Control-Allow-Methods:POST,GET'); // 允许请求的类型
/*全部参数*/
//header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
?>
