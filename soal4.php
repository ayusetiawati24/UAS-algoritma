<?php

$gol1 = 1000;
$gol2 = 2000;
$array = [
    [
        "nama"=>"yunita",
        "golongan"=>"I", 
        "KWH"=>60
    ],
    [
        "nama"=>"salsa",
        "golongan"=>"II", 
        "KWH"=>100
    ],
    [
        "nama"=>"nita", 
        "golongan"=>"I", 
        "KWH"=>1000
    ],
    [
        "nama"=>"sara", 
        "golongan"=>"II", 
        "KWH"=>1500
    ],
];

array_walk($array, function($nama) use ($gol1, $gol2){
    echo "nama : " . $nama['nama']."\n";
    echo "golongan : " . $nama['golongan']."\n";
    echo "KWH : " . $nama['KWH']."\n";
    echo "bayar : ";
        if ($nama ['golongan'] == "I"){
            $tarif = $gol1;

        }else {
            $tarif = $gol2;

        }
        if ($nama ['KWH']<100){
            echo 100*$tarif."\n\n";
        }else if ($nama['KWH']>=1000){
            echo ($nama['KWH']*$tarif)+(0.1*($nama['KWH']*$tarif))."\n\n";
        }else{
            echo $nama['KWH']*$tarif."\n\n";
        }
});

?>