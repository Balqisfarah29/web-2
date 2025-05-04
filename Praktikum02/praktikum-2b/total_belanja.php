<?php
// buat variabel yang menerima value yang dikirim dari form
require_once 'form_belanja.php';
$nama_customer = isset($_POST['nama_customer']) ? $_POST['nama_customer'] : null; // Nama Customer
$produk = isset($_POST['produk']) ? $_POST['produk'] : null; // Produk yang dipilih
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : null; // Jumlah yang dibeli

    // LOGIKA MENGHITUNG TOTAL HARGA
$harga_produk = 0;
    switch ($produk) {
        case "TV":
            $harga_produk = 4200000; // Harga TV
            break;
        case "KULKAS":
            $harga_produk = 3100000; // Harga Kulkas
            break;
        case "MESIN CUCI":
            $harga_produk = 3800000; // Harga Mesin Cuci
            break;
    }

// menghitung total belanja
$total_belanja = $harga_produk * $jumlah;

// mencetak belanjaan
// echo "<h3>Data yang Dikirim:</h3>";
    echo "<p>Nama Customer : $nama_customer</p>";
    echo "<p>Produk Pilihan : $produk</p>";
    echo "<p>Jumlah Beli : $jumlah</p>";
    echo "<p>Total Belanja : Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";

?>