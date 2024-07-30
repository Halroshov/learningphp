<?php

$url = "http://www.google.com/users/index.html";

// 使用 strpos() 找到第一个 '/' 的位置(在 'http://' 之后)
$pos = strpos($url, '/', 8);

if ($pos !== false) {
    // 如果找到 '/',使用 substr() 提取域名部分
    $domain = substr($url, 0, $pos);
} else {
    // 如果没有找到 '/',整个 URL 就是域名
    $domain = $url;
}

// 移除 'http://' 或 'https://'
$domain = str_replace(['http://', 'https://'], '', $domain);

echo "域名是: " . $domain;

?>