/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/


#include <bits/stdc++.h>

//memanggil file Siak.cpp agar bisa memberi inputan dan ngeprint output

//tapi ya bang aku bingung kenapa manggilnya cuman si file cucu aja, aku coba tiga2nya dipanggil 
//kemaren trus error gt loh (ngikutin yg ada di ppt ibu) xixi
#include "Siak.cpp"

using namespace std;

int main(){

    //manggil class Human, Mahasiswa dan Siak untuk inputan dan output
    Human hhuman;
    Mahasiswa mhs;
    Siak ssiak;

    //hardcode untuk class Human
    hhuman.setNama("Azzahra Alika");
    hhuman.setNik("2105899");
    hhuman.setKelamin("P");

    //minta print output data Human yang udah di hardcode
    cout << "== DATA HUMAN ==" << endl;
    cout << "Nama           : " << hhuman.getNama() << endl;
    cout << "NIK            : " << hhuman.getNik() << endl;
    cout << "Jenis Kelamin  : " << hhuman.getKelamin() << endl;
    cout << "+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=" << endl;
    cout << '\n';

    //hardcode untuk class Mahasiswa
    mhs.setNama("Azzahra Alika");
    mhs.setNik("2105899");
    mhs.setKelamin("P");
    mhs.setFakultas("FPMIPA");
    mhs.setProdi("IlmuKomputer");

    //minta print output data Mahasiswa yang udah di hardcode 
    cout << "== DATA MAHASISWA ==" << endl;
    cout << "Nama           : " << mhs.getNama() << endl;
    cout << "NIM            : " << mhs.getNik() << endl;
    cout << "Program Studi  : " << mhs.getProdi() << endl;
    cout << "Fakultas       : " << mhs.getFakultas() << endl;
    cout << "Jenis Kelamin  : " << mhs.getKelamin() << endl;
    cout << "+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=" << endl;
    cout << '\n';

    //hardcode untuk class Siak
    ssiak.setNama("Azzahra Alika");
    ssiak.setNik("2105899");
    ssiak.setKelamin("P");
    ssiak.setFakultas("FPMIPA");
    ssiak.setProdi("IlmuKomputer");
    ssiak.setUniv("Universitas Pendidikan Indonesia");
    ssiak.setEmail("azzahraalika31@upi.edu");

    //minta print output data Siak yang udah di hardcode
    cout << "== DATA SIVITAS AKADEMIK ==" << endl;
    cout << "Nama           : " << ssiak.getNama() << endl;
    cout << "NIM            : " << ssiak.getNik() << endl;
    cout << "Program Studi  : " << ssiak.getProdi() << endl;
    cout << "Fakultas       : " << ssiak.getFakultas() << endl;
    cout << "Universitas    : " << ssiak.getUniv() << endl;
    cout << "Email          : " << ssiak.getEmail() << endl;
    cout << "Jenis Kelamin  : " << ssiak.getKelamin() << endl;
    cout << "+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=" << endl;
}