<?php

class Transportation {
    function power(){
        return "引擎";
    }
    function move(){
        return "輪子";
    }
    function convenience(){
        return "移動速度快";
    }
}
class Car extends Transportation{
    public function movesound(){
        return "安靜";
    }
    public function save(){
        return "有安全帶";
    }

    public function people(){
        return "4人";
    }
    function convenience(){
        return "可上國道";
    }
}
class Motocycle extends Transportation{
    public function movesound(){
        return "偏吵";
    }
    public function save(){
        return "沒安全帶";
    }

    public function people(){
        return "2人";
    }
    function convenience(){
        return "不可上國道";
    }
}
$car=new Car;
$motocycle=new Motocycle;
$transportation=new Transportation;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>繼承</title>
</head>
<style>

table {
    border-collapse: collapse;
}

table, tr, td {
    border: 1px solid black;
    
    width: 400px;
    text-align: center;
}
</style>
<body>
<h1>相同處</h1>
* 用<?=$transportation->power()?>發動
<br>
* 用<?=$transportation->move()?>移動
<br>
* <?=$transportation->convenience()?>
<h1>相異處</h1>
<table style=border:1px solide red; >
    <tr>
        <td>相異處</td>
        <td>機車</td>
        <td>汽車</td>
    </tr>
    <tr>
        <td>移動方式</td>
        <td><?=$motocycle->movesound()?></td>
        <td><?=$car->movesound()?></td>
    </tr>
    <tr>
        <td>安全性</td>
        <td><?=$motocycle->save()?></td>
        <td><?=$car->save()?></td>
    </tr>
    <tr>
        <td>移動方便性</td>
        <td><?=$motocycle->convenience()?></td>
        <td><?=$car->convenience()?></td>
    </tr>
    <tr>
        <td>一般乘載</td>
        <td><?=$motocycle->people()?></td>
        <td><?=$car->people()?></td>
    </tr>


</table>

</body>
</html>