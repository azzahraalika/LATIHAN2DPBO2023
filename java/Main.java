/*
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/


class Main{
    public static void main(String args[]){
        
        //method 1 == manggil tiap class ke main
        Human human;
        Mahasiswa mahasiswa;
        SivitasAkademik siak;

        //method 2 == manggil class Human untuk masukkan 
        human = new Human();
        human.setNama("Azzahra Alika");
        human.setNik("2105899");
        human.setKelamin("P");

        //method 3 == print data human
        System.out.println("== DATA HUMAN ==");
        System.out.println("Nama           : " + human.getNama());
        System.out.println("NIK            : " + human.getNik());
        System.out.println("Jenis Kelamin  : " + human.getKelamin());

        //method 4 == manggil class Mahasiswa untuk masukkan dan ditambah atributnya si Human sebagai orangtua
        mahasiswa = new Mahasiswa();
        mahasiswa.setNama("Azzahra Alika");
        mahasiswa.setNik("2105899");
        mahasiswa.setKelamin("P");
        mahasiswa.setFakultas("FPMIPA");
        mahasiswa.setProdi("IlmuKomputer");

        //method 5 == print data mahasiswa
        System.out.println("== DATA MAHASISWA ==");
        System.out.println("Nama           : " + mahasiswa.getNama());
        System.out.println("NIK            : " + mahasiswa.getNik());
        System.out.println("Program Studi  : " + mahasiswa.getProdi());
        System.out.println("Fakultas       : " + mahasiswa.getFakultas());
        System.out.println("Jenis Kelamin  : " + mahasiswa.getKelamin());

        //method 6 == memanggil class SivitasAkademik untuk masukkan dan ditambah atributnya Human dan Mahasiswa
        siak = new SivitasAkademik();
        siak.setNama("Azzahra Alika");
        siak.setNik("2105899");
        siak.setKelamin("P");
        siak.setFakultas("FPMIPA");
        siak.setProdi("IlmuKomputer");
        siak.setUniv("Universitas Pendidikan Indonesia");
        siak.setEmail("azzahraalika31@upi.edu");

        //method 7 == print data sivitas akademik
        System.out.println("== DATA SIVITAS AKADEMIK ==");
        System.out.println("Nama           : " + siak.getNama());
        System.out.println("NIK            : " + siak.getNik());
        System.out.println("Program Studi  : " + siak.getProdi());
        System.out.println("Fakultas       : " + siak.getFakultas());
        System.out.println("Universitas    : " + siak.getUniv());
        System.out.println("Email          : " + siak.getEmail());
        System.out.println("Jenis Kelamin  : " + siak.getKelamin());

    }
}