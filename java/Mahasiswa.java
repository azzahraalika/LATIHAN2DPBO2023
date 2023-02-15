/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/

//class mahasiswa adalah anak dari class human
class Mahasiswa extends Human{

    //atribut private fakultas dan prodi untuk di class human 
    private String fakultas;
    private String prodi;

    //KONSTRUKTOR
    Mahasiswa(){

    }

    //method untuk set fakultas
    public void setFakultas(String fakultas){
        this.fakultas = fakultas;
    }

    //method untuk get fakultas
    public String getFakultas(){
        return this.fakultas;
    }

    //method untuk set Program studi
    public void setProdi(String prodi){
        this.prodi = prodi;
    }

    //method untuk get program studi
    public String getProdi(){
        return this.prodi;
    }
}