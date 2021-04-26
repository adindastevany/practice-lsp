<nav class="navigation">
    <div>
        <a href="../pages/index.php" class="brand-nav">Sepedaa</a>
    </div>
    <div>
        <ul class="nav-list">
            <?php if (!isset($_SESSION["signin"])) : ?>
                <li class="nav-item">
                <a href="login.php" class="sign">Login</a>
            </li>
            <li class="nav=item">
                <a href="daftar.php" class="sign">Daftar</a>
            </li>
            <?php endif; ?>
            <?php if (isset($_SESSION["signin"])) : ?>
                <li class="nav=item">
                    <a href="index.php" class="sign"><?= $_SESSION["nama_pembeli"]; ?></a>
                </li>
                <?php endif; ?>
        </ul>
    </div>
</nav>