<?php

require_once "crud.php";
require_once "config-db.php";

class Clientes implements CRUD{
    //atributo = columna tabla Autor

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $foto;
    public $pass;
    

    public function create(){
        //Crear conexion
        $conexion = new ConfigDb();
        $conexion->conectar();
       // try{
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("INSERT INTO clientes (nombre,apellido,telefono,foto,email, pass)
        VALUES ( :nombre, :apellido,  :telefono, :foto, :email, :pass)");
       
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':telefono', $this->telefono);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);

        $result=$stmt->execute();

        $conexion->desconectar();
        if($result){
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
        $stmt = $conn->prepare("UPDATE clientes SET nombre=:nombre,apellido=:apellido,telefono=:telefono,foto=:foto, email=:email, pass=:pass WHERE id=:id");
       
      
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':telefono', $this->telefono);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->bindParam(':id', $this->id);
        
        $result=$stmt->execute();

        //terminar conexion
        $conexion->desconectar();

        if($result){
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
        $stmt = $conn->prepare("DELETE FROM clientes WHERE id=:id");
        $stmt->bindParam(':id', $this->id);
        $result=$stmt->execute();

        $conexion->desconectar();
        if($result){
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
        $stmt = $conn->prepare(" SELECT * FROM clientes WHERE id=:id");
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
        $stmt = $conn->prepare(" SELECT * FROM clientes ");

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }
    
    //devuelve todos los registros
    public function read_by_column(){
       
    }


    public function acceso(){ 
      
        $conexion = new ConfigDB();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare(" SELECT * FROM clientes WHERE email=:email AND pass=:pass 
        ");
        $stmt->bindParam(':email', $this->email); 
        $stmt->bindParam(':pass', $this->pass); 
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();

       
    } 

}

?>