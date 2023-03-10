<?php

require_once "crud.php";
require_once "config-db.php";

class usuarios implements CRUD{


    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $pass;
    public $foto;
    public $estatus;
    public $tipo;


    public function create(){
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, email, pass, foto, estatus, tipo) 
        VALUES (:nombre, :apellido, :email, :pass, :foto, :estatus, :tipo)");
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->bindParam(':estatus', $this->foto);
        $stmt->bindParam(':estatus', $this->estatus);
        $stmt->bindParam(':tipo', $this->tipo);
        
        $result = $stmt->execute();

        $conexion->desconectar();

        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }   
    public function read(){
    }
    public function update(){
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, pass = :pass, foto = :foto, estatus = :estatus, tipo = :tipo WHERE id = :id");
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->bindParam(':estatus', $this->foto);
        $stmt->bindParam(':estatus', $this->estatus);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':id',$this->id);
        $result = $stmt->execute();

        $conexion->desconectar();

        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function delete(){
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id=:id");
        $stmt->bindParam(':id' , $this->id);  
        $result = $stmt->execute();

        $conexion->desconectar();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function read_by_id(){
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare(" SELECT * FROM usuario WHERE id=:id");
        $stmt->bindParam(':id', $this->id); 
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }
    public function read_all(){

        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("SELECT * FROM usuarios");

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }
    public function read_by_column(){
    }
    public function acceso(){ 
      
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare(" SELECT * FROM usuarios WHERE email=:email AND pass=:pass 
        AND estatus='activo' AND tipo='admin'");
        $stmt->bindParam(':email', $this->email); 
        $stmt->bindParam(':pass', $this->pass); 
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();

       
    } 
  
}
