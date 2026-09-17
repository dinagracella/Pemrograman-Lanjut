# Rangkuman Materi Pemrograman Berorientasi Object (PBO)

Nama    : Dina Gracella Apnel Lengkong
NIM     : 10251002
Praktikum PL A ke-1

## Pengertian PBO
Pemrograman Berorientasi Objek (PBO) atau Object-Oriented Programming (OOP) adalah cara membuat program dengan konsep object. Object merupakan sesuatu yang memiliki data dan dapat melakukan suatu tindakan. Data atau ciri-ciri objek disebut properti, sedangkan tindakan yang dapat dilakukan object disebut method. 

Contohnya seorang mahasiswa memiliki nama dan NIM sebagai properti, serta dapat melakukan kegiatan belajar sebagai method.

### Prinsip Dasar 
PBO atau OOP memiliki 3 prinsip dasar, yaitu:
1. Encapsulation, yaitu menggabungkan data dan fungsi dalam satu tempat, serta melindungi data tertentu agar tidak dapat diakses sembarangan.
2. Inheritance, yaitu kemampuan sebuah class untuk mewarisi property dan method dari class lainnya.
3. Polymorphism, yaitu kondisi ketika perintah yang sama dapat menghasilkan perilaku yang berbeda tergantung pada objeknya.

## Mengapa Menggunakan OOP
Pemrograman prosedural biasanya menggunakan urutan instruksi dan kumpulan function. Cara ini cocok untuk program sederhana, tetapi dapat menjadi sulit dikelola ketika program semakin besar dan kompleks.

Beberapa masalah pada pemrograman prosedural adalah:
- Banyak function membuat program lebih sulit dikelola.
- Perubahan pada satu bagian dapat memengaruhi bagian lainnya.
- Kode lebih sulit digunakan kembali.
- Program lebih sulit dibagi dan dikelola ketika dikerjakan oleh banyak programmer.

OOP mengatasi masalah tersebut dengan membagi program menjadi beberapa objek yang memiliki tugas dan tanggung jawab masing-masing.

## Kelebihan dan Kekurangan OOP
Kelebihan OOP antara lain:
1. Program menjadi lebih rapi.
2. Program lebih mudah dikembangkan.
3. Lebih mudah dikerjakan dalam tim.
4. Class yang sudah dibuat dapat digunakan kembali.

Namun, OOP juga mmeiliki beberapa kekurangan
1. Membutuhkan perencanaan.
2. Lebih sulit dipahami oleh pemula.
3. Dapat menjadi terlalu rumit untuk program sederhana.

## OOP dan Pemrograman Prosedural

Pemrograman prosedural cocok digunakan ketika:

- Program masih sederhana.
- Program tidak terlalu besar.
- Hanya membutuhkan beberapa function.
- Tidak membutuhkan struktur yang kompleks.

Sedangkan OOP lebih cocok ketika:

- Program cukup besar dan kompleks.
- Memiliki banyak data dan fitur.
- Program akan terus dikembangkan.
- Dikerjakan oleh banyak programmer dalam satu tim.

## Class dan Objek
Class adalah cetakan atau blueprint yang digunakan untuk membuat objek. Class menentukan data apa yang dimiliki object dan tindakan apa yang dapat dilakukan object. Sedangkan object adalah hasil nyata atau implementasi dari sebuah class.

Contohnya, `Mahasiswa` dapat menjadi sebuah class. Dari class tersebut dapat dibuat beberapa object mahasiswa dengan data yang berbeda.

## Property dan Method

Property adalah data atau ciri-ciri yang dimiliki oleh sebuah object. Property biasanya berupa variabel yang berada di dalam class.

Method adalah tindakan atau perilaku yang dapat dilakukan oleh object. Method biasanya berupa function yang berada di dalam class.

Contohnya:

- Property: nama, NIM, dan jurusan.
- Method: belajar(), makan(), dan tidur().

Access modifier `public` digunakan agar property atau method dapat diakses secara bebas, termasuk dari luar class.

## Cara Mengakses Property

Dalam PHP, property pada object dapat diakses menggunakan operator `->`.

Contoh:

Kode :

```php
<?php

class Mahasiswa {
    public $nama;
    public $nim;
}

$mahasiswa = new Mahasiswa();

$mahasiswa->nama = "Dina";
$mahasiswa->nim = "10251002";

echo $mahasiswa->nama;
echo $mahasiswa->nim;

?>
```

Output :

```text
Dina
10251002
```

Pada kode tersebut, `$mahasiswa->nama` dan `$mahasiswa->nim` digunakan untuk mengakses property yang dimiliki oleh object `$mahasiswa`.
