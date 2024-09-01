<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Memisahkan path berdasarkan tanda '/'
$pathParts = explode('/', trim($page, '/'));

// Mengambil bagian terakhir dari path untuk menentukan file view
$viewFile = __DIR__ . "/views/" . end($pathParts) . ".php";

// Mengecek apakah file view ada, jika tidak arahkan ke 404.php
if (!file_exists($viewFile) || end($pathParts) == '') {
    $viewFile = __DIR__ . "/views/404.php";
}

ob_start();
include $viewFile;
$pageContent = ob_get_clean();

include __DIR__ . '/components/layout.php';
?>
