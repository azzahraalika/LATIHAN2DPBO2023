<?php


// Saya [Azzahra Alika Putri Yudha] [2105899]
// mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
// Aamiin.


//class Mahasiswa dimana menjadi anak dari class Human dan orangtua dari class Siak
//cara agar class Mahasiswa bisa mengakses atribut class Human
class Mahasiswa extends Human{

    //terdapat 2 atribut yang di set private dan public 
    //yaitu atribut prodi dan fakultas

    private $prodi = "";
    private $fakultas = "";

    public function __construct($prodi = "", $fakultas = ""){
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

    //DIBAWAH INI METHOD SETTER GETTER UNTUK ATRIBUT CLASS MAHASISWA

    public function setFakultas($fakultas){
        $this->fakultas = $fakultas;
    }

    public function getFakultas(){
        return $this->fakultas;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function __destruct(){
        
    }
}
?>