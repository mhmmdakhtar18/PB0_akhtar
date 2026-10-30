<?php

//panggil file propertyconstant
require('./PropertyConstan.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P001', 'Laptop', 10000000, 5);

//Hasil
echo "Produk:", $produk->nama;
echo "<br/>";

echo "harga: Rp.", $produk->harga;
echo "<br/>";

echo "stok:", $produk->stok;
echo "<br/>";

echo "pajak:", $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();