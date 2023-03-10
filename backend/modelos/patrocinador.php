<?php

require_once "crud.php";
require_once "config-db.php";

class Patrocinadores implements CRUD{
    //atributo = columna tabla Autor

    public $id;
    public $nombre;
    public $monto;
    public $descripcion;
    
    public $foto;
    public $zona;
    

    public function create(){
        //Crear conexion
        $conexion = new ConfigDb();
        $conexion->conectar();
       // try{
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("INSERT INTO patrocinadores (id, nombre,monto,foto,descripcion, zona)
        VALUES ( :id, :nombre, :monto,  :foto, :descripcion, :zona)");
       $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':monto', $this->monto);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':zona', $this->zona);

        $resultado=$stmt->execute();

        $conexion->desconectar();
        if($resultado){
            return 1;
        }else{
            return 0;
        }
}
    //Obtener unicamente el Id_Autor y el Nombre para los formularios de LIBRO
    public function update(){
        $conexion = new ConfigDb();
        $conexion->conectar();

        $conn = $conexion->get_conn();

         // prepare sql and bind parameters
        $stmt = $conn->prepare("UPDATE patrocinadores SET id=:id, nombre=:nombre,monto=:monto,foto=:foto, descripcion=:descripcion, zona=:zona WHERE id=:id");
       
       $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':monto', $this->monto);
  
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':zona', $this->zona);
       
        
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
        $stmt = $conn->prepare("DELETE FROM patrocinadores WHERE id=:id");
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
        $stmt = $conn->prepare(" SELECT * FROM patrocinadores WHERE id=:id");
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
        $stmt = $conn->prepare(" SELECT * FROM patrocinadores ");

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