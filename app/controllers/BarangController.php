<?php
require_once 'app/models/Barang.php';

class BarangController
{
    private $barangModel;

    public function __construct($dbConnection)
    {
        $this->barangModel = new Barang($dbConnection);
    }

    public function getBarangBykode_barang($kode_barang)
    {
        return $this->barangModel->getBarangBykode_barang($kode_barang);
    }

    public function index()
    {
        $barang = $this->barangModel->getAllBarang();
        require_once 'app/views/Barang/index.php';
    }

    public function addBarang()
    {
        require_once 'app/views/Barang/add.php';
    }

    public function view($kode_barang)
    {
        $data = $this->barangModel->getBarangBykode_barang($kode_barang);
        require_once 'app/views/detail.php';
    }

    public function store($data)
    {
        if ($this->barangModel->addBarang($data)) {
            $_SESSION['flash_message'] = [
                'type' => 'success',
                'message' => 'Barang berhasil ditambahkan'
            ];
            // Komentar redirect sementara
            // header("Location: index.php?action=barang");
        } else {
            $_SESSION['flash_message'] = [
                'type' => 'warning',
                'message' => 'Kode barang sudah ada!'
            ];
            error_log("Flash message set: " . json_encode($_SESSION['flash_message']));
            // Komentar redirect sementara
            // header("Location: index.php?action=addBarang");
        }
        // exit();
    }


    // Menampilkan form untuk mengedit barang
    public function edit($kode_barang)
    {
        $data = $this->barangModel->getBarangBykode_barang($kode_barang);
        require_once 'app/views/edit.php'; // Sesuaikan dengan view untuk edit barang
    }

    // Memperbarui barang berdasarkan kode_barang
    public function update($kode_barang, $data)
    {
        $this->barangModel->updateBarang($kode_barang, $data);
        header("Location: index.php"); // Redirect setelah memperbarui barang
    }

    // Menghapus barang berdasarkan kode_barang
    public function delete($kode_barang)
    {
        $this->barangModel->deleteBarang($kode_barang);
        header("Location: index.php"); // Redirect setelah menghapus barang
    }
}
