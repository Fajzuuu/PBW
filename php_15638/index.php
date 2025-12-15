<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Hari selasa ygy</h1>
    <?php
    $nama = "juan";
    $kerja = "joki kuda liar";
    $tinggi_badan = 200;

    echo "Nama Lengkap : " . $nama . " <br> Pekerjaan : " . $kerja . "<br>";
    echo "Tinggi badan : " . $tinggi_badan . "cm <br>";

    $mahasiswa = array("april", "Mei", "Jules", "Rusdi");

    echo " <br> Mahasiswa terakhir adalah : " . $mahasiswa[3] . "<br>";
    
    $data12 = array('satu' => 5, 'dua' => 10);

    echo"Datanya : " . $data12['dua'];  
    ?>
    <hr>

    <?php
    $associative_array = [
        'nim' => "A11.2024.01010",
        'nama' => "Juan"
    ];
    echo "nama mahasiswa dengan nim : ",$associative_array['nim']," adalah ",$associative_array['nama'];

    ?>
</body>
</html>