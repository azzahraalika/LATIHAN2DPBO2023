/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/


#include <bits/stdc++.h>

//class Mahasiswa dimana menjadi anak dari class Human dan orangtua dari class Siak

using namespace std;

//memanggil file Human.cpp karena Mahasiswa nantinya bisa mengakses atribut 
//yang ada pada orangtua atau class Human
#include "Human.cpp"

//cara agar class Mahasiswa dapat mengakses atribut class Human
class Mahasiswa : public Human{

    //terdapat 2 atribut private dan public yang ada pada class Mahasiswa
    //yaitu atribu Program Studi atau prodi dan fakultas

    private:
    string prodi;
    string fakultas;

    public:
    Mahasiswa(){
        
    }

    Mahasiswa(string prodi, string fakultas){
        this->prodi = prodi;
        this->fakultas = fakultas;
    }

    //DIBAWAH INI ADALAH SETTER GETTER ATRIBUT PADA CLASS MAHASISWA
    
    void setProdi(string prodi){
        this->prodi = prodi;
    }

    string getProdi(){
        return this->prodi;
    }

    void setFakultas(string fakultas){
        this->fakultas = fakultas;
    }

    string getFakultas(){
        return this->fakultas;
    }
};

