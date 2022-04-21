<?php
$arr = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
for ($i = 0; $i < count($arr); $i++) {
    for ($j=0; $j < count($arr) - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $a = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $a;
        }
        // print_r($arr);
       
    }

}
// print_r($arr);
?>
<H2>資料處理-正序</H2>
<p> 令有一陣列資料77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9請寫出正序排列處理程式碼</p>
<h4>題目</h4>

<h4>解答</h4>
<?php print_r($arr);?>