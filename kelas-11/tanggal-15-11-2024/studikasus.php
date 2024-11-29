<?php
// Daftar produk dan harga (array asosiatif)
$produk = [
    "Beras" => 5     0000,
    "Gula" => 15000,
    "Minyak Goreng" => 25000,
    "Telur" => 30000,
    "Susu" => 10000
];

// Barang yang dibeli (array biasa)
$keranjang = ["Beras", "Gula", "Minyak Goreng", "Telur"];

// Menghitung total belanja
$totalBelanja = 0;

echo "Daftar Belanja Anda:<br>";
foreach ($keranjang as $item) {
    if (isset($produk[$item])) { // Percabangan untuk memeriksa ketersediaan barang
        echo "$item: Rp " .$produk[$item]. "<br>";
        $totalBelanja += $produk[$item];
    } else {
        echo "$item tidak tersedia di toko.\n";
    }
}

// Diskon jika total belanja lebih dari Rp100,000
if ($totalBelanja > 100000) {
    $diskon = 0.1; // Diskon 10%
    $totalAkhir = $totalBelanja - ($totalBelanja * $diskon);
    echo "\nAnda mendapatkan diskon 10%!\n";
    echo "Total belanja setelah diskon: Rp " . number_format($totalAkhir, 0, ',', '.') . "\n";
} else {
    echo "\nTotal belanja Anda: Rp " . number_format($totalBelanja, 0, ',', '.') . "\n";
}
?>
