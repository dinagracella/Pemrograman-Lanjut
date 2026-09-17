# Ringkasan Materi Pemrograman Lanjut

Nama    : Dina Gracella Apnel Lengkong
NIM     : 10251002
Praktikum PL A ke-2

## Constructor

Constructor adalah method khusus yang otomatis dijalankan ketika sebuah objek dibuat. Dalam PHP, constructor ditulis menggunakan `__construct()` dan biasanya digunakan untuk memberikan nilai awal pada objek.

Alurnya:
1. Membuat objek menggunakan `new`.
2. `__construct()` otomatis dijalankan.
3. Parameter constructor disimpan ke property objek.
4. Objek siap digunakan.

Constructor juga dapat dibuat tanpa parameter untuk memberikan nilai awal yang sama pada setiap objek.

## Constructor dan Method Biasa

Constructor berbeda dengan method biasa.

- Constructor menggunakan `__construct()` dan otomatis dijalankan saat objek dibuat.
- Method biasa memiliki nama bebas dan harus dipanggil terlebih dahulu.
- Constructor digunakan untuk mempersiapkan kondisi awal objek.
- Method digunakan untuk menjalankan fungsi atau perilaku objek.

## Static Property dan Static Method

Static adalah property atau method yang dimiliki oleh class, bukan oleh objek tertentu.

Untuk mengakses static property atau static method digunakan `::` melalui nama class.

- Static property digunakan untuk menyimpan data yang dapat dibagikan oleh semua objek dalam satu class.
- Static method dapat dipanggil tanpa membuat objek.
- `self::` digunakan untuk mengakses property atau method static dari dalam class.
- `$this` digunakan untuk mengakses property atau method non-static dari objek.

Perbedaannya:
- `self` = class saat ini.
- `$this` = objek saat ini.

## Class Constant

Class constant adalah nilai tetap yang berada di dalam sebuah class dan tidak dapat diubah selama program berjalan.

Class constant dibuat menggunakan keyword `const` dan diakses menggunakan `::`.

Contohnya:
- `const` = membuat nilai tetap dalam class.
- `::` = mengakses constant.

## Method Chaining

Method chaining adalah teknik memanggil beberapa method secara berurutan dalam satu rangkaian kode.

Agar dapat melakukan method chaining, setiap method biasanya mengembalikan `$this`.

Kelebihan method chaining:
- Kode lebih ringkas.
- Kode lebih rapi.
- Kode lebih mudah dibaca.

## Objek sebagai Parameter dan Return Value

Objek dapat digunakan sebagai parameter maupun sebagai nilai kembalian atau return value dari sebuah method.

1. Objek sebagai Parameter  
   Method dapat menerima objek dari class tertentu sebagai parameter.

2. Objek sebagai Return Value  
   Method dapat mengembalikan sebuah objek untuk digunakan kembali.

Penggunaan objek sebagai parameter dan return value membuat beberapa class dapat berinteraksi dan bekerja sama.

## Constructor dengan Validasi

Constructor dapat digunakan untuk memvalidasi data sebelum objek dibuat.

Contoh validasi:
- NIM harus terdiri dari 8 digit angka.
- Nama mata kuliah tidak boleh kosong.
- Nilai harus berada pada rentang 0 - 100.

Jika data tidak valid, `throw` dapat digunakan untuk menghentikan pembuatan objek dan menampilkan error.

Dengan constructor dan validasi, objek hanya dapat dibuat menggunakan data yang sesuai dengan aturan.

## Destructor

Destructor adalah method khusus `__destruct()` yang dijalankan ketika sebuah objek sudah tidak digunakan atau akan dihancurkan.

Destructor biasanya digunakan untuk melakukan cleanup, seperti:
- Menutup file.
- Menutup koneksi database.

Perbedaannya:
- Constructor = dijalankan ketika objek dibuat.
- Destructor = dijalankan ketika objek dihancurkan.

Destructor umumnya tidak perlu dipanggil secara manual.

## Parameter Default dan Validasi Setter

Parameter default memungkinkan constructor memiliki nilai bawaan sehingga parameter boleh tidak diisi.

Setter digunakan untuk memasukkan atau mengubah data pada property. Validasi pada setter digunakan untuk memastikan data yang dimasukkan sesuai dengan aturan sebelum disimpan.

- Parameter default = nilai bawaan.
- Setter + validasi = menjaga data tetap valid.

## Static Member pada Pewarisan

Static property dan static method dapat diwariskan dari class parent ke class turunan.

Untuk mengaksesnya dapat digunakan:
- `self::` = merujuk ke class saat ini.
- `parent::` = merujuk ke class induk.

Static member juga dapat dibuat `private` agar hanya dapat diakses dari dalam class yang bersangkutan.

## Static Method sebagai Helper

Static method dapat digunakan sebagai helper untuk membuat fungsi sederhana yang tidak membutuhkan data dari objek.

Karena bersifat static, method dapat langsung dipanggil melalui nama class tanpa membuat objek.

Contoh penggunaannya:
- Mengecek format kode produk.
- Memvalidasi nama atau merek.
- Melakukan perhitungan sederhana.

Helper berarti fungsi bantuan, sedangkan static berarti dapat dipanggil tanpa membuat objek.

## Type Hinting, Interface, dan instanceof

Type hinting digunakan untuk memastikan parameter menerima tipe objek yang sesuai.

Interface berfungsi sebagai aturan atau kontrak yang harus diikuti oleh class yang mengimplementasikannya.

`instanceof` digunakan untuk mengecek tipe atau hubungan sebuah objek. Hasil pengecekan berupa `true` atau `false`.

- Type hinting = memastikan tipe yang diterima.
- Interface = membuat aturan untuk class.
- `instanceof` = mengecek tipe atau hubungan objek.
