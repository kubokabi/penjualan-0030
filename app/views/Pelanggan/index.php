<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wkode_barangth=device-wkode_barangth, initial-scale=1">
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Daftar Barang</h1>
                <!-- Tombol Add -->
                <a href="index.php?action=add" class="btn btn-primary">Tambah Barang</a>
            </div>
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
                                <!-- Tombol dengan warna Bootstrap -->
                                <a href="index.php?action=view&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-info btn-sm">Lihat</a>
                                <a href="index.php?action=edit&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?action=delete&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9Gkckode_barangslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>