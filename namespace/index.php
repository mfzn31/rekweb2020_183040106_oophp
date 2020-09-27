<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shone Jump", 40000, 100); 
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 350000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ServiceProduk;


New ServiceUser();
echo "<br>";
New ServiceProduk();

