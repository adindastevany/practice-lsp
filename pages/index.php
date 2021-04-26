<!-- Ini Header -->
<?php
session_start();
require('../app.php');

$sepeda = queryData("SELECT * FROM products");

if (!isset($_SESSION["signin"])) {
    echo "
        <script>
            location='login.php';
        </script>
    ";
}
require('../layouts/header.php');
require('../layouts/nav.php');
?>


<section>
    <div class="container">
        <h2>Favorite</h2>
        <?php foreach ($sepeda as $item) : ?>
            <div class="card">
                <a href="detail.php?productId=<?= $item["id_product"] ?>">
                    <img src="../assets/images/<?= $item["gambar"]; ?>" style="border-radius: 5px;" width="100%" alt="Picture <?= $item["nama"]; ?>">
                </a>

                <h3><?= $item["nama"]; ?></h3>
                <p>deskripsi: <?= $item["deskripsi"]; ?></p>
                <p>harga: Rp <?= $item["harga"]; ?></p>

                <a href="cart.php?cartId" style="padding: 8px 10px 8px 10px; background: gray; color: black; font-weight: bold; text-decoration: none; border-radius: 5px; cursor: pointer;
            ">Add To Cart</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<!-- Ini Footer -->
<?php
require('../layouts/footer.php');
?>