# PHP
## **Pengertian PHP**
PHP (Preprocesor Hypertext) adalah bahasa scripting yang menyatu dengan HTML dan dijalankan pada server-side. Artinya semua sintaks yang diberikan akan sepenuhnya dijalankan oleh server, sedangkan yang dikirimkan ke browser hanya hasilnya saja berupa HTML.

## **Perbedaan PHP dan HMTL**
Kalau php itu hanya bisa dijalankan lewat server lokal dengan mengaktifkan **XAMPP** dan menjalankanya lewat server localhost , namun pada **HTML** bisa dijalankan secara otomatis apabila kita klik filenya.

## **Cara Menyimpan File PHP**
Cara menyimpannya yaitu kita tinggal save dengan format dengan format **.php** , nah untuk menyimpanya harus masuk ke direktori **xampp** dan masuk ke folder **htdocs** save file kalian disitu.

## **Cara Menjalankan File PHP**
Cara menjalankanya yaitu buka **XAMPP** lalu start apache kemudian ketik di browser kalian **localhost/htdocs/namafile.php**

## **Fungsi PHP**
Meskipun bukan bahasa wajib pemrograman web **PHP** bisa menjadi script sampingan untuk menghubungkan beberapa laman **HTML** dan beberapa fungsi lainya.
_____________________________________________________________________________________________

## **PHP Tipe Data**
Dalam bahasa pemrograman yang lain, ada bermacam-macam tipe data, misalnya integer(bilangan bulat), float (bilangan pecahan), char(karakter angka dan huruf), string(kumpulan huruf atau kata), dan berbagai tipe lainnya. 
PHP mengenal dua tipe data sederhana; numerik dan literal/string. Ditambah dengan dua tipe data yang tidak sederhana, yaitu array dan object. Tipe Numerik dapat menyimpan bilangan bulat. PHP mampu menyimpan data bilangan bulat dengan jangkauan  dari  -2  milyar sampai+2 milyar. Contoh bilangan bulat: 3, 7, 20. 
Selain itu, tipe numerik juga digunakan untuk menyimpan bilangan pecahan. Sedangkan tipe literal/string dapat digunakan untuk menyimpan data berupa kumpulan huruf, kata, dan angka. Tipe boolean, yang dikenal dalam bahasa program yang lainnya, tidak ada dalam  PHP. 
Untuk menguji benar salah (true/false), kita menggunakan tipe data yang tersedia. FALSE  dapat  digantikan  oleh integer 0, atau string kosong, yaitu "". Selain nilai itu, semua dianggap TRUE.

## **PHP Variabel**
Variabel  digunakan  sebagai  tempat  penyimpanan  data  sementara.  Data  yang  disimpan dalam   variabel   akan   hilang   setelah   program   selesai   dieksekusi. Untuk penyimpanan data yang  permanen, kita dapat menyimpan data di database atau di disk. 
Untuk  membuat  suatu  variabel  dalam  PHP,  digunakan  tanda  string($)  sebagai pendeklarasian  awal. Aturan – aturan yang dapat digunakan untuk menuliskan variabel adalah sebagai berikut : 
1. Pendeklarasian variabel harus ditandai dengan string ($). 
2. Variabel dapat menggunakan huruf kecil maupun huruf besar atau perpaduan keduanya. 
3. Penulisan awal variabel tidak boleh menggunakan angka. 
4. Apabila ingin menggunakan angka sebagai variabelnya, maka dapat menggunakan tanda underscore(_) untuk memulainya.
5. Nama variabel yang terdiri lebih dari satu kata, dapat dipisahkan dengan underscore (_).

## **Jenis Variabel:**
1. **Variabel Biasa**
Standar penulisan variabel adalah dengan menggunakan tanda ($) yang kemudian diikuti dengan nama variabel kemudian isi dari variabel. Dari variabel – variabel tersebut dapat dibaca berulang – ulang kali dalam satu halaman web. 
 
 
2. **Variabel dalam Kelompok** 
Bentuk variabel ini biasanya digunakan untuk mendeklarasikan data apabila menggunakan fungsi dalam PHP, isi dari data yang ada pada variabel tersebut tidak ditampilkan apabila melakukan pemanggilan fungsi yang mendeklarasikan variabel tersebut. Pemanggilan variabel di dalam sebuah fungsi menggunakan perintah global. Sedangkan untuk melakukan pemanggilan fungsi, cukup dengan memanggil nama fungsinya. 
 
3. **Variabel antar Halaman** 
Bentuk dari variabel ini biasanya digunakan untuk mengantarkan data yang ada dari setiap variabel ke dalam halaman lain. Bentuk – bentuk variabel ini biasanya berasal dari data seperti form. 

________________________________________________________________________________________

