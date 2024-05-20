<?php

namespace App\Controllers;

use App\Models\Directory;

class DirectoryController {
    private $model;

    public function __construct() {
        $this->model = new Directory();
    }

    public function index() {
        include __DIR__ . '/../views/directory/index.php';
    }

    public function search() {
        if (isset($_POST['searchdata'])) {
            $sdata = $_POST['searchdata'];
            $directories = $this->model->searchDirectories($sdata);
            include __DIR__ . '/../views/directory/search.php';
        } else {
            header('Location: /');
        }
    }
}
