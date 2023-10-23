<?php

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }
    


    

    // private $mhs =[
    //     [
    //         "nama" => "Iqbal Maulana Sidiq",
    //         "nrp" => "213040061",
    //         "email" => "iqbal.213040061@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Maulana Sidiq",
    //         "nrp" => "213040062",
    //         "email" => "iqbal.213040062@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Sidiq",
    //         "nrp" => "213040063",
    //         "email" => "iqbal.213040063@mail.unpas.ac.id",
    //         "jurusan" => "Teknik industri"
    //     ]
    // ];

    public function getAllMahasiswa(){
        // return $this->mhs;
        $this -> db -> query('SELECT * FROM ' . $this -> table);
        return $this -> db -> resultSet();
    }

    public function getMahasiswaById($id){
        $this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE id=:id');
        $this -> db -> bind('id', $id);
        return $this -> db -> single();
    }
        
    



}     
  