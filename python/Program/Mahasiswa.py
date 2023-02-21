# Saya [Azzahra Alika Putri Yudha] [2105899]
# mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
# Aamiin.


# class Mahasiswa adalah orangtua class Siak dan anak dari class Human
# agar bisa mengakses atribut Human maka harus import dulu
from Human import Human

# agar class Mahasiswa bisa memakai atribut class Human
class Mahasiswa(Human):

    # terdapat 2 atribut yang di set private dan public 
    # yaitu prodi dan fakultas

    __prodi = ""
    __fakultas = ""

    def __init__(self, prodi = "", fakultas = ""):
        self.__prodi = prodi
        self.__fakultas = fakultas

    # DIBAWAH INI METHOD SETTER GETTER CLASS MAHASISWA

    def getProdi(self):
        return self.__prodi

    def setProdi(self, prodi):
        self.__prodi = prodi

    def getFakultas(self):
        return self.__fakultas

    def setFakultas(self, fakultas):
        self.__fakultas = fakultas
