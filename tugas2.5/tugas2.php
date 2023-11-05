<?php
// Simpan data dalam associative array
$data = array(
    array(
        "NAMA" => "Apple",
        "TAHUN BERDIRI" => "1 April 1976.",
        "Gambar" => "1.jpg",
        "PENDIRI" => "Steve Jobs, Steve Wozniak, dan Ronald Wayne",
        "PRODUK POPULER" => "iPhone, iPad, Apple Watch, AirPods, MacBook  "
    ),
    array(
        "NAMA" => "Microsoft . ",
        "TAHUN BERDIRI" => "4 April 1975 .",
        "Gambar" => "2.jpg",
        "PENDIRI" => "Bill Gates dan Paul Ellen", 
        "PRODUK POPULER" => "Microsoft, MS Office, Microsoft Teams  "
    ),
    array(
        "NAMA" => "Amazon  . ",
        "TAHUN BERDIRI" => "5 Juli 1994 .",
        "Gambar" => "3.jpg",
        "PENDIRI" => "Jeff Bezos.",
        "PRODUK POPULER" => "Amazon Store, Amazon Prime"
    ),
    array(
        "NAMA" => "Platform Meta  . ",
        "TAHUN BERDIRI" => "Februari 2004 .",
        "Gambar" => "4.png",
        "PENDIRI" => "Mark Zuckerberg.",
        "PRODUK POPULER" => " Facebook, Instagram, WhatsApp"
    ),
    array(
        "NAMA" => "Alibaba . ",
        "TAHUN BERDIRI" => "tahun 1999 .",
        "Gambar" => "5.jpeg",
        "PENDIRI" => "Jack Ma.",
        "PRODUK POPULER" => " Alibaba.com "
    ),
    array(
        "NAMA" => "Samsung grup . ",
        "TAHUN BERDIRI" => "Maret 1938 .",
        "Gambar" => "6.jpg",
        "PENDIRI" => "Lee Byung-chull .",
        "PRODUK POPULER" => "  Phones, televisions "

    ),
    array(
        "NAMA" => "Oracle Corporation  . ",
        "TAHUN BERDIRI" => "June 16, 1977.",
        "Gambar" => "7.jpg",
        "PENDIRI" => "Larry Ellison  .",
        "PRODUK POPULER" => " Oracle Cloud, Java, MySQL, Oracle Linux  "
    
    ),
    array(
        "NAMA" => "adobe  . ",
        "TAHUN BERDIRI" => "Desember 1982.",
        "Gambar" => "8.jpg",
        "PENDIRI" => " John Warnock dan Charles  .",
        "PRODUK POPULER" => " Adobe Acrobat, Adobe Photoshop  "
    
    ),
    array(
        "NAMA" => "Alphabet. ",
        "TAHUN BERDIRI" => "October 2, 2015.",
        "Gambar" => "9.webp",
        "PENDIRI" => "  Larry Page dan Sergey Brin  .",
        "PRODUK POPULER" => " Android, Google, YouTube,  "
    
    ),
    array(
        "NAMA" => "Tencent Holding  . ",
        "TAHUN BERDIRI" => " November 11, 1998  .",
        "Gambar" => "10.jpg",
        "PENDIRI" => "  Ma Huateng.",
        "PRODUK POPULER" => " WeChat, PUBG Mobile,  "
    
    ),
    
    // Tambahkan data lain sesuai kebutuhan
);

// Fungsi untuk menampilkan data dalam tabel
function displayDataInTable($data) {
    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>TAHUN BERDIRI</th><th>Gambar</th><th>PENDIRI</th><th>PRODUK POPULER</th></tr>";
    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>".$item["NAMA"]."</td>";
        echo "<td>".$item["TAHUN BERDIRI"]."</td>";
        echo "<td><img src='".$item["Gambar"]."' width='100'></td>";
        echo "<td>".$item["PENDIRI"]."</td>";
        echo "<td>".$item["PRODUK POPULER"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Panggil fungsi untuk menampilkan data
displayDataInTable($data);
?>