### **Latihan Modul 1**
#### Latihan 1
Latihan 1 mempelajari tentang bagaimana caranya memunculkan kalimat dengan menggunakan syntax **echo**.
![Alt Text](https://github.com/adam033/PHP/blob/master/1.JPG)

#### Latihan 2
Latihan 2 mempelajari tentang bagaimana cara print kalimat dengan menggunakan syntax **echo** dengan gabungan pada script **HMTL**.
![Alt Text](https://github.com/adam033/PHP/blob/master/2.JPG)

#### Latihan 3
Latihan 3 mempelajari tentang cara membuat variabel dengan syntax **$** dan memunculkanya dengan syntax **echo**.
![Alt Text](https://github.com/adam033/PHP/blob/master/4.JPG)

#### Latihan 4
Latihan 4 mempelajari tentang cara membuat variabel kelompok dengan nama syntax **function** dengan nama kelompok variabel **tampil_nama()** fungsi daripada syntax **global** adalah menyimpan dan memunculkan isi dari variable nama dan apabila dihapus maka akan terjadi error yaitu variabel nama tidak ditemukan /**undefined**.
![Alt Text](https://github.com/adam033/PHP/blob/master/5.JPG)

#### Latihan 5
Latihan 5 mempelajari tentang cara membuat variabel penghubung dengan cara membuat form login dengan menggabungkan kedua bahasa pemrograman **CSS** , **PHP** , **HMTL**.
![Alt Text](https://github.com/adam033/PHP/blob/master/6.JPG)
#### Hasil Latihan 5
![Alt Text](https://github.com/adam033/PHP/blob/master/6.1.JPG)

________________________________________________________________________________________

## **Operator Pada PHP**
Dalam bahasa pemrograman secara umum, operator digunakan untuk memanipulasi atau melakukan proses perhitungan pada suatu nilai. Operator yang akan kita pelajari adalah operator **aritmatik**, **perbandingan**, **gabungan aritmatik dan assignment**, serta operator **logika**. 

#### Operator Aritmatika
Digunakan untuk operasi dasar pada ilmu **Matematika**.
1. |+ = Menjumlahkan kedua bilangan/variabel.
2. |- = Mengurangkan kedua bilangan/variabel.
3. |* = Mengalikan kedua bilangan/variabel.
4. |/ = Menmbagi kedua bilangan/variabel.

#### Operator Perbandingan
Digunakan untuk menguji hubungan antara **nilai atau variabel**. Operator ini digunakan dalam suatu statement bersyarat yang selalu menghasilkan nilai **TRUE** atau **FALSE**.
1. |**==** : Sama dengan.
2. |**!=** : Tidak Sama Dengan.
3. |**<**  : Lebih Kecil Dari.
4. |**>**  : Lebih Besar Dari.
5. |**<=** : Lebih Kecil Dari Sama dengan.
6. |**>=** : Lebih Besar Dari Sama dengan.

#### Gabungan Operator Aritmatik dan Assignment 
Operator **aritmatik** merupakan operasi untuk perhitungan **matematika**, sedangkan yang dimaksud dengan operator **assignment** adalah operator samadengan **(=)**.
1. |+= : Menjumlahkan kedua bilangan/variabel kemudian menambahkan nilai hasil operasi ke variable yang ditentukan.
2. |-= : Mengurangkan kedua bilangan/variabel kemudian menambahkan nilai hasil operasi ke variable yang ditentukan.
3. |*= : Mengalikan kedua bilangan/variabel kemudian menambahkan nilai hasil operasi ke variable yang ditentukan.
4. |/= : Menmbagi kedua bilangan/variabel kemudian menambahkan nilai hasil operasi ke variable yang ditentukan.

#### POSTFIX/PREFIX and DECREMENT/INCREMENT
1. Operator **Postfix** : yaitu bekerja dengan cara menampilkan variabel awal terlebih dahulu dan mengoperasikan operator variabel hasil operasi.
2. Operator **Prefix** : yaitu bekerja dengan cara menampilkan variabel yang telah dioperasikan dan menjalankan operato terlebih dahulu dan menampilkan variabel hasil operasi.

#### Operator Logika
1. **&&/AND** : Benar jika keduanya benar.
2. **||/OR**  :Benar jika salah satu atau keduanya benar 
3. **XOR**    :Benar jika salah satunya benar, namun akan bernilai salah jika keduanya benar.
4. **!/NOT**  :Salah atau kebalikanya.

#### Array
 **Array** merupakan tipe data terstruktur yang berguna untuk menyimpan sejumlah data yang bertipe sama. Bagian yang menyusun array disebut elemen array. Masing-masing elemen array dapat diakses melalui index array. **Index array** dapat berupa biangan **integer** atau **string**. 

_________________________________________________________________________________________
 
### **Latihan Modul 2**
#### Latihan 1
Latihan1 mempelajari tentang cara membuat **array** dan cara kita memanggilnya sesuai dengan data yang kita inginkan dan cara mengisi/input data pada **array** yang telah kita buat.
![Alt Text](https://github.com/adam033/PHP/blob/master/1.1.JPG)

#### Latihan 2
Latihan2 mempelajari tentang cara menambahkan nilai pada **array** dan memanggil array tersebut untuk kita tampilkan menggunakan syntax **echo**.
![Alt Text](https://github.com/adam033/PHP/blob/master/1.2.JPG)

#### Latihan 3
Latihan3 mempelajari cara membuat variabel **array** warna dan menampilkanya dengan method **foreach** kemudian ditampilkan dengan syntax **echo** dan output berupa font berwarna sesuai dengan **array**.
![Alt Text](https://github.com/adam033/PHP/blob/master/1.3.JPG)








