<?php
    //switch

    $nilai=78;

    $nilaihuruf = match(true) {
        $nilai > 85 => 'A',
        $nilai > 70 => 'B',
        $nilai > 60 => 'C',
        $nilai > 50 => 'D',
        $nilai <=50 => 'E'
    };

    echo 'Nilai : ',$nilaihuruf;
    echo '<br>';

    $hari="sabtu";
    $status = match($hari){
        "senin","selasa","rabu","kamis","jumat" => "Hari kerja",
        "sabtu","minggu"                        => "Akhir pekan",
        default                                 => "salah input hari"
    };
    echo 'Hari : ',$status;