<?php

require_once "crud.php";
require_once "config-db.php";

class usuario implements CRUD{
    //Atributo es una columna de la tabla en la base de datos

    public $Id;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Pass;

    public function create(){
        //Establecemos la conexion a la base de datos
        $conexion = new ConfigDb();
        $conexion->conectar();

        //Emplearemos una excepcion en caso de error
        try{
        $conn = $conexion->get_conn();

        //Prepararemos a MySQL para recibir los parametros
        $stmt = $conn->prepare("INSERT INTO usuario (Nombre, Apellido, Correo, Pass)
                                    VALUES (:Nombre, :Apellido, :Correo, :Pass)");

        //Le daremos valores a los atributos de la clase
        $stmt->bindparam(":Nombre", $this -> Nombre);
        $stmt->bindparam(":Apellido", $this -> Apellido);
        $stmt->bindparam(":Correo", $this -> Correo);
        $stmt->bindparam(":Pass", $this -> Pass);
        //Haremos que ejecute la linea de codigo con los parametros
        $resultado = $stmt->execute();
        }catch(PDOException $e){
            echo "Error:" . $e->getMessage();
            $resultado=false;
        }finally{
            $conn=null;
            //Terminamos la conexion
            $conexion->desconectar();
        }

        if($resultado){
            return 1;
        }else{
            return 0;
        }
    }

    public function update(){
        //Realizamos la conexion a la base de datos
        $conexion = new ConfigDb();
        $conexion->conectar();

        //Emplearemos una exepcion en caso de errores
        try{
            $conn=$conexion->get_conn();

            //Preparamos a MySQL para recibir los parametros
            $stmt=$conn->prepare("UPDATE usuario 
                                    SET Nombre=:Nombre, Apellido=:Apellido, Correo=:Correo, Pass=:Pass
                                        WHERE Id=:Id");

            //Asignaremos los valores a los atributos
            $stmt->bindparam(":Id", $this -> Id);
            $stmt->bindparam(":Nombre", $this -> Nombre);
            $stmt->bindparam(":Apellido", $this -> Apellido);
            $stmt->bindparam(":Correo", $this -> Correo);
            $stmt->bindparam(":Pass", $this -> Pass);
                
            //Ejecutaremos la sentencia
            $resultado=$stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            $resultado=false;
        }finally{
            $conn=null;
            $conexion->desconectar();
        }
        if($resultado){
            return 1;
        }else{
            return 0;
        }
        

    }

    public function delete(){
        //Establecemos conexion con la base de datos
        $conexion = new ConfigDb();
        $conexion->conectar();

        try{
        $conn = $conexion->get_conn();
        
        //Preparamos la sentencia de MySQL

        $stmt = $conn->prepare("DELETE FROM usuario WHERE Id=:Id");

        //Asignamos los valores a los atributos
        $stmt->bindparam(':Id', $this-> Id);

        //Ejecutamos la sentencia
        $resultado=$stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            $resultado=false;
        }finally{
            $conn=null;
            $conexion->desconectar();
        }
        if($resultado){
            return 1;
        }else{
            return 0;
        }
    }

    public function read_by_id(){
        //Establecemos la conexion con la base de datos
        $conexion = new ConfigDb();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        //Preparamos la sentencia MySQL
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE Id = :Id");
        $stmt->bindParam(':Id' , $this->Id);
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        //EJecuatemos la sentencia 
        $stmt->execute();
        $conn=null;
        $conexion->desconectar();

        return $stmt->fetchAll();
    }

    public function read_by_column(){}

    public function login()
    {
        $conexion = new ConfigDb();
        $conexion->conectar();

        $conn = $conexion->get_conn();

        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE correo=:correo AND Pass=:Pass");

        $stmt->bindParam(':correo', $this->correo);
        $stmt->bindParam(':Pass', $this->Pass);

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        //terminar conexion
        $conexion->desconectar();

        return $stmt->fetchAll();
    }

    public function read_all(){
        $conexion = new ConfigDb();
        $conexion->conectar();
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("SELECT * FROM usuario WHERE Estado = 'Activo' ");

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();
        $conn = null;
        $conexion->desconectar();

        return $stmt->fetchAll();
    }
};
?>