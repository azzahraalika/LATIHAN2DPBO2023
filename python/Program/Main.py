# Saya [Azzahra Alika Putri Yudha] [2105899]
# mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
# Aamiin.


# import dan manggil class Human, Mahasiswa, dan Siak agar bisa memberikan inputan dan output
from Human import Human
from Mahasiswa import Mahasiswa
from Siak import Siak

# hardcode untuk data class Human
khuman = Human()
khuman.setNama("Azzahra Alika")
khuman.setNik("2105899")
khuman.setKelamin("P")

# meminta print output untuk class Human
print("== DATA HUMAN ==")
print("Nama           : " + khuman.getNama())
print("NIK            : " + khuman.getNik())
print("Kelamin        : " + khuman.getKelamin())
print("+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=")
print(" ")

# hardcode untuk data class Mahasiswa
mhs = Mahasiswa()
mhs.setNama("Azzahra Alika")
mhs.setNik("2105899")
mhs.setProdi("Ilmu Komputer")
mhs.setFakultas("FPMIPA")
mhs.setKelamin("P")

# meminta print output untuk class Mahasiswa
print("== DATA MAHASISWA ==")
print("Nama           : " + mhs.getNama())
print("NIM            : " + mhs.getNik())
print("Program Studi  : " + mhs.getProdi())
print("Fakultas       : " + mhs.getFakultas())
print("Kelamin        : " + mhs.getKelamin())
print("+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=")
print(" ")

# hardcode untuk data class Siak            
ksiak = Siak()
ksiak.setNama("Azzahra Alika")
ksiak.setNik("2105899")
ksiak.setProdi("Ilmu Komputer")
ksiak.setFakultas("FPMIPA")
ksiak.setUniv("Universitas Pendidikan Indonesia")
ksiak.setEmail("azzahraalika31@gmail.com")
ksiak.setKelamin("P")

# meminta print output untuk class Siak
print("== DATA SIVITAS AKADEMIK ==")
print("Nama           : " + ksiak.getNama())
print("NIM            : " + ksiak.getNik())
print("Program Studi  : " + ksiak.getProdi())
print("Fakultas       : " + ksiak.getFakultas())
print("Universitas    : " + ksiak.getUniv())
print("Email          : " + ksiak.getEmail())
print("Kelamin        : " + ksiak.getKelamin())
print("+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=")