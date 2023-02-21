/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/


#include <bits/stdc++.h>

//class Siak akan menjadi anak dari class Mahasiswa dan cucu dari class Human

using namespace std;

//memanggil file Mahasiswa.cpp karena class Siak bisa mengakses atribut 
//yang ada pada orangtuanya atau class Mahasiswa
#include "Mahasiswa.cpp"

//cara agar Siak bisa mengakses atribut Mahasiswa 
class Siak : public Mahasiswa{

    //Terdapat 2 atribut yang di set public dan private pada class Siak
    //yaitu ada atribut universitas dan email 

    private:
    string univ;
    string email;

    public:
    Siak(){
        
    }

    Siak(string univ, string email){
        this->univ = univ;
        this->email = email;
    }

    //DIBAWAH INI ADALAH SETTER GETTER YANG ADA PADA CLASS SIAK
    
    void setUniv(string univ){
        this->univ = univ;
    }

    string getUniv(){
        return this->univ;
    }

    void setEmail(string email){
        this->email = email;
    }

    string getEmail(){
        return this->email;
    }
};
