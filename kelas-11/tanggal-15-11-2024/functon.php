<?php
// Banyak fungsi build-in dari php yang sering kita gunakan, seperti print(), print_r(), unset(), dll.
// Selain fungsi-fungsi tersebut, kita juga dapat membuat fungsi sendiri sesuai kebutuhan.

// Fungsi adalah sekumpulan instruksi yang dibungkus dalam sebuah blok. Fungsi dapat digunakan ulang tanpa harus menulis ulang instruksi di dalamnya.
// Fungsi pada PHP dapat dibuat dengan kata kunci function, lalu diikuti dengan nama fungsinya.

// contoh :
function namaFungsi(){
    // instruksi di dalam fungsi
    }

// contohnya
function perkenalan(){
    echo "Assalamulaikum    , ";
    echo "Perkenalkan, nama saya Ardianta<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }

// memanggil function
perkenalan();

//---------------fungsi atau function dengan parameter---------------

// Supaya instruksi yang di dalam fungsi lebih dinamis, kita dapat menggunakan parameter untuk memasukkan sebuah nilai ke dalam fungsi. Nilai tersebut akan diolah di dalam fungsi.

// Misalkan, pada contoh fungsi yang tadi, tidak mungkin nama yang dicetak adalah ardianta saja dan salam yang dipakai tidak selalu assalamualaikum. Maka, kita dapat menambahkan parameter menjadi seperti ini:

echo "<br><br>---------FUNCTION DENGAN PARAMETER---------<br><br>";


function perkenalan1($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }
    
    perkenalan1("Muhardian", "Hi");
    
    echo "<hr>";
    
    $saya = "Indry";
    $ucapanSalam = "Selamat pagi";
    perkenalan1($saya, $ucapanSalam);



    //---------------fungsi atau function dengan parameter default---------------
echo "<br><br>---------FUNCTION DENGAN PARAMETER DEFAULT---------<br><br>";

// Nilai default dapat kita berikan di parameter. Nilai default berfungsi untuk mengisi nilai sebuah parameter, kalau parameter tersebut tidak diisi nilainya.

function perkenalan2($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }
    
    perkenalan2("Muhardian", "Hi");
    
    echo "<hr>";
    
    $saya = "Indry";
    $ucapanSalam = "Selamat pagi";
    perkenalan2($saya);




    //---------------fungsi atau function yang mengembalikan nilai---------------

//     Hasil pengolahan nilai dari fungsi mungkin saja kita butuhkan untuk pemrosesan berikutnya. Oleh karena itu, kita harus membuat fungsi yang dapat mengembalikan nilai.

// Pengembalian nilai dalam fungsi dapat menggunakan kata kunci return

echo "<br><br>---------FUNCTION YANG MENGEMBALIKAN NILAI---------<br><br>";


function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  echo "Umur saya adalah ". hitungUmur(1994, 2015) ." tahun";



  //---------------Memanggil fungsi dalam fungsi---------------

  // Fungsi yang sudah kita buat, dapat juga dipanggil di dalam fungsi lain.

echo "<br><br>---------FUNCTION YANG MEMANGGIL FUNCTION LAIN---------<br><br>";

function hitungUmur1($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  function perkenalan3($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    // memanggil fungsi lain
    echo "Saya berusia ". hitungUmur1(1994, 2015) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
  }
  

  perkenalan3("Ardianta");
  

  //---------------Fungsi atau function rekursif---------------

// Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya digunakan untuk menyelesaikan masalah sepeti faktorial, bilangan fibbonaci, pemrograman dinamis, dll.


function faktorial($angka) {
    if ($angka < 2) {
      return 1;
    } else {
    // memanggil dirinya sendiri
    return ($angka * faktorial($angka-1));
    }
  }
  
  // memanggil fungsi
  echo "faktorial 5 adalah " . faktorial(5);