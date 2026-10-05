<?php
/**
 * 简单的 PHP 扩展检测
 * 上传到网站目录，浏览器访问即可，用完请删除。
 */

header('Content-Type: text/html; charset=utf-8');

// ============ 1. 已加载的全部扩展 ============
$loaded = get_loaded_extensions();
sort($loaded, SORT_STRING);

// ============ 2. 常用扩展检查表 ============
$common = [
    'curl', 'openssl', 'mbstring', 'iconv', 'gd', 'imagick',
    'fileinfo', 'exif', 'zip', 'zlib', 'json',
    'pdo', 'pdo_mysql', 'mysqli', 'pdo_sqlite', 'sqlite3', 'pdo_pgsql',
    'redis', 'memcached', 'mongodb', 'apcu', 'opcache',
    'bcmath', 'gmp', 'intl', 'sodium',
    'dom', 'simplexml', 'xml', 'xmlreader', 'xsl', 'soap',
    'ldap', 'imap', 'ssh2', 'sockets', 'pcntl', 'posix',
    'xdebug', 'swoole', 'gettext',
];

$loadedLower = array_map('strtolower', $loaded);

// ============ 3. 基本信息 ============
$info = [
    'PHP 版本'   => PHP_VERSION,
    '运行方式'   => PHP_SAPI,
    '操作系统'   => PHP_OS,
    '扩展总数'   => count($loaded),
];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>PHP 扩展检测</title>
<style>
    body{font:14px/1.6 -apple-system,"Microsoft YaHei",sans-serif;max-width:900px;margin:24px auto;padding:0 16px;color:#222}
    h1{font-size:20px}
    h2{font-size:16px;margin-top:28px;border-left:4px solid #2563eb;padding-left:8px}
    table{width:100%;border-collapse:collapse;font-size:13px;margin-top:8px}
    th,td{border:1px solid #ddd;padding:6px 10px;text-align:left}
    th{background:#f5f7fa}
    .ok{color:#15803d;font-weight:600}
    .no{color:#b91c1c;font-weight:600}
    .mono{font-family:Consolas,monospace}
    .info td:first-child{width:140px;background:#fafafa;font-weight:600}
</style>
</head>
<body>

<h1>PHP 扩展检测</h1>

<table class="info">
    <?php foreach ($info as $k => $v): ?>
        <tr><td><?= htmlspecialchars($k) ?></td><td class="mono"><?= htmlspecialchars((string)$v) ?></td></tr>
    <?php endforeach; ?>
</table>

<h2>常用扩展检查</h2>
<table>
    <tr><th style="width:160px">扩展</th><th>状态</th><th>版本</th></tr>
    <?php foreach ($common as $name):
        $has = in_array(strtolower($name), $loadedLower, true);
        // opcache 特殊：可能是 zend opcache
        if (!$has && $name === 'opcache' && in_array('zend opcache', $loadedLower, true)) {
            $has = true;
        }
        $ver = $has ? (phpversion($name) ?: '') : '';
        ?>
        <tr>
            <td class="mono"><?= htmlspecialchars($name) ?></td>
            <td class="<?= $has ? 'ok' : 'no' ?>"><?= $has ? '✓ 已安装' : '✗ 未安装' ?></td>
            <td class="mono"><?= htmlspecialchars((string)$ver) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>已加载的全部扩展（<?= count($loaded) ?> 个）</h2>
<p class="mono" style="word-break:break-all;line-height:2">
    <?php foreach ($loaded as $ext): ?>
        <span style="background:#f1f4f9;border:1px solid #e2e6ec;border-radius:4px;padding:2px 8px;margin:2px;display:inline-block">
            <?= htmlspecialchars($ext) ?>
            <?php $v = phpversion($ext); if ($v): ?>
                <em style="color:#888;font-style:normal;font-size:11px"><?= htmlspecialchars((string)$v) ?></em>
            <?php endif; ?>
        </span>
    <?php endforeach; ?>
</p>

</body>
</html>