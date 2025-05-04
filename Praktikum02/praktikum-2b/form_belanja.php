<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-white-100 p-1">
<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="total_belanja.php" class="container-fluid mt-2 rounded">
                <hr class="mb-6">
                    <legend class="float-none w-auto px-3 h3">Belanja Online</legend>
                    <hr class="mb-6">
                    <!-- <div class="max-w-4xl mx-auto bg-white p-6 rounded">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="col-span-2">    -->
                                <div class="form-group row">
                                    <label for="nama_customer" class="col-4 col-form-label font-weight-bold">Customer</label> 
                                    <div class="col-8">
                                    <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 font-weight-bold">Pilih Produk</label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
                                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                    </div>
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label font-weight-bold">Jumlah</label> 
                                    <div class="col-3">
                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary" style="background-color: green;">Kirim</button>
                                    </div>
                            </div>
                </form>
            </div>
            <div class="col-md-4">        
                <ul class="list-group mt-2" size=mt-2>
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">KULKAS : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>            
</body>
</html>