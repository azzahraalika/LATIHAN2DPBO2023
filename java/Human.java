/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/


//kelas human dimana ini adalah orangtua 
class Human{

    //atribut private yang ada di human itu ada nik, nama, dan jenis kelamin
    private String nik;
    private String nama;
    private String kelamin;

    //KONSTRUKTOR
    Human(){

    }

    //method untuk set nama
    public void setNama(String nama){
        this.nama = nama;
    }

    //methos untuk get nama
    public String getNama(){
        return this.nama;
    }

    //method untuk set NIK
    public void setNik(String nik){
        this.nik = nik;
    }

    //method untuk get NIK
    public String getNik(){
        return this.nik;
    }

    //method untuk  set Kelamin
    public void setKelamin(String kelamin){
        this.kelamin = kelamin;
    }

    //method untuk get kelamin
    public String getKelamin(){
        return this.kelamin;
    }
}