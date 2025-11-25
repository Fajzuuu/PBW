<?php
    $password = 'hitam';

    $name = $_POST['name'];
    $pswd = $_POST['pwd'];

    $user = match($name){
        'admin'     => 'admint',
        'member'    => 'kesayangan admint',
        'guard'     => 'penjaga admint',
        default     => 'invalid'
    };

    $users = [
        "admin" => ['password' => 'hitam', 'nama' => 'admint'],
        "member" => ['password' => 'legam', 'nama' => 'kesayangan admint'],
        "guard" => ['password' => 'guard', 'nama' => 'penjaga admint'],
    ];

    //$result = match(true) {
    //    !isset($users($name))   => 'User tidak ditemukan',
    //    $users($name),
    //};

    ?>
    <table width="100" widthpadding="5" cellspacing="0" border ="1">
        <tr>
            <th>Username</th>
            <th>Nama lengkap</th>
        </tr>
    </table>

    <?php   
    
    foreach($users as $key => $user) {
        echo '<tr>';
        echo '<th>',$key,'</th>';
        echo '<th>',$user['nama'],'</th>';
        echo '</tr>';
    }

    

    if($user == 'invalid'){
        echo 'User Tidak dapat ditemukan';
    } else {
        if($pswd == $password) {
            echo " <br> Welcome Sir, you are a ",$name;
        } else {
            echo "Passwordnya salah sir :[";
        }
    }



    