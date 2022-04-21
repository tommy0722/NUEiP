<?php
error_reporting(0);
$arrA = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$arrB = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrC=[];
$arrD=[];
$arrE=[];
// 由大到小排列
for ($i = 0; $i < count($arrA); $i++) {
    for ($j = 0; $j < count($arrA) - $i-1; $j++) {
        if ($arrA[$j] > $arrA[$j + 1]) {
            $a = $arrA[$j];
            $arrA[$j] = $arrA[$j + 1];
            $arrA[$j + 1] = $a;
        }
    }
}
// 找出交集
for ($i = 0; $i < count($arrA); $i++) {
    for ($j = 0; $j < count($arrB); $j++) {
        if ($arrA[$i] == $arrB[$j]) {
            array_push($arrC, $arrB[$j]);
        }
    }
}
// 找出重複的數字刪除
for($i = 0;$i < count($arrC);$i++){
    for($j=$i+1;$j < count($arrC) ; $j++){
    if($arrC[$i] == $arrC[$j]){
    unset($arrC[$j]);
    array_splice($arrC,$arrC[$i]);
    }
}
}

// A差級B=找出A,B的交集，陣列A-交集
$arrD=$arrA;
for($i = 0;$i < count($arrD);$i++){
    for($j=0;$j < count($arrC) ; $j++){
    if($arrD[$i] == $arrC[$j])
    unset($arrD[$i]);
    
    }
}
// 聯集
for($i=0;$i<count($arrA);$i++){
    array_push($arrE, $arrA[$i]);
}
for($i=0;$i<count($arrB);$i++){
    array_push($arrE, $arrB[$i]);
}
for ($i = 0; $i < count($arrE); $i++) {
    for ($j = 0; $j < count($arrE) - $i-1; $j++) {
        if ($arrE[$j] > $arrE[$j + 1]) {
            $a = $arrE[$j];
            $arrE[$j] = $arrE[$j + 1];
            $arrE[$j + 1] = $a;
        }
    }
}
for($i = 0;$i < count($arrE);$i++){
    for($j=$i+1;$j < count($arrE) ; $j++){
    if($arrE[$i] == $arrE[$j]){
    unset($arrE[$j]);
    array_splice($arrE,count($arrA)+count($arrB));
    }
}
}
    // 0.1.4.5.9
// print_r("陣列C=陣列a交集陣列b=");
// print_r($arrC);
// echo "<br>";
// print_r("陣列D=陣列a差集陣列b=");
// print_r($arrD);
// echo "<br>";
// print_r("陣列E=陣列a聯集陣列b=");
// print_r($arrE);
function dd($id){
    echo "<pre>";
    print_r($id);
    echo "</pre>";
}
?>

<H2>邏輯處理-交集、差集、聯集</H2>
<p> 今有二陣列，請寫出資料處理程式碼</p>
<p> 陣列a：77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9 </p>
<p> 陣列b：0,1,2,3,4,5,6,7,8,9 </p>
<h4>題目</h4>
<ol>
    <li>陣列C=陣列a交集陣列b</li>
    <li>陣列D=陣列a差集陣列b</li>
    <li>陣列E=陣列a聯集陣列b</li>
</ol>
<h4>解答</h4>

<ol>
    <li><?php dd($arrC); ?></li>
    <li><?php dd($arrD); ?></li>
    <li><?php dd($arrE); ?></li>
    

</ol>