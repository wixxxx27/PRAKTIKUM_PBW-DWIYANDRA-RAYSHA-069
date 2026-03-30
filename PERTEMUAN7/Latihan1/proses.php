<?php
    $name = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nilai < 0 || $nilai > 100) {
        echo "<h1>Hasil!!</h1>";
    }
    if ($nilai > 100){
        echo "<h2> Nilai Input Tidak Valid!!! </h2>";
        exit;
    }
    if ($nilai >= 90) {
        $predikat = "A";
        $status = "Lulus";
    } else if ($nilai >= 80) {
        $predikat = "B";
        $status = "Lulus";
    } else if ($nilai >= 70) {
        $predikat = "C";
        $status = "Lulus";
    } else if ($nilai >= 60) {
        $predikat = "D";
        $status = "Lulus";
    } else {
        $predikat = "E";
        $status = " Tidak Lulus";
    }

?>
    <h2>Hasil!!</h2>
    <p>Nama : <?php echo $name; ?></p>
    <p>Nilai : <?php echo $nilai; ?></p>
    <p>Predikat : <?php echo "" . $predikat; ?></p>
    <p>Status : <?php echo "" . $status; ?></p>
