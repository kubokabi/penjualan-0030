<?php
require_once 'app/models/Barang.php';

class BarangController
{
    private $barangModel;

    public function __construct($dbConnection)
    {
        $this->barangModel = new Barang($dbConnection);
    }

    // Mendapatkan barang berdasarkan kode_barang
    public function getBarangBykode_barang($kode_barang)
    {
        return $this->barangModel->getBarangBykode_barang($kode_barang);
    }

    // Menampilkan semua barang
    public function show()
    {
        $barang = $this->barangModel->getAllBarang();
        require_once 'app/views/barangView.php'; // Sesuaikan dengan view barang
    }

    // Menampilkan detail barang berdasarkan kode_barang
    public function view($kode_barang)
    {
        $data = $this->barangModel->getBarangBykode_barang($kode_barang);
        require_once 'app/views/detail.php'; // Sesuaikan dengan view detail barang
    }

    // Menampilkan form untuk menambah barang
    public function add()
    {
        require_once 'app/views/add.php'; // Sesuaikan dengan view untuk tambah barang
    }

    // Menyimpan barang baru
    public function store($data)
    {
        $this->barangModel->addBarang($data);
        header("Location: index.php"); // Redirect setelah menambahkan barang
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
