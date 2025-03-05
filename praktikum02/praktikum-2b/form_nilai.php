<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" style="padding: .75rem 1.25rem;">Sistem Penilaian</a>
        </div>
    </nav>

<div class="container mt-4">
    <div class="card" style="border-style: none;">
        <div class="card-harder bg-white">
            <h3 style="margin-left: 0;">Form Nilai Mahasiswa</h3>
        </div>
        <div class="card-body col-12 text-end align-middle">
            <form class="form-horizontal" method="POST" action="nilai_mahasiswa.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                        <input id="name" name="name" placeholder="Balqis Farah Kamilah Muhadi" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="DDP">Dasar - Dasar Pemrograman</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemweb">Pemrograman Web</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
                </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
      <input id="tugas" name="tugas" placeholder="Nilai Tugas/Praktikum" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>