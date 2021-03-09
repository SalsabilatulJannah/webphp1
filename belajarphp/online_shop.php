<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-primary p-5" >
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="online_shop.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="mesin cuci" >
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping</label>
                    <input type="date" name="tanggal_pengiriman" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control" name="jenis_kurir">
                    <option selected>Choose Courier Type :</option>
                    <option value="tiki">Tiki</option>
                    <option value="sicepat">Si Cepat</option>
                    <option value="pos">Pos</option>
                    <option value="grab">Grab</option>
                    <option value="gojek">Gojek</option>
                   
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat_pengiriman" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="biaya_jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-sm btn-block" >

            </form>
            <?php

            error_reporting(0);
                
                $customer = $_POST['customer'];
                $item = $_POST['item'];
                $total_item = $_POST['total_item'];
                $tanggal_pengiriman = $_POST['tanggal_pengiriman'];
                $jenis_kurir = $_POST['jenis_kurir'];
                $alamat_pengiriman = $_POST['alamat_pengiriman'];
                $biaya_kurir = $_POST['biaya_kurir'];
                $biaya_jaminan = $_POST['biaya_jaminan'];
                $simpan = $_POST['simpan'];
                if($item == "tv") {
                    $total_cost = 3000000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                } else if ($item == "refrigator") {
                    $total_cost = 6000000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                } else{
                    $total_cost = 4000000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                }
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result 
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer; ?></li>
                    <li class="list-group-item">Item : <?= $item; ?></li>
                    <li class="list-group-item">Date Shipping : <?= $tanggal_pengiriman; ?> </li>
                    <li class="list-group-item">Courier Type :<?= $jenis_kurir; ?></li>
                    <li class="list-group-item">Shipping Address :<?= $alamat_pengiriman; ?></li>
                    <li class="list-group-item">Courier Cost : <?= $biaya_kurir; ?></li>
                    <li class="list-group-item">Assurance Cost : <?= $biaya_jaminan; ?> </li>
                    <li class="list-group-item">Total Cost :<?= $total_cost; ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>