<?php

require_once "crud.php";
require_once "config-db.php";

class Trabajadores implements CRUD{

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $ocupacion;
    public $foto;
    public $pass;
   

    public function create(){
        //Crear conexion
        $conexion = new ConfigDb();
        $conexion->conectar();
       // try{
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("INSERT INTO trabajadores (id, nombre, apellido, ocupacion, foto, email, pass)
        VALUES (:id, :nombre, :apellido, :ocupacion,  :foto, :email, :pass)");
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':ocupacion', $this->ocupacion);
       
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
 
        $resultado=$stmt->execute();

        $conexion->desconectar();
        if($resultado){
            return 1;
        }else{
            return 0;
        }
}
    public function update(){
        $conexion = new ConfigDb();
        $conexion->conectar();

        $conn = $conexion->get_conn();

         // prepare sql and bind parameters
        $stmt = $conn->prepare("UPDATE trabajadores SET nombre=:nombre,apellido=:apellido, ocupacion=:ocupacion,foto=:foto, email=:email, pass=:pass WHERE id=:id");
       
      
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
  
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->bindParam(':ocupacion', $this->ocupacion);

        $stmt->bindParam(':id', $this->id);
        
        $resultado=$stmt->execute();

        //terminar conexion
        $conexion->desconectar();

        if($resultado){
            return 1;
        }else{
            return 0;
        }
        
    }

    public function delete(){
        //Crear conexion
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare("DELETE FROM trabajadores WHERE id=:id");
        $stmt->bindParam(':id', $this->id);
        $resultado=$stmt->execute();

        $conexion->desconectar();
        if($resultado){
            return 1;
        }else{
            return 0;
        }
    }
    
    public function read_by_id(){
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare(" SELECT * FROM trabajadores WHERE id=:id");
        $stmt->bindParam(':id', $this->id);
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }

    //devuelve un solo registro
    public function read_all(){
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare(" SELECT * FROM trabajadores ");

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }
    
    //devuelve todos los registros
    public function read_by_column(){
       
    }
}

?>