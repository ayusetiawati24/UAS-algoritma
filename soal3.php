<?php

echo "Masukan jam kerja : ";
$jam_kerja = trim(fgetc(STDIN));
echo "Masukan golongan kerja : ";
$golongan_kerja = trim(fgetc(STDIN));

$jam_kerja = array(
    array(
        "golongan" => "I",
        "upah" => 3000
    ),
    array(
        "golongan" => "II",
        "upah" => 3500
    ),
    array(
        "golongan" => "III",
        "upah" => 4000
    ),
    array(
        "golongan" => "IV",
        "upah" => 5000
    ));

    if ($jam_kerja<=40) {
        $upah=$jam_kerja*$golongan_kerja;

        echo "Total Gaji : Rp.$upah";

    }else{
        echo "gaji : ". $jam_kerja*$golongan_kerja*1,5;
    }


    



?>