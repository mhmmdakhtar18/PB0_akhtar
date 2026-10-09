<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

  //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();

$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$jumlahpajak = $produk->harga * produk::PAJAK; // 1.1 juta

//total
$total = $produk->harga + $jumlahpajak; //11,1 juta

//Hasil
echo "Produk:", $produk->nama;
echo "<br/>";

echo "harga: Rp.", $produk->harga;
echo "<br/>";

echo "stok:", $produk->stok;
echo "<br/>";

echo "pajak:", $pajak . "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $total;