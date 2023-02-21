<?php


// Saya [Azzahra Alika Putri Yudha] [2105899]
// mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
// Aamiin.


//class Human yang akan menjadi orangtua dari class Mahasiswa dan kakek dari class Siak
class Human{

    //terdapat 3 atribut yang di set private dan public 
    //yaitu atribut NIK, Nama, dan Jenis Kelamin

    private $nik = "";
    private $nama = "";
    private $kelamin = ""; 

    public function __construct($nik = "", $nama = "", $kelamin = ""){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->kelamin = $kelamin;
    }

    //DIBAWAH INI METHOD SETTER GETTER UNTUK ATRIBUT CLASS HUMAN

    public function setNik($nik){
        $this->nik = $nik;
    }

    public function getNik(){
        return $this->nik;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setKelamin($kelamin){
        $this->kelamin = $kelamin;
    }

    public function getKelamin(){
        return $this->kelamin;
    }

    public function __destruct(){
        
    }
}
?>