<?php
    include "koneksi.php";
    $query = $koneksi->prepare("SELECT id,username,active FROM users WHERE id = ?");
    $query->execute([$_GET['id']]);
    $rs = $query->fetch(PDO::FETCH_ASSOC);
?>
<form action="act_editUser.php" method = "post">
    <div class="row">
        <input type="hidden" name="id" value="<?$rs['id']?>">
        <label for="username">Username</label>
        <input type="text" name ="username" class="form-control" value="<?$rs['username']?>">
    </div>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" name ="paswd" class="form-control">
    </div>
    <div class="row">
        <label for="password">Konfrmasi password</label>
        <input type="password" name ="cpaswd" class="form-control">
    </div>
    <div class="row">
        <input type="submit" value="simpan" class="btn btn-primary">
    </div>
    <div class="row">
        <label for="active">Status user</label>
        <select name="active" id="">
            <option value="1"><?=$rs['active'] == 1?"selected":""?>Aktif</option>
            <option value="0"><?=$rs['active'] == 0?"selected":""?>Non aktif</option>
        </select>
    </div>
    <div class="row">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>