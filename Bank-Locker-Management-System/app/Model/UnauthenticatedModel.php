<?php

namespace Kelompok1\MVC\Model;

use Kelompok1\MVC\Database\Connection;

class UnauthenticatedModel {
    private $conn;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    public function getAllAboutUsData(){
        $query = "SELECT * FROM tblpage where PageType='aboutus' ";
        $result = $this->conn->query($query);
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllContactUsData(){
        $query = "SELECT * FROM tblpage where PageType='contactus' ";
        $result = $this->conn->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSearchLocker($searchby){
        $query = "select * from tblassignlocker where LockerNumber='$searchby' || KeyNumber='$searchby' ";
        $result = $this->conn->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getLockerDetail($ltid){
        $query = "select tbllockertype.ID as blid,tbllockertype.SizeofLocker,tbllockertype.Priceoflocker,tblassignlocker.* from tblassignlocker join tbllockertype on tbllockertype.ID=tblassignlocker.LockerSize where tblassignlocker.ID='$ltid' ";
        $result = $this->conn->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}   