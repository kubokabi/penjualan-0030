<?php 
require_once 'app/views/Layouts/header.php'; 
 
?>

<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Dashboard</h2>
        <div class="row stat-cards">
            <div class="col-md-6 col-xl-4">
                <article class="stat-cards-item">
                    <div class="stat-cards-icon primary">
                        <i data-feather="shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">1478 286</p>
                        <p class="stat-cards-info__title">Total Barang</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="stat-cards-item">
                    <div class="stat-cards-icon warning">
                        <i data-feather="user-check" aria-hidden="true"></i>
                    </div>
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">1478 286</p>
                        <p class="stat-cards-info__title">Total Pelanggan</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="stat-cards-item">
                    <div class="stat-cards-icon purple">
                        <i data-feather="dollar-sign" aria-hidden="true"></i>
                    </div>
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">1478 286</p>
                        <p class="stat-cards-info__title">Total Transaksi</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>

<?php 
require_once 'app/views/Layouts/footer.php';  
?>