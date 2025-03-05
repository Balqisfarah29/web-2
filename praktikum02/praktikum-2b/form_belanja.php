<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Belanja</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!-- Daftar Harga -->
  <div class="col-4" style="float: right;">
    <div class="card">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
            <li class="list-group-item">Mesin Cuci: Rp 2.500.000</li>
            <li class="list-group-item">Kulkas: Rp 2.000.000</li>
            <li class="list-group-item">Microwave: Rp 1.300.000</li>
            <li class="list-group-item">Smart TV: Rp 4.000.000</li>
            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>
  </div>

<div class="col-8">
  <div class="Header">
    <header class="border-bottom">
      <h3>Belanja Online</h3>
    </header>
  </div>

<form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" placeholder="nama customer" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_mesin_cuci" type="radio" class="custom-control-input" value="Mesin Cuci" required> 
        <label for="radio_mesin_cuci" class="custom-control-label">Mesin Cuci</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_kulkas" type="radio" class="custom-control-input" value="Kipas Angin" required> 
        <label for="radio_kulkas" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_microwave" type="radio" class="custom-control-input" value="Microwave" required> 
        <label for="radio_microwave" class="custom-control-label">Microwave</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_smart_t" type="radio" class="custom-control-input" value="Smart TV" required> 
        <label for="radio_smart_tv" class="custom-control-label">Smart TV</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input type="number" id="jumlah" placeholder="number" name="jumlah" class="form-control" require min="1">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<!-- Hasil Form -->
<div class="mt-4">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST['nama']);
      $produk = htmlspecialchars($_POST['produk']);
      $jumlah = (int) htmlspecialchars($_POST['jumlah']);
      
      $harga_produk = [
          "Mesin Cuci" => 2500000,
          "Kulkas" => 2000000,
          "Microwave" => 1300000,
          "Smart TV" => 4000000,
      ];
                    
      $total_belanja = $harga_produk[$produk] * $jumlah;
      
      echo "<h3>Data yang Dikirim:</h3>";
      echo "<p>Nama Pembeli: $nama</p>";
      echo "<p>Produk: $produk</p>";
      echo "<p>Jumlah: $jumlah</p>";
      echo "<p>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
    }
      ?>
  </div>
</div>

</body>

</html>