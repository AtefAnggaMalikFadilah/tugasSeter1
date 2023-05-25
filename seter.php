<?php

    class Manusia{
        
        public $nama;
        private $umur;
        protected $jk;

        // method untuk setter = menyimpan data
        public function setNama($data){
            $this->nama = $data;
        }

        public function setUmur($data){
            $this->umur = $data;
        }

        public function setJenisK($data){
            $this->jk = $data;
        }

        // method untuk getter = mengabil data dari method setter
        public function getNama(){
            return $this->nama;
        }

        public function getUmur(){
            return $this->umur;
        }

        public function getJenisK(){
            return $this->jk;
        }

    }

    $manusia1 = new Manusia;
    $manusia1->setNama("Atef Angga Malik Fadilah");
    $manusia1->setUmur(16);
    $manusia1->setJenisK("Pria");

    // menampilkan isi dari setter yang diambil menggunakan getter
    echo "Nama saya adalah " . $manusia1->getNama();
    echo "<br>";
    echo "Umur saya adalah " . $manusia1->getUmur();
    echo "<br>";
    echo "dan jenis kelamin saya " . $manusia1->getJenisK();
?>