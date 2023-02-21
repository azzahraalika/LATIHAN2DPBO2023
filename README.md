# LATIHAN2DPBO2023
Latihan 2 Desain Pemrograman Berorientasi Objek

## JANJI
Saya [Azzahra Alika Putri Yudha] [2105899]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.

## DESAIN PROGRAM
dilatihan ini mengimplementasikan multi level inheritance atau keturunan.

ada 3 class 
1. **class Human**
   dimana Human adalah orangtua dari Mahasiswa yang mempunyai 3 atribut yaitu nik, nama dan jenis kelamin
   dijadikan orangtua karna ada atribut di anaknya yg sama jadi human dijadikan orangtua dari mahasiswa
2. **class Mahasiswa**
   dimana Mahasiswa adalah orangtua dari Sivitas Akademik dan anak dari Human mempunyai 2 atribut private fakultas dan prodi
3. **class SivitasAkademik**
   dimana Sivitas akademik adalah anak dari Mahasiswa dan cucu dari Human dimana mempunyai 2 atribu private universitas dan email
   kenapa dijadikan cucu karna dia mencakup mahasiswa dan human
   
class Mahasiswa menjadi anak dari class Human karena terdapat atribut yang redundan dan bisa dijadikan atribut dari class Human. Sedangkan untuk class Sivitas Akademik menjadi cucu karena dia hanya memiliki 2 atribut yaitu email dan universitas yang dimana 2 atribut tersebut bergantung sama class Human dan Mahasiswa agar fungsi dari atributnya jelas. 

## ALUR PROGRAM
Alur program yang dibuat pada keempat bahasa sama, yaitu untuk masukkannya semua di hardcode. 
Pada file main akan memanggil 3 class yang ada dan ketiganya di input secara hardcode dan diminta untuk print outputnya. 
seperti hasil screenshot dibawah ini

![(1)](https://user-images.githubusercontent.com/101117829/220391104-3747b712-fde7-4bf6-b3d5-08acf98caf67.PNG)

Jadi bisa dilihat pada gambar diatas bahwa anak bisa akses atribut yang dimiliki oleh orangtua dan cucu pun bisa mengakses atribut yang dimiliki oleh orangtua dan nenek kakeknya tanpa harus deklarasi atribut di classnya.

## DIAGRAM UML
![latihan2UML](https://user-images.githubusercontent.com/101117829/220392112-f57f0c11-d14c-48a1-b2f8-56ebcfb81223.PNG)

Maksud dari panah yang menuju keatas adalah class yang berada di paling bawah itu bisa akses atribut yang dimiliki oleh class diatasnya sedangkan class yang berada diatas atau orangtua itu tidak bisa akses atribut class yang ada dibawahnya atau anak ataupun cucunya. 
