<?php
interface CRUD {
    public function create();
    public function update();
    public function delete();

    //Devuelve un solo registro
    public function read_by_id();
    //Devuelve todos los registros
    public function read_all();
    //Devuelve varios registros por columna
    public function read_by_column();
}


    

?>