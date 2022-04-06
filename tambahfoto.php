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
                <td><div class="tautan"><h2>
                <a href=home.html>Home</a>
                <a href=transaksi.html>Transaksi</a>
                <a href=tambahfoto.php>Tambahfoto</a></h2>
                </div></td>
            </tr>
        </table>
        </div>

         <!-- Bagian prose upload-->
        <?php
    $target_path="upluodfile/";

    $target_path = $target_path . basename(
    $_FILES['uploadedfile']['name']);

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
        echo "The file" . basename($_FILES['uploadedfile']['name'])."has been uploaded";
    }else{
        echo "There was an error uploading the file, please try again!";
    }
?>

        <!-- Bagian Footer-->
        <div class="footer" align="center"> Copyright &copy;  McDonald's
        <br>
        </div>

    <body>
</html>
