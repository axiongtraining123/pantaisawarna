<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';
  $viewFile = __DIR__ . "/views/{$page}.php";

  if (!file_exists($viewFile)) {
    $viewFile = __DIR__ . "/views/404.php"; // if page not found
  }

  ob_start();
  include $viewFile;
  $pageContent = ob_get_clean();

  include __DIR__ . '/components/layout.php'; 
?>