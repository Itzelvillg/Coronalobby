<?php

    interface CRUD {
        //Funcion para crear registros
        public function create();

        //Funcion para actualizar registros
        public function update();

        //FUncion para borrar registros 
        public function delete();

        //Funcion para leer un registro por id
        public function read_by_id();

        //Funcion para leer un registro por columnas
        public function read_by_column();

        //Funcion para leer todos los registros 
        public function read_all();
    };
?>