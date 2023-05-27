<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('allow-origin: *');
header("Access-Control-Allow-Headers: ACCEPT, CONTENT-TYPE, X-CSRF-TOKEN");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
$url = "https://iptv-org.github.io/iptv/countries/cn.m3u";
$m3ufile = file_get_contents($url);
//$m3ufile = str_replace('tvg-logo', 'thumb_square', $m3ufile);
//$m3ufile = str_replace('tvg-id', 'id', $m3ufile);
//$m3ufile = str_replace('tvg-name', 'group', $m3ufile);
//$m3ufile = str_replace('tvg-name', 'name', $m3ufile);
//$m3ufile = str_replace('tvg-name', 'author', $m3ufile);
//$m3ufile = str_replace('group-title', 'group', $m3ufile);
//$m3ufile = str_replace('tvg-country', 'country', $m3ufile);
//$m3ufile = str_replace('tvg-language', 'language', $m3ufile);
echo file_put_contents("test.m3u","$m3ufile");
echo "$m3ufile";
?>
