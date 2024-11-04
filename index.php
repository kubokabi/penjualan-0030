<?php 
function base_url($path = '')
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $base_url = $protocol . $host . '/penjualan-0030';
    return $base_url . $path;
} 
require_once 'config/database.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/BarangController.php';

// Menghubungkan ke database
$dbConnection = getDBConnection();
$HomeController = new HomeController($dbConnection);
$controller = new BarangController($dbConnection);

// Mendapatkan aksi yang diinginkan
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$kode_barang = isset($_GET['kode_barang']) ? intval($_GET['kode_barang']) : null;

switch ($action) {
    case 'home':
        $HomeController->index();
        break;
    case 'show':
        $controller->show();
        break;

    case 'add':
        $controller->add();
        break;

    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'kode_barang' => $_POST['kode_barang'],
                'nama_barang' => $_POST['nama_barang'],
                'harga' => intval($_POST['harga']),
                'stok' => intval($_POST['stok'])
            ];
            $controller->store($data);
        }
        break;

    case 'view':
        if ($kode_barang) {
            $controller->view($kode_barang);
        }
        break;

    case 'edit':
        if ($kode_barang) {
            $controller->edit($kode_barang);
        }
        break;

    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $kode_barang) {
            $data = [
                'kode_barang' => $_POST['kode_barang'],
                'nama_barang' => $_POST['nama_barang'],
                'harga' => intval($_POST['harga']),
                'stok' => intval($_POST['stok'])
            ];

            $controller->update($kode_barang, $data);
        }
        break;

    case 'delete':
        if ($kode_barang) {
            $controller->delete($kode_barang);
        }
        break;

    default:
        $HomeController->index();
        break;
}
