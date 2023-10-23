<?php

class Mahasiswa_model{

    private $dbh; //database handler
    private $stmt; //statement

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
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
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}     
  