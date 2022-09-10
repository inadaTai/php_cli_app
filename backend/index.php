<?php
$list = [
    ['No', '名前', '年齢'],
    ['1', 'テスト太郎', '30'],
];
// ファイルを開く
$fp = fopen('inada_file.csv', 'w');
// 1行ずつ配列の内容をファイルに書き込む
foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

?>