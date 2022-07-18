<?php 
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("guestbook.txt", "r");
    echo("<center><h1>Table Guest Book</h1>");
    echo ("<a href='tampilan.php'>::Isi Buku Tamu::</a><br><hr>");
    echo "<table border='1' width='70%' style='text-align: center;'>";
    echo("<tr><td>Tanggal</td><td>Nama</td><td>Email</td><td>Alamat</td><td>Status</td><td>Komentar</td></tr>");
    $tanggal=date("d-m-Y");
    while ($isi = fgets($fp)) {
        $pisah = explode('|', $isi);
        echo("<tr><td>$tanggal</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>");
    }
echo "</table></center>";
?>