<?php

namespace Kelompok1\MVC\Database;

use mysqli; 

date_default_timezone_set('Asia/Kolkata');

require_once __DIR__ . '/../../vendor/autoload.php';


class Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("127.0.0.1", "root", "", "blmsdb");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
