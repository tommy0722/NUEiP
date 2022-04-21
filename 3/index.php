<?php
$sumeven = 0;
$sumodd = 0;
$even = [];
$odd = [];
$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $index => $value) {
    if ($value % 2 == 0) {

        array_push($even, $value);
        $sumeven += $value;
        // echo $value;
    }
    if ($value % 2 != 0) {
        array_push($odd, $value);
        $sumodd += $value;
    }
}
// echo $sumodd - $sumeven;
// echo "<br>";
// print_r($even);
// echo "<br>";
// print_r($odd);
?>
<H2>資料處理-陣列</H2>
<p> 今有陣列資料0,1,2,3,4,5,6,7,8,9請寫出資料處理程式碼</p>
<h4>題目</h4>
<ol>
    <li>計算出「奇數值總和」減去「偶數值總和」</li>
    <li>分割成兩陣列，分別存放「奇數值」及「偶數值」</li>
</ol>
<h4>解答</h4>

<ol>
    <li><?= $sumodd - $sumeven; ?></li>
    <li>
        偶數值：<?php print_r($even) ?>
        <br>
        奇數值：<?php print_r($odd) ?>
    </li>

</ol>