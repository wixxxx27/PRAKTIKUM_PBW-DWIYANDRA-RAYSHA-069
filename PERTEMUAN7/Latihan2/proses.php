<?php

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['sms']; 
    $biaya_ukt = $_POST['ukt'];
    $diskon = 0;


        if ($biaya_ukt >= 5000000) {
        }
        else  {
            echo "<h2> Input Biaya UKT Tidak Valid!!! </h2>";
            echo "<p> Batas UKT hanya Rp 500.000 </p>";
        }

        if ($semester > 8) {
            $diskon = 15; 

        if ($semester > 14) {
            echo "<h2> Input Semester Tidak Valid!!! </h2>";
            echo "<p> Batas Semester hanya semester 14 </p>";
        exit;
        } else {
            $diskon = 10; 
        }
        
    } else {
        
        $diskon = 0;
    }

    
    $total_diskon = ($diskon / 100) * $biaya_ukt;
    $total_bayar = $biaya_ukt - $total_diskon;


    ?>
    <div style="border: 2px solid black; padding: 20px; width: fit-content; font-family: sans-serif;">
        <h3>Total UKT yang harus kamu bayar!!</h3>
        <p>NPM : <?php echo $npm; ?></p>
        <p>NAMA : <?php echo $nama; ?></p>
        <p>PRODI : <?php echo $prodi; ?></p>
        <p>SEMESTER : <?php echo $semester; ?></p>
        <p>BIAYA UKT : Rp. <?php echo number_format($biaya_ukt, 0, ',', '.'); ?>,-</p>
        <p>DISKON : <?php echo $diskon; ?>%</p>
        <p>YANG HARUS DIBAYAR : Rp. <?php echo number_format($total_bayar, 0, ',', '.'); ?></p>
    </div>
    <?php 

