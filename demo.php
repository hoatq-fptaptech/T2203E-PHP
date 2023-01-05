<?php
// code php viet tai day
echo "Hello world";

$x = 10;
$x = "hello";
$arr = [];
$arr[0]=15;
$arr[1] = 20;
$arr[2] = 25;
$arr[] = 19;
$arr[] = 19;
$arr[] = 19;

for($i=0;$i<count($arr);$i++){
    // $arr[$i]
}

foreach($arr as $a){
    // $a <=> $arr[$i]
}

$sv = [
    "name"=> "Nguyen Van An",
    "age" => 19,
    "tel" => "0987654321"
];

echo $sv["name"]."<br/>";

foreach ($sv as $s){
    echo "<h2>".$s."</h2>";
}

foreach ($sv as $k=>$v){
    echo "<h2>$k : $v</h2>";
}

//echo json_encode($sv);

function tinhTong($a,$b){
    return $a+$b;
}

