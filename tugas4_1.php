<?php
  echo "Seorang petani membeli beberapa ekor anak
   kambing dengan harga Rp. 8.000,- , Dia jual dengan
   harga Rp. 7.500,- dan mendapat keuntungan 300 rupiah
   untuk tiap ekor anak kambing. Berapa ekor anak
   kambing yang ia beli ? <br>";
   $beli = 8000;
   $jual = 7500;
   $untung = 300;
   $jumlah = ($beli-$jual)/$untung;

  echo "Harga Beli = Rp. $beli <br>";
  echo "Harga Jual = Rp. $jual <br>";
  echo "Keuntungan = Rp. $untung <br>";
  echo "Berapa Jumlah kambing yang dibeli ? <br>";
  echo "Jawaban :...ekor <br>";
  echo "Jumlah kambing = ($beli-$jual)/$untung = 500/300 = $jumlah = ".round($jumlah) ;
  echo "<br>";
  echo "Jadi jumlah anak ekor kambing yang dibeli adalah 2 ekor  ";
 ?>
