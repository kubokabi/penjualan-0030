<?php
require_once 'app/views/Layouts/header.php';

?>
<style>
    /* Style untuk main container */
    main.main {
        padding: 20px;
        border-radius: 8px;
    }

    /* Flexbox untuk judul dan tombol agar sejajar */
    .header-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .main-title {
        font-size: 2em;
        font-weight: bold;
        color: #333;
    }

    /* Style untuk tombol Tambah Barang */
    .btn-primary {
        background-color: #5cb85c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #4cae4c;
    }

    /* Style tabel */
    .table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        margin-top: 15px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: center;
        color: #333;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .table tbody tr {
        transition: background-color 0.2s;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f8f9fa;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Style untuk tombol aksi */
    .btn-info {
        background-color: #5bc0de;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-info:hover {
        background-color: #31b0d5;
    }

    .btn-warning {
        background-color: #f0ad4e;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-warning:hover {
        background-color: #ec971f;
    }

    .btn-danger {
        background-color: #d9534f;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }
</style>

<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <!-- Wrapper Flexbox untuk judul dan tombol tambah -->
        <div class="header-flex">
            <h2 class="main-title">Daftar Barang</h2>
            <a href="index.php?action=addBarang" class="btn btn-primary">Tambah Barang</a>
        </div>

        <div class="row stat-cards">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($barang as $data): ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo htmlspecialchars($data['kode_barang']); ?></td>
                            <td><?php echo htmlspecialchars($data['nama_barang']); ?></td>
                            <td><?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['stok']; ?></td>
                            <td>
                                <a href="index.php?action=editBarang&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?action=delete&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
require_once 'app/views/Layouts/footer.php';
?>