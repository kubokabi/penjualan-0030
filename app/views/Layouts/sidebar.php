<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Ilham</span>
                    <span class="logo-subtitle">23.230.0030</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <?php
                // Mendapatkan nilai `action` dari URL untuk menentukan halaman aktif
                $action = isset($_GET['action']) ? $_GET['action'] : 'home';
                ?>
                <li>
                    <a href="<?= base_url('/'); ?>" class="<?= $action === 'home' ? 'active' : '' ?>">
                        <span class="icon home" aria-hidden="true"></span>Home
                    </a>
                </li>
            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="index.php?action=barang" class="<?= $action === 'barang' || $action === 'addBarang' || $action === 'editBarang'? 'active' : '' ?>">
                        <span class="icon category" aria-hidden="true"></span>Barang
                    </a>
                </li>
                <li>
                    <a href="index.php?action=pelanggan" class="<?= $action === 'pelanggan' ? 'active' : '' ?>">
                        <span class="icon user-3" aria-hidden="true"></span>Pelanggan
                    </a>
                </li>
                <li>
                    <a href="index.php?action=transaksi" class="<?= $action === 'transaksi' ? 'active' : '' ?>">
                        <span class="icon paper" aria-hidden="true"></span>Transaksi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>