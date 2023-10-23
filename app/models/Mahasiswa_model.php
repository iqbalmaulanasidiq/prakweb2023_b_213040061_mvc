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
    
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa(nama , nrp, email, jurusan) VALUES
                  (:nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
        
    



}     
  