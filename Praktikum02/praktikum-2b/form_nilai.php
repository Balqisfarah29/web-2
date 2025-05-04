<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class=bg-white-100>
<form method="POST" action="nilai_mahasiswa.php" class="container mt-3 rounded">
<div class="container mx-auto mt-10">
<div class="bg-white p-6 rounded shadow-md">
<h4 class="text-m mb-2 bg-black">Sistem Penilaian</h4>
<hr class="mb-6">
<h3 class="text-2xl font-semibold mb-6">Form Nilai Siswa</h3>
<hr class="mb-6">
<div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label font-weight-bold">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Pemograman Web">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label font-weight-bold">Nilai UTS</label> 
    <div class="col-4">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label font-weight-bold">Nilai UAS</label> 
    <div class="col-4">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label font-weight-bold">Nilai Tugas/Praktikum</label> 
    <div class="col-4">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</body>
</html>