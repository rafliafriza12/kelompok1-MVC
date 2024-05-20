<?php

namespace App\Models;

require_once __DIR__ . '/../../config/database.php';

class Directory {
    private $con;

    public function __construct() {
        $this->con = $GLOBALS['con'];
    }

    public function searchDirectories($sdata) {
        $query = "SELECT * FROM tbldirectory WHERE (FullName LIKE ? OR MobileNumber LIKE ?) AND (Status=1) ORDER BY id DESC LIMIT 12";
        $stmt = $this->con->prepare($query);
        $searchTerm = $sdata . '%';
        $stmt->bind_param('ss', $searchTerm, $searchTerm);
        $stmt->execute();
        return $stmt->get_result();
    }
}
