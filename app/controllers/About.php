<?php

    class About{
        public function index($nama = 'Iqbal', $pekerjaan = 'Mahasiswa'){
           echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
        }
        public function page(){
            echo 'about/page';
        }
    }