<!DOCTYPE html>
<html>

    <head>
            <title>Welcome to McDonald's</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            
    </head>
    <body>

    
        <!-- Bagian Header-->
        <div class="header">
        <table width="100%" height="100%">
            <tr>
            <td><div class="judul"><img src="logo mc2.png" width="20%"></div></td>

                <td><div class="tautan">
                <h2>
                <a href=home.html>Home</a>
                <a href=transaksi.php>Transaksi</a>
                <a href=tambahfoto.php>Tambahfoto</a></h2>
                </div></td>
            </tr>
        </table>
        </div>
        
        
        <!-- Bagian Penghitungan-->
<?php
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    
    if($status == "Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }
    }else if($status == "Non-Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }
    }
   
    
?>


        <!-- Bagian output pembayaran-->
        <div class="paragraf">
        <table>
                <tr>
                    <td>Nama Pembeli </td>
                    <td>:<?php echo $nama?></td>
                </tr>
                    <td>Status Pembeli </td>
                    <td>:<?php echo $status?></td>
                <tr>
                    <td>Total Harga </td>
                    <td>:<?php echo $total?></td>
                </tr>
                <tr>
                    <td>Total Diskon </td>
                    <td>:<?php echo $diskon?></td>
                <tr>
                <tr>
                    <td>================================</td>
                </tr>
        </table>
        <h2 style="color: red;">Harga Bayar   :<?php echo $bayar?></h2>
        </div>


        <!-- Bagian Footer-->
        <div class="footer" align="center"> Copyright &copy;  McDonald's
        <br>
        </div>

    <body>
</html>