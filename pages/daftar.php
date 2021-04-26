<?php

require('../app.php');
if (isset($_POST["daftar"])) {
    if (daftarAkun($_POST) > 0) {
        // KETIKA SUCCESS
        header("Location: login.php");
    }
}

require("../layouts/header.php");
?>

<h2>Daftar Page</h2>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="MArk">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="*****">
    
    <label for="no_telp">Nomor Telephone</label>
    <input type="text" name="no_telp" id="no_telp" placeholder="+62987654321">

    <button type="submit" name="daftar">Daftar</button>

    <span>Sudah punya akun?</span> 
    <a href="login.php">Login disini yaa</a>
</form>

<?php
require("../layouts/footer.php");
?>