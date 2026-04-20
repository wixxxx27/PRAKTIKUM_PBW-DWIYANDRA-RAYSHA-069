#FOR loop

<?php
for ($i = 1; $i <= 100; $i++) {
echo "Angka ke-”.$i.”<br>";}

$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
echo $buah[$i] . "<br>";} ?>

# Foreach loop

<?php
$mahasiswa = [
"10001" => "Andi",
"10002" => "Budi",
"10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
echo "NIM: ". $nim .", Nama:". $nama ."<br>";} 
?>

# Switch Case

<?php
    $hari = "Selasa";

switch ($hari) {
    case "Senin":
echo "Hari pertama kerja!";
break;
    case "Jum'at":
echo "Solat jumat!";
break;
    case "Minggu":
echo "Libur akhir pekan!";
break;
    default:
echo "Hari biasa.";}
?>

# While loop

<?php
$nilai = 1;

while ($nilai <= 5) {
echo "Nilai: ". $nilai ."<br>";
$nilai++;
}?>

# Tenary Operator

<?php
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
echo $status;
?>