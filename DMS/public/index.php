<?php

require_once '../vendor/autoload.php';

use App\Controllers\DirectoryController;

// Menginisialisasi controller
$controller = new DirectoryController();

// Panggil metode index
$controller->index();
?>
