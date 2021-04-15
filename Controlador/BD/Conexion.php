<?php

class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $port = '3306';
    private $db = 'BDPrestamo';

    public function getcon(){
        $con = new PDO('mysql:host='.$this->host.';'.
                    'port='.$this->port.';'.
                    'dbname='.$this->db,
                    $this->user,
                    $this->pass,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
}
?>