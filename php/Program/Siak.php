<?php


// Saya [Azzahra Alika Putri Yudha] [2105899]
// mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
// Aamiin.


//class Siak dimana menjadi anak dari class Mahasiswa dan cucu dari class Human
//cara agar class Siak bisa mengakses atribut class Mahasiswa
class Siak extends Mahasiswa{

    //terdapat 2 atribut yang di set public dan private
    //yaitu atribut universitas dan email

    private $univ = "";
    private $email = "";

    public function __construct($univ = "", $email = ""){
        $this->univ = $univ;
        $this->email = $email;
    }

    //DIBAWAH INI METHOD SETTER GETTER ATRIBUT CLASS SIAK

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUniv($univ){
        $this->univ = $univ;
    }

    public function getUniv(){
        return $this->univ;
    }

    public function __destruct(){
        
    }
}
?>