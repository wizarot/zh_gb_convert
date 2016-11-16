<?php

$s2t_dict = json_decode( file_get_contents('s2t.json') , true);
$t2s_dict = json_decode( file_get_contents('t2s.json') , true);

$str = '测试简体中文转换为繁体';

echo str_replace( array_keys($s2t_dict), array_values($s2t_dict), $str);

$str = '繁體中文轉化為簡體中文,測試';
echo str_replace( array_keys($t2s_dict), array_values($t2s_dict), $str);
