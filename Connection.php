<?php
class DBCommonMethods
{
    private $host;
    private $user;
    private $pass;
    private $db;

    protected function connect(){
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->db="bank";
        
        $conn=new mysqli($this->host,$this->user,$this->pass,$this->db);
        return $conn;
}
}
?>