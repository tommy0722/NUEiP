<?php
$str = '人易科技:上 機 測 驗 - 演算法';

// echo str_replace(":","：",$str);
// echo "<br>";
// echo str_replace("上 機 測 驗","上機測驗",$str);
// echo "<br>";
// echo mb_substr($str,5,8);
?>
<H2>資料處理-字串</H2>
<p> 請寫出將字串中「<?= $str ?>」中的：</p>
<h4>題目</h4>
<ol>
    <li>字元「：」改成全形</li>
    <li>去定中間自間的空白(保留-號兩側空白)</li>
    <li>列印出符號:到-之間的字元</li>
</ol>
<h4>解答</h4>

<ol>
    <li><?= str_replace(":", "：", $str);  ?></li>
    <li><?= str_replace("上 機 測 驗", "上機測驗", $str); ?></li>
    <li><?= mb_substr($str, 5, 8); ?></li>
</ol>