<?php
$proses = $_POST['proses'];
$nama_lengkap = $_POST['nama_lengkap'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

// Inisialisasi variabel
$total_nilai = 0;
$grade = '';
$predikat = '';
$status = '';

/* PENENTUAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE
SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan TUGAS 35% melebihi 55*/
if (isset($_POST['proses'])) {
    // Mengambil nilai dari form
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // Menghitung total nilai
    $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Menentukan kelulusan
    if ($total_nilai > 55) {
        $status = "LULUS";
    } else {
        $status = "LULUS"; 
    }

    /* MENENTUKAN GRADE NILAI MENGGUANAKAN IF ELSE
    0-35 = E
    36-55 = D
    56-69 = C 
    70-84 = B 
    85-100 = A
    < 0 || > 100 = I
    */
    if ($total_nilai >= 0 && $total_nilai <= 35) {
        $grade = 'E';
    } else if ($total_nilai >= 36 && $total_nilai <= 55) {
        $grade = 'D';
    } else if ($total_nilai >= 56 && $total_nilai <= 69) {
        $grade = 'C';
    } else if ($total_nilai >= 70 && $total_nilai <= 84) {
        $grade = 'B';
    } else if ($total_nilai >= 85 && $total_nilai <= 100) {
        $grade = 'A';
    } else {
        $grade = 'I';
    }


    /* MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SWITCH
    E = Sangat Kurang
    D = Kurang 
    C = Cukup
    B = Memuaskan
    A = Sangat Memuaskan
    I = Tidak Ada
    */
    switch ($grade) {
        case 'A':
            $predikat = 'Sangat Memuaskan';
            break;
        case 'B':
            $predikat = 'Memuaskan';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        case 'E':
            $predikat = 'Sangat Kurang';
            break;
        default:
            $predikat = 'Tidak Ada';
            break;
    }   

    
    echo 'Proses : ' . $proses;
    echo '<br/>Nama Lengkap : ' . $nama_lengkap;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    echo '<br/>Nilai Akhir : ' . $total_nilai;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;
    
}
?>