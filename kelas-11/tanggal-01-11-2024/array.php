<?php
// Array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks.yang dimana Indeks digunakan untuk mengakses nilai array.
// Indeks array selalu dimulai dari nol (0).


// nahh mari kita coba untuk membuat array 
// membuat array kosong
$hobi = [];

// membuat array sekaligus mengisinya
$nama = ["Rahmad", "Rifqi", "Rizki"];
$umur = [17,16,18];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";





//Di Array juga dapat berisi nilai apapun, termasuk string, integer, float, boolean
$orang1 = ["Asep",17,165.5,true];

// Sekarang kita akan menampilkan array
echo $orang1[0]."<br>";
echo $orang1[1]."<br>";
echo $orang1[2]."<br>";
echo $orang1[3]."<br>";

echo "---------------Looping FOR---------------<br><br>";

// Tapi cara ini kurang efektif, karena kita mencetak satu per satu. Nanti kalau datanya ada 1000, berarti harus ngetik perintah echo sebanyak 1000.
// TRUS GIMANA CARANYA??

// yaitu menggunakan Perulangan atau looping
// menggunakan perulangan for
for($i=0; $i < count($orang1); $i++){
    echo $orang1[$i]."<br>";
}



echo "---------------Looping ForEach---------------<br><br>";

// Kita bisa menggunakan fungsi count() untuk menghitung banyaknya isi array.
// fungsi count ini adalah mmilik php atau default untuk menghitung banyaknya jumlah array

// selain menggunakan for juga kita bisa menggunakan while dan  foreach
// menampilkan isi array dengan perulangan foreach
$nama = ["Rahmad", "Rifqi", "Rizki"];

foreach($nama as $isi){
    echo $isi."<br>";
}


echo "---------------Looping WHILE---------------<br><br>";
// menampilkan isi array dengan perulangan while
$nama1 = ["asep", "kosep", "pasep"];

$i = 0;
while($i < count($nama1)){
    echo $nama1[$i]."<br>";
    $i++;
}

echo "<br><br><br>";

echo "---------------Menghapus isi array---------------<br><br>";


// Menghapus isi Array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];
// sebelum dihapus
echo "Sebelum dihapus";
echo "<pre>";
print_r($hewan);
echo "</pre>";


// menghapus isi array dengan indeks 1 yaitu  "Kucing"
unset($hewan[1]);


echo "Setelah dihapus";
echo "<pre>";
print_r($hewan);
echo "</pre>";


echo "<br><br><br>";
echo "---------------Menambah isi array---------------<br><br>";

$hobiKita = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// sebelum ditambahakan
echo "Sebelum ditambahakan";
echo "<pre>";
print_r($hobiKita);
echo "</pre>";

// menambahkan isi pada idenks ke-3
$hobiKita[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobiKita[] = "Olahraga";

// sesudah ditambahakan
echo "Sesudah ditambahakan";
echo "<pre>";
print_r($hobiKita);
echo "</pre>";


// Apabila kita menambahkan pada indeks yang sudah memiliki isi, maka isinya akan ditindih dengan yang baru.
?>