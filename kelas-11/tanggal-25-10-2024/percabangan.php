<?php
// yang pertama kita belajar syntax percabangan miliknya php
// percabangan adalah perintah yang digunakan untuk memilih antara dua atau lebih
// percabangan di php ada dua jenis yaitu if else dan switch case
// if else adalah percabangan yang digunakan untuk memilih antara dua

// contoh syntax dari if else
// if (kondisi) {
//         // kode yang akan di eksekusi jika kondisi benar
//     } else {
//             // kode yang akan di eksekusi jika kondisi salah
//         }


        
// switch case adalah percabangan yang digunakan untuk memilih antara banyak
// contoh syntax dari switch case
// switch (kondisi) {
//     case nilai1:
    //         // kode yang akan di eksekusi jika kondisi bernilai nilai1
    //         break;
    //     case nilai2:
        //         // kode yang akan di eksekusi jika kondisi bernilai nilai2
        //         break;
        // }
        


// Sekarang kita masuk ke dalam contoh dalam dunia perkodingan sehari hari
// contoh pertama adalah membuat program yang dapat menentukan sebuah diskon melalui if else


$total_belanja = 15000;

if ($total_belanja > 10000) {
    echo "Anda Mendapatkan diskon 50%\n ";
} 
else {
    echo "Anda tidak mendapatkan diskon\n";
}


echo"<br>";

$umur = 13;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}


echo "<br>";

$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";






// contohh  kedua adalah membuat program yang dapat menentukan sebuah diskon melalui switch case
// $total_belanja1 = 15000;

// switch ($total_belanja1) {
//     case 5000:
//         echo "Anda Mendapatkan diskon 10%";
//         break;
//         case 10000:
//             echo "Anda Mendapatkan diskon 20%";
//             break;
//             case 15000:
//                 echo "Anda Mendapatkan diskon 30%";
//                 break;
//                 default:
//                 echo "Anda tidak mendapatkan diskon";
//                 }




?>