<?php
require_once 'app/views/Layouts/header.php';
?>

<style>
    .main {
        padding: 20px;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .btn-primary {
        background-color: #5cb85c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #4cae4c;
    }

    .btn-back {
        display: inline-block;
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
    }

    .btn-back:hover {
        text-decoration: underline;
    }
</style>

<main class="main">
    <h2>Detail Transaksi</h2>
    <div class="form-container">
        <form action="index.php?action=updateTransaksi&id_transaksi=<?= htmlspecialchars($transaksi['id_transaksi']) ?>" method="POST">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" id="kode_barang" name="kode_barang" value="<?= htmlspecialchars($transaksi['kode_barang']) ?>" required>
            </div>
            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <input type="text" id="id_pelanggan" name="id_pelanggan" value="<?= htmlspecialchars($transaksi['id_pelanggan']) ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" value="<?= htmlspecialchars($transaksi['jumlah']) ?>" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" id="total_harga" name="total_harga" value="<?= htmlspecialchars($transaksi['total_harga']) ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="datetime-local" id="tanggal" name="tanggal" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tanggal'])) ?>" required>
            </div>
            <button type="submit" class="btn-primary">Simpan Perubahan</button>
        </form>
        <a href="index.php?action=transaksi" class="btn-back">Kembali ke Daftar Transaksi</a>
    </div>
</main>

<?php
require_once 'app/views/Layouts/footer.php';
?>
