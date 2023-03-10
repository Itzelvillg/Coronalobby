<?php

class ConfigDb{
    private $servername = "coronalobby.mx.grupogana.mx";
    private $username = "coronalobby";
    private $password = "lobby2022";
    private $conn = null;
    
    public function conectar(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=coronalobby", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    public function get_conn(){
        return $this->conn;
    }

    public function desconectar(){
        $this->conn=null;
    }


}


?>

