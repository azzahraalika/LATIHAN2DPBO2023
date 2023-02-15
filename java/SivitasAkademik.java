/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/

//class sivitas akademik adalah anak dari mahasiswa dan cucu dari human
class SivitasAkademik extends Mahasiswa{

    //atribut private yang ada di sivitas akademik
    private String univ;
    private String email;

    //KONSTRUKTOR
    SivitasAkademik(){

    }

    //method untuk set universitas
    public void setUniv(String univ){
        this.univ = univ;
    }

    //method untuk get universitas
    public String getUniv(){
        return this.univ;
    }

    //method untuk set email
    public void setEmail(String email){
        this.email = email;
    }

    //method untuk get email
    public String getEmail(){
        return this.email;
    }
}