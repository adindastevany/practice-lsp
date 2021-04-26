<?php
session_start();

require('../app.php');
require("../layouts/header.php");
if (isset($_SESSION["signin"])) {
    echo "
    <script>
        location='index.php';
    </script>
    ";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $queryUser = "SELECT * FROM users WHERE username = '$username'";
    $data = mysqli_query($db, $queryUser);


    if (mysqli_num_rows($data) === 1) {
        $row = mysqli_fetch_assoc($data);
        // pengecekan password jika sama dengan yang diketik sama yang di database lakukan action
        if (password_verify($password, $row["password"])) {
            echo "
                <script>
                    alert('Berhasil Login Yeay!');
                    location='index.php';
                </script>
            ";
            // ini untuk mengambil data pembeli disimpan session 
            $_SESSION["signin"] = true;
            $_SESSION["nama_pembeli"] = $row["username"];
        }
    }
    $pesan = true;
}

?>

<h2>Login Page</h2>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="MArk">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="*****">

    <button name="login" type="submit">Login</button>
</form>

<?php
require("../layouts/footer.php");
?